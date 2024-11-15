<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

require_once _ROOT_PATH.'/app/CalcCtrl.class.php';

$ctrl = new CalcCtrl();
$ctrl->process();
?>
