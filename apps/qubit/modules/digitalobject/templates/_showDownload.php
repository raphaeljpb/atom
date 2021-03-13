<?php use_helper('Text') ?>

<?php if (QubitTerm::REFERENCE_ID == $usageType) { ?>

  <?php if (isset($link)) { ?>
    <?php echo link_to(image_tag($representation->getFullPath(), ['alt' => __($representation->getDigitalObjectAltText() ?: 'Open original %1%', ['%1%' => sfConfig::get('app_ui_label_digitalobject')])]), $link) ?>
  <?php } else { ?>
    <?php echo image_tag($representation->getFullPath(), ['alt' => __($representation->getDigitalObjectAltText() ?: 'Original %1% not accessible', ['%1%' => sfConfig::get('app_ui_label_digitalobject')])]) ?>
  <?php } ?>

<?php } else { ?>

  <?php if ($iconOnly && isset($link)) { ?>

    <?php echo link_to(image_tag($representation->getFullPath(), ['alt' => __($representation->getDigitalObjectAltText() ?: 'Open original %1%', ['%1%' => sfConfig::get('app_ui_label_digitalobject')])]), $link) ?>

  <?php } else { ?>

    <div style="width: 100px; text-align: center"/>

      <?php if (isset($link)) { ?>
        <?php echo link_to(image_tag($representation->getFullPath(), ['alt' => __($representation->getDigitalObjectAltText() ?: 'Open original %1%', ['%1%' => sfConfig::get('app_ui_label_digitalobject')])]), $link) ?>
      <?php } else { ?>
        <?php echo image_tag($representation->getFullPath(), ['alt' => __($representation->getDigitalObjectAltText() ?: 'Original %1% is not accessible', ['%1%' => sfConfig::get('app_ui_label_digitalobject')])]) ?>
      <?php } ?>

      <?php echo wrap_text($digitalObject->name, 15) ?>

    </div>

  <?php } ?>

<?php } ?>
