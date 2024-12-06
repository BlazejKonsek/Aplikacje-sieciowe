<?php
function getFromRequest($param_name){
	return isset($_REQUEST[$param_name]) ? $_REQUEST[$param_name] : null;
}

function getRole() {
	$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;
	return isset($user) ? $user->role : '';
}

function checkRole($required_role) {
	$current_role = getRole();
	return $current_role == $required_role;
}
