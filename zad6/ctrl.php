<?php
require_once 'init.php';

function isUserLoggedIn(){
	$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;
	return (isset($user) && isset($user->login) && isset($user->role));
}

function requireLogin(){
	if (!isUserLoggedIn()){
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->generateView();
		exit();
	}
}

switch ($action) {
    default: 
        requireLogin();
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView();
    break;

    case 'login': 
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogin();
    break;

    case 'calcCompute': 
        requireLogin();
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process();
    break;

    case 'logout': 
        requireLogin();
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogout();
    break;

    case 'action1': 
        print('Publiczna akcja ...');
    break;

    case 'action2':
        requireLogin();
        print('Akcja niepubliczna ...');
    break;
}
