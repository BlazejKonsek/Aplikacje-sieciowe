<?php
require_once dirname(__FILE__) . '/../config.php';

// Include security check
include $conf->root_path . '/app/security/check.php';

// Load the controller class
require_once $conf->root_path . '/app/CalcCtrl.class.php';

// Create an instance and use it
$ctrl = new CalcCtrl();
$ctrl->process();
?>
