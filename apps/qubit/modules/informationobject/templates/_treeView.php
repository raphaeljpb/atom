<ul id="treeview-menu" class="nav nav-tabs">
  <?php if ($treeviewType == 'sidebar') { ?>
    <li class="active">
      <a href="#treeview" data-toggle="#treeview">
        <?php echo __('Holdings'); ?>
      </a>
    </li>
  <?php } ?>
  <li <?php echo ($treeviewType != 'sidebar') ? 'class="active"' : ''; ?>>
    <a href="#treeview-search" data-toggle="#treeview-search">
      <?php echo __('Quick search'); ?>
    </a>
  </li>
</ul>

<div id="treeview" data-current-id="<?php echo $resource->id; ?>" data-sortable="<?php echo empty($sortable) ? 'false' : 'true'; ?>">

  <?php if ($treeviewType == 'sidebar') { ?>

    <ul class="unstyled">

      <?php // Ancestors ?>
      <?php foreach ($ancestors as $ancestor) { ?>
        <?php if (QubitInformationObject::ROOT_ID == $ancestor->id) continue; ?>
        <?php echo render_treeview_node(
          $ancestor,
          ['ancestor' => true, 'root' => QubitInformationObject::ROOT_ID == $ancestor->parentId],
          ['xhr-location' => url_for([$ancestor, 'module' => 'informationobject', 'action' => 'treeView'])]); ?>
      <?php } ?>

      <?php // Prev siblings (if there's no children) ?>
      <?php if (!isset($children)) { ?>

        <?php // More button ?>
        <?php if ($hasPrevSiblings) { ?>
          <?php echo render_treeview_node(
            null,
            ['more' => true],
            ['xhr-location' => url_for([$prevSiblings[0], 'module' => 'informationobject', 'action' => 'treeView']),
                  'numSiblingsLeft' => $siblingCountPrev]); ?>
        <?php } ?>

        <?php // N prev items ?>
        <?php if (isset($prevSiblings)) { ?>
          <?php foreach ($prevSiblings as $prev) { ?>
            <?php echo render_treeview_node(
              $prev,
              ['expand' => 1 < $prev->rgt - $prev->lft],
              ['xhr-location' => url_for([$prev, 'module' => 'informationobject', 'action' => 'treeView'])]); ?>
          <?php } ?>
        <?php } ?>

      <?php } ?>

      <?php // Current ?>
      <?php echo render_treeview_node(
        $resource,
        ['ancestor' => $resource->hasChildren(), 'active' => true, 'root' => QubitInformationObject::ROOT_ID == $resource->parentId],
        ['xhr-location' => url_for([$resource, 'module' => 'informationobject', 'action' => 'treeView'])]); ?>

      <?php // Children ?>
      <?php if (isset($children)) { ?>

        <?php foreach ($children as $child) { ?>
          <?php echo render_treeview_node(
            $child,
            ['expand' => $child->hasChildren()],
            ['xhr-location' => url_for([$child, 'module' => 'informationobject', 'action' => 'treeView'])]); ?>
        <?php } ?>

        <?php // More button ?>
        <?php $last = isset($child) ? $child : $resource; ?>
        <?php if ($hasNextSiblings) { ?>
          <?php echo render_treeview_node(
            null,
            ['more' => true],
            ['xhr-location' => url_for([$child, 'module' => 'informationobject', 'action' => 'treeView']),
                  'numSiblingsLeft' => $siblingCountNext]); ?>
        <?php } ?>

      <?php // Or siblings ?>
      <?php } elseif (isset($nextSiblings)){ ?>

        <?php // N next items ?>
        <?php foreach ($nextSiblings as $next) { ?>
          <?php echo render_treeview_node(
            $next,
            ['expand' => 1 < $next->rgt - $next->lft],
            ['xhr-location' => url_for([$next, 'module' => 'informationobject', 'action' => 'treeView'])]); ?>
        <?php } ?>

        <?php // More button ?>
        <?php $last = isset($next) ? $next : $resource; ?>
        <?php if ($hasNextSiblings) { ?>
          <?php echo render_treeview_node(
            null,
            ['more' => true],
            ['xhr-location' => url_for([$last, 'module' => 'informationobject', 'action' => 'treeView']),
                  'numSiblingsLeft' => $siblingCountNext]); ?>
        <?php } ?>

      <?php } ?>

    </ul>

  <?php } else { ?>

    <input type="button" id="fullwidth-treeview-reset-button" class="c-btn c-btn-submit" value="<?php echo __('Reset'); ?>" />
    <input type="button" id="fullwidth-treeview-more-button" class="c-btn c-btn-submit" data-label="<?php echo __('%1% more'); ?>" value="" />
    <span id="fullwidth-treeview-configuration"
      data-collection-url="<?php echo url_for([$resource->getCollectionRoot(), 'module' => 'informationobject']); ?>"
      data-collapse-enabled="<?php echo $collapsible; ?>"
      data-opened-text="<?php echo sfConfig::get('app_ui_label_fullTreeviewCollapseOpenedButtonText'); ?>"
      data-closed-text="<?php echo sfConfig::get('app_ui_label_fullTreeviewCollapseClosedButtonText'); ?>"
      data-items-per-page="<?php echo $itemsPerPage; ?>"></span>

  <?php } ?>

</div>

<div id="treeview-search" <?php echo ($treeviewType != 'sidebar') ? 'class="force-show"' : ''; ?>>

  <form method="get" action="<?php echo url_for(['module' => 'search', 'action' => 'index', 'collection' => $resource->getCollectionRoot()->id]); ?>" data-not-found="<?php echo __('No results found.'); ?>">
    <div class="search-box">
      <input type="text" name="query" placeholder="<?php echo __('Search'); ?>" />
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>
  </form>

</div>
