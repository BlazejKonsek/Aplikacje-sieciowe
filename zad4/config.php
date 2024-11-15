<?php
require_once 'Config.class.php';

$config = new Config();

$config->root_path = dirname(__FILE__);
$config->server_name = 'localhost:80';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/zad4'; // Adjust this to your application's root path
$config->app_url = $config->server_url.$config->app_root;
$config->action_root = $config->app_root.'/index.php?action=';
$config->action_url = $config->server_url.$config->action_root;

// Define constants for backward compatibility
define('_ROOT_PATH', $config->root_path);
define('_APP_ROOT', $config->app_root);
define('_APP_URL', $config->app_url);
define('_ACTION_ROOT', $config->action_root);
define('_ACTION_URL', $config->action_url);
