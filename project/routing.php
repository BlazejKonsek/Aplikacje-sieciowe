<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home');
App::getRouter()->setLoginRoute('loginShow');

// Trasy dostępne dla gościa:
Utils::addRoute('home', 'MainCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('registrationShow', 'RegistrationCtrl');
Utils::addRoute('registration', 'RegistrationCtrl');

// Trasy dla zalogowanego użytkownika (rola: user)
Utils::addRoute('reservationShow', 'ReservationCtrl', ['user']);
Utils::addRoute('reservationSave', 'ReservationCtrl', ['user']);
Utils::addRoute('reservationList', 'ReservationCtrl', ['user']);

// Trasy dla pracownika (rola: employee)
Utils::addRoute('employeePanel', 'EmployeePanelCtrl', ['employee']);
Utils::addRoute('reservationStatusUpdate', 'EmployeePanelCtrl', ['employee']);

// Trasy dla administratora (rola: admin)
Utils::addRoute('adminPanel', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('manageRoles', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('resetPassword', 'AdminPanelCtrl', ['admin']);
