<?php
require_once dirname(__FILE__).'/config.php';
require_once _ROOT_PATH.'/app/security/check.php';
header("Location: "._APP_URL."/app/calc.php");
?>
