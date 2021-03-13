<div class="logo">
  <?php echo image_tag('logo', ['id' => 'logo', 'alt' => 'Home']); ?>
</div>

<h1>Installation</h1>

<div class="section">

  <div class="content">
    <ol class="clearfix task-list">
      <li<?php switch ($sf_request->action) { case 'checkSystem': ?> class="active"<?php break;

case 'configureDatabase': case 'configureSearch': case 'loadData': case 'configureSite': case 'finishInstall': ?> class="done"<?php } ?>>Check system</li>
      <li<?php switch ($sf_request->action) { case 'configureDatabase': ?> class="active"<?php break;

case 'configureSearch': case 'loadData': case 'configureSite': case 'finishInstall': ?> class="done"<?php } ?>>Configure database</li>
      <li<?php switch ($sf_request->action) { case 'configureSearch': ?> class="active"<?php break;

case 'loadData': case 'configureSite': case 'finishInstall': ?> class="done"<?php } ?>>Configure search</li>
      <li<?php switch ($sf_request->action) { case 'loadData': ?> class="active"<?php break;

case 'configureSite': case 'finishInstall': ?> class="done"<?php } ?>>Load data</li>
      <li<?php switch ($sf_request->action) { case 'configureSite': ?> class="active"<?php break;

case 'finishInstall': ?> class="done"<?php } ?>>Configure site</li>
    </ol>
  </div>

</div>
