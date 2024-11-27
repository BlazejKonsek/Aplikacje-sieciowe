<?php
require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php'; // Set up configuration

function &getConf() {
    global $conf;
    return $conf;
}

// Load the Messages class definition and create an object
require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages() {
    global $msgs;
    return $msgs;
}

// Prepare Smarty, create it only once - when needed
$smarty = null;
function &getSmarty() {
    global $smarty;
    if (!isset($smarty)) {
        include_once 'libs/Smarty/libs/Smarty.class.php';
        $smarty = new Smarty();
        // Assign configuration and messages
        $smarty->assign('conf', getConf());
        $smarty->assign('msgs', getMessages());
        // Define template directories (so we don't have to specify paths when including them)
        $smarty->setTemplateDir(array(
            'one' => getConf()->root_path . '/app/views',
            'two' => getConf()->root_path . '/app/views/templates'
        ));
        $smarty->setCompileDir(getConf()->root_path . '/templates_c/');
        $smarty->setCacheDir(getConf()->root_path . '/cache/');
    }
    return $smarty;
}

// Load and create the class loader
require_once 'core/ClassLoader.class.php';
$cloader = new core\ClassLoader();

function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/functions.php';

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$action = getFromRequest('action');
?>
