<?php
require_once dirname(__FILE__) . '/../../config.php';
require_once $conf->root_path . '/libs/Smarty/libs/Smarty.class.php';
require_once $conf->root_path . '/libs/Messages.class.php';

session_start();

$form = array();
$msgs = new Messages();

function getParamsLogin(&$form) {
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

function validateLogin(&$form, &$msgs) {
    if (!isset($form['login']) || !isset($form['pass'])) {
        return false;
    }

    if ($form['login'] == "") {
        $msgs->addError('Nie podano loginu');
    }
    if ($form['pass'] == "") {
        $msgs->addError('Nie podano hasła');
    }

    if ($msgs->isError()) return false;

    if ($form['login'] == "admin" && $form['pass'] == "admin") {
        $_SESSION['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['pass'] == "user") {
        $_SESSION['role'] = 'user';
        return true;
    }

    $msgs->addError('Niepoprawny login lub hasło');
    return false;
}

getParamsLogin($form);

if (!validateLogin($form, $msgs)) {
    $smarty = new Smarty();

    $smarty->setTemplateDir($conf->root_path . '/templates/');
    $smarty->setCompileDir($conf->root_path . '/templates_c/');
    $smarty->setCacheDir($conf->root_path . '/cache/');
    $smarty->assign('conf', $conf);

    $smarty->assign('page_title', 'Logowanie');
    $smarty->assign('form', $form);
    $smarty->assign('msgs', $msgs);
    $smarty->assign('role', ''); // Assign role as empty if not set

    $smarty->display('login_view.tpl');
} else {
    header("Location: " . $conf->app_url . "/index.php");
}
?>
