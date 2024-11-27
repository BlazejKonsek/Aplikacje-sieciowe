<?php
require_once 'init.php';

// Decide what to do based on the 'action' parameter

switch ($action) {
    case 'calcView':
        // Create and use the controller object
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process();
        break;
    case 'login':
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogin();
        break;
    case 'logout':
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogout();
        break;
    default:
        // Default action (calcView)
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView();
        break;
}
?>
