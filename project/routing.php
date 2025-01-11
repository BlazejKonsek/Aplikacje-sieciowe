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
Utils::addRoute('searchAvailabilityShow', 'SearchAvailabilityCtrl');
Utils::addRoute('searchAvailability', 'SearchAvailabilityCtrl');

// Trasy dla zalogowanego użytkownika (rola: user)
Utils::addRoute('reservationShow', 'ReservationCtrl', ['user']);
Utils::addRoute('reservationSave', 'ReservationCtrl', ['user']);
Utils::addRoute('reservationList', 'ReservationCtrl', ['user']);
Utils::addRoute('searchAvailabilityShow', 'SearchAvailabilityCtrl');
Utils::addRoute('searchAvailability', 'SearchAvailabilityCtrl');


// Trasy dla pracownika (rola: employee)
Utils::addRoute('employeePanel', 'EmployeePanelCtrl', ['employee']);
Utils::addRoute('reservationStatusUpdate', 'EmployeePanelCtrl', ['employee']);
Utils::addRoute('employeePanel', 'EmployeePanelCtrl', ['employee']);
Utils::addRoute('reservationStatusUpdate', 'EmployeePanelCtrl', ['employee']);
Utils::addRoute('reservationAssignTable', 'EmployeePanelCtrl', ['employee']);

// Trasy dla administratora (rola: admin)
Utils::addRoute('adminPanel', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('manageRoles', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('resetPassword',       'AdminPanelCtrl', ['admin']); 
Utils::addRoute('resetPasswordSave',   'AdminPanelCtrl', ['admin']); 
Utils::addRoute('createUserShow', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('createUser', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('addRole',           'AdminPanelCtrl', ['admin']);
Utils::addRoute('disableRole',       'AdminPanelCtrl', ['admin']);
Utils::addRoute('enableRole',        'AdminPanelCtrl', ['admin']);
