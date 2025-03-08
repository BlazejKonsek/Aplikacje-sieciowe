<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/app/security/check.php';


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

$kwota = $_REQUEST['kwota'];
$lata = $_REQUEST['lata'];
$oprocentowanie = $_REQUEST['oprocentowanie'];

$messages = [];

if (!(isset($kwota) && isset($lata) && isset($oprocentowanie))) {
    $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
        $messages[] = 'Kwota kredytu nie jest liczbą całkowitą';
    }
    if (!is_numeric($lata)) {
        $messages[] = 'Liczba lat kredytu nie jest liczbą całkowitą';
    }
    if (!is_numeric($oprocentowanie)) {
        $messages[] = 'Oprocentowanie nie jest liczbą całkowitą';
    }
}

if (empty($messages)) {
    $kwota = floatval($kwota);
    $lata = floatval($lata);
    $oprocentowanie = floatval($oprocentowanie);

    if ($kwota > 10000 && $role != 'admin') {
    $messages[] = 'Tylko administrator może obliczyć ratę dla kwoty powyżej 10,000.';
} else {
    $result = ($kwota + $kwota * ($oprocentowanie / 100)) / ($lata * 12);
    $result = round($result, 2);
}
}

include 'calc_view.php';
?>
