<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/libs/Smarty/libs/Smarty.class.php';

session_start();


function getParamsLogin(&$form){
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

function validateLogin(&$form, &$messages){
    if (!isset($form['login']) || !isset($form['pass'])) {
        return false;
    }

    if ($form['login'] == "") {
        $messages[] = 'Nie podano loginu';
    }
    if ($form['pass'] == "") {
        $messages[] = 'Nie podano hasła';
    }

    if (count($messages) > 0) return false;

    if ($form['login'] == "admin" && $form['pass'] == "admin") {
        $_SESSION['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['pass'] == "user") {
        $_SESSION['role'] = 'user';
        return true;
    }

    $messages[] = 'Niepoprawny login lub hasło';
    return false;
}

$form = array();
$messages = array();

getParamsLogin($form);

if (!validateLogin($form, $messages)) {
    $smarty = new Smarty();

    $smarty->setTemplateDir(_ROOT_PATH.'/templates/');
    $smarty->setCompileDir(_ROOT_PATH.'/templates_c/');
    $smarty->setCacheDir(_ROOT_PATH.'/cache/');

    $smarty->assign('app_url', _APP_URL);
    $smarty->assign('root_path', _ROOT_PATH);

    $smarty->assign('form', $form);
    $smarty->assign('messages', $messages);

    $smarty->display('login_view.tpl');
} else {
    header("Location: "._APP_URL."/index.php");
}
?>
