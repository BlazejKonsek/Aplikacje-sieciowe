<?php
// Configuration
$conf->server_name = 'localhost'; // Adjust as needed
$conf->server_url = 'http://' . $conf->server_name;
$conf->app_root = '/zad5'; // Adjust to your application's root path
$conf->action_root = $conf->app_root . '/ctrl.php?action=';

// Values generated based on the above
$conf->action_url = $conf->server_url . $conf->action_root;
$conf->app_url = $conf->server_url . $conf->app_root;
$conf->root_path = dirname(__FILE__);
?>
