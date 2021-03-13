<?php decorate_with('layout_1col.php') ?>

<?php slot('title') ?>
  <h1 class="multiline">
    <?php echo __('Edit deaccession record') ?>
    <span class="sub"><?php echo render_title($resource) ?></span>
  </h1>
<?php end_slot() ?>

<?php slot('content') ?>

  <?php echo $form->renderGlobalErrors() ?>

  <?php if (isset($sf_request->getAttribute('sf_route')->resource)) { ?>
    <?php echo $form->renderFormTag(url_for([$resource, 'module' => 'deaccession', 'action' => 'edit']), ['id' => 'editForm']) ?>
  <?php } else { ?>
    <?php echo $form->renderFormTag(url_for(['module' => 'deaccession', 'action' => 'add']), ['id' => 'editForm']) ?>
  <?php } ?>

    <?php echo $form->renderHiddenFields() ?>

    <section id="content">

      <fieldset class="collapsible">

        <legend><?php echo __('Deaccession area') ?></legend>

        <?php echo $form->identifier
          ->label(__('Deaccession number').' <span class="form-required" title="'.__('This is a mandatory element.').'">*</span>')
          ->renderRow() ?>

        <?php echo $form->scope
          ->help(__('Identify if the whole accession is being deaccessioned or if only a part of the accession is being deaccessioned.'))
          ->label(__('Scope').' <span class="form-required" title="'.__('This is a mandatory element.').'">*</span>')
          ->renderRow() ?>

        <?php echo $form->date
          ->help(__('Date of deaccession'))
          ->label(__('Date').' <span class="form-required" title="'.__('This is a mandatory element.').'">*</span>')
          ->renderRow() ?>

        <?php echo render_field($form->description
          ->help(__('Identify what materials are being deaccessioned.'))
          ->label(__('Description').' <span class="form-required" title="'.__('This is a mandatory element.').'">*</span>'), $resource, ['class' => 'resizable']) ?>

        <?php echo render_field($form->extent
          ->help(__('The number of units as a whole number and the measurement of the records to be deaccessioned.')), $resource, ['class' => 'resizable']) ?>

        <?php echo render_field($form->reason
          ->help(__('Provide a reason why the records are being deaccessioned.')), $resource, ['class' => 'resizable']) ?>

      </fieldset>

    </section>

    <section class="actions">
      <ul>
        <?php if (isset($resource->id)) { ?>
          <li><?php echo link_to(__('Cancel'), [$resource, 'module' => 'deaccession'], ['class' => 'c-btn']) ?></li>
          <li><input class="c-btn c-btn-submit" type="submit" value="<?php echo __('Save') ?>"/></li>
        <?php } else { ?>
          <li><?php echo link_to(__('Cancel'), [$resource->accession, 'module' => 'accession'], ['class' => 'c-btn']) ?></li>
          <li><input class="c-btn c-btn-submit" type="submit" value="<?php echo __('Create') ?>"/></li>
        <?php } ?>
      </ul>
    </section>

  </form>

<?php end_slot() ?>
