<?php
require_once dirname(__FILE__).'/../../config.php';

session_start();

$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

if (empty($role)) {
    header("Location: ".$config->app_url."/app/security/login.php");
    exit();
}
?>
