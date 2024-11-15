<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $config->root_path.'/libs/Smarty/libs/Smarty.class.php';
require_once $config->root_path.'/libs/Messages.class.php';

session_start();

$form = array();
$messages = new Messages();

function getParamsLogin(&$form){
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

function validateLogin(&$form, &$messages){
    if (!isset($form['login']) || !isset($form['pass'])) {
        return false;
    }

    if ($form['login'] == "") {
        $messages->addError('Nie podano loginu');
    }
    if ($form['pass'] == "") {
        $messages->addError('Nie podano hasła');
    }

    if ($messages->isError()) return false;

    if ($form['login'] == "admin" && $form['pass'] == "admin") {
        $_SESSION['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['pass'] == "user") {
        $_SESSION['role'] = 'user';
        return true;
    }

    $messages->addError('Niepoprawny login lub hasło');
    return false;
}

// Get parameters and validate
getParamsLogin($form);
$isFormValid = validateLogin($form, $messages);

if (!$isFormValid) {
    // Instantiate Smarty before using it
    require_once $config->root_path.'/libs/Smarty/libs/Smarty.class.php';
    $smarty = new Smarty();

    $smarty->setTemplateDir($config->root_path.'/templates/');
    $smarty->setCompileDir($config->root_path.'/templates_c/');
    $smarty->setCacheDir($config->root_path.'/cache/');

    // Assign variables to the template
    $smarty->assign('config', $config);
    $smarty->assign('form', $form);
    $smarty->assign('messages', $messages);

    $smarty->display('login_view.tpl');
} else {
    header("Location: ".$config->app_url."/index.php");
}
?>
