<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/libs/Smarty/libs/Smarty.class.php';

session_start();

$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

function getParams(&$kwota, &$lata, &$oprocentowanie) {
    $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
    $oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

function validate(&$kwota, &$lata, &$oprocentowanie, &$messages, $role) {
    if (!isset($kwota) && !isset($lata) && !isset($oprocentowanie)) {
        return false; 
    }

    if ($kwota == "") {
        $messages[] = 'Nie podano kwoty kredytu';
    }
    if ($lata == "") {
        $messages[] = 'Nie podano ilości lat kredytu';
    }
    if ($oprocentowanie == "") {
        $messages[] = 'Nie podano stopnia oprocentowania';
    }

    if (empty($messages)) {
        if (!is_numeric($kwota)) {
            $messages[] = 'Kwota kredytu nie jest liczbą';
        }
        if (!is_numeric($lata)) {
            $messages[] = 'Liczba lat kredytu nie jest liczbą';
        }
        if (!is_numeric($oprocentowanie)) {
            $messages[] = 'Oprocentowanie nie jest liczbą';
        }
    }

    if (empty($messages)) {
        $kwota = floatval($kwota);
        $lata = floatval($lata);
        $oprocentowanie = floatval($oprocentowanie);

        if ($kwota > 10000 && $role != 'admin') {
            $messages[] = 'Tylko administrator może obliczyć ratę dla kwoty powyżej 10,000.';
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

function calculate(&$kwota, &$lata, &$oprocentowanie, &$result) {
    $result = ($kwota + $kwota * ($oprocentowanie / 100)) / ($lata * 12);
    $result = round($result, 2);
}

$kwota = null;
$lata = null;
$oprocentowanie = null;
$result = null;
$messages = array();

getParams($kwota, $lata, $oprocentowanie);

if (validate($kwota, $lata, $oprocentowanie, $messages, $role)) {
    calculate($kwota, $lata, $oprocentowanie, $result);
}

$smarty = new Smarty();

$smarty->setTemplateDir(_ROOT_PATH.'/templates/');
$smarty->setCompileDir(_ROOT_PATH.'/templates_c/');
$smarty->setCacheDir(_ROOT_PATH.'/cache/');

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);

$smarty->assign('kwota', $kwota);
$smarty->assign('lata', $lata);
$smarty->assign('oprocentowanie', $oprocentowanie);

$smarty->assign('messages', $messages);
$smarty->assign('result', $result);

$smarty->display('calc_view.tpl');
