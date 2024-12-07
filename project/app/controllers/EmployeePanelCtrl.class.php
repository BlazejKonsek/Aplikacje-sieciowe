<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class EmployeePanelCtrl {
    public function action_employeePanel() {
        // W przyszłości: pobierz z DB rezerwacje na wybrany dzień
        // Tymczasowo pusta tablica:
        $reservations = [];

        App::getSmarty()->assign('reservations', $reservations);
        App::getSmarty()->display("EmployeePanel.tpl");
    }

    public function action_reservationStatusUpdate() {
        // W przyszłości: logika zmiany statusu i notatek w DB
        Utils::addInfoMessage("Status zaktualizowany (logika do wdrożenia)");
        App::getRouter()->forwardTo('employeePanel');
    }
}
