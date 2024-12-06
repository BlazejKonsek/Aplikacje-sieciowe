<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php';

function &getConf(){ global $conf; return $conf; }

require_once 'core/Messages.class.php';
$msgs = new core\Messages();
function &getMessages(){ global $msgs; return $msgs; }

$smarty = null;
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		require_once 'libs/Smarty/libs/Smarty.class.php'; 
		$smarty = new Smarty();
		$smarty->assign('conf', getConf());
		$smarty->assign('msgs', getMessages());
		// katalogi szablonów
		$smarty->setTemplateDir(array(
			getConf()->root_path.'/app/views',
			getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php';
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/functions.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$action = getFromRequest('action');
