<?php

function getFromRequest($param_name) {
    return isset($_REQUEST[$param_name]) ? $_REQUEST[$param_name] : null;
}

function getRole() {
    return isset($_SESSION['role']) ? $_SESSION['role'] : '';
}

function checkRole($required_role) {
    $current_role = getRole();
    if ($current_role != $required_role) {
        return false;
    }
    return true;
}
?>
