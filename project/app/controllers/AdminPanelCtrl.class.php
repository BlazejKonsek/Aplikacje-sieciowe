<?php
namespace app\controllers;

use core\App;
use core\Utils;

class AdminPanelCtrl {
    public function action_adminPanel(){
        // W przyszłości: pobierz listę użytkowników z bazy
        $users = [];
        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display("AdminPanel.tpl");
    }

    public function action_manageRoles() {
        // W przyszłości: logika zmiany roli użytkownika
        Utils::addInfoMessage("Rola zmieniona (logika do wdrożenia)");
        App::getRouter()->forwardTo('adminPanel');
    }

    public function action_resetPassword() {
        // W przyszłości: logika resetowania hasła
        Utils::addInfoMessage("Hasło zresetowane (logika do wdrożenia)");
        App::getRouter()->forwardTo('adminPanel');
    }
}
