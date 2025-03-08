<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class EmployeePanelCtrl {
    public function action_employeePanel() {
        $day       = ParamUtils::getFromRequest('day');
        $statusFlt = ParamUtils::getFromRequest('status_filter');

        $where = [];
        if ($day) {
            $where["reservations.reservationDate"] = $day;
        }
        if ($statusFlt == 'potwierdzona') {
            $where["reservations.idStatus"] = 2; 
        } elseif ($statusFlt == 'anulowana') {
            $where["reservations.idStatus"] = 3; 
        } elseif ($statusFlt == 'oczekujaca') {
            $where["reservations.idStatus"] = 1; 
        }
        $where["ORDER"] = ["reservationDate"=>"ASC","reservationTime"=>"ASC"];

        try {
            $reservations = App::getDB()->select("reservations", [
    "[>]reservation_statuses" => ["idStatus" => "idStatus"],
    "[>]reservation_tables"   => ["idReservation" => "idReservation"],
], [
    "reservations.idReservation",
    "reservations.reservationDate",
    "reservations.reservationTime",
    "reservations.numberOfPeople",
    "reservation_statuses.statusName",
    "reservation_tables.idTable"
], $where);


        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd w employeePanel: ".$e->getMessage());
            $reservations = [];
        }
        
        $tables = App::getDB()->select("tables", [
    "idTable",
    "tableName",
    "maxCapacity"
], [
    "isActive" => 1
]);

        App::getSmarty()->assign('day', $day);
        App::getSmarty()->assign('reservations', $reservations);
        App::getSmarty()->assign('tables', $tables);
        App::getSmarty()->display("EmployeePanel.tpl");
    }

    public function action_reservationStatusUpdate()
{
    $idReservation = ParamUtils::getFromCleanURL(1);
    $newStatus     = ParamUtils::getFromRequest('status');
    $notes         = ParamUtils::getFromRequest('notes');
    $tableId       = ParamUtils::getFromRequest('table_id');

    if (empty($idReservation)) {
        Utils::addErrorMessage("Brak ID rezerwacji.");
        App::getRouter()->redirectTo("employeePanel");
        return;
    }

    try {
        if (!empty($newStatus)) {
            App::getDB()->update("reservations", [
                "idStatus" => $newStatus
            ], [
                "idReservation" => $idReservation
            ]);
        }

        if (!empty($notes)) {
            App::getDB()->insert("reservation_notes", [
                "idReservation" => $idReservation,
                "noteText"      => $notes,
                "createdBy"     => $_SESSION['user_id'] ?? null,
                "modifiedBy"    => $_SESSION['user_id'] ?? null,
                "dateCreated"   => date("Y-m-d H:i:s"),
                "dateModified"  => date("Y-m-d H:i:s"),
            ]);
        }

        if (!empty($tableId)) {
            $exists = App::getDB()->has("reservation_tables", [
                "idReservation" => $idReservation
            ]);

            if ($exists) {
                App::getDB()->update("reservation_tables", [
                    "idTable" => $tableId
                ], [
                    "idReservation" => $idReservation
                ]);
            } else {
                App::getDB()->insert("reservation_tables", [
                    "idReservation" => $idReservation,
                    "idTable"       => $tableId
                ]);
            }
        }

        Utils::addInfoMessage("Zaktualizowano rezerwację (status / stolik / notatka).");
    } catch (\PDOException $e) {
        Utils::addErrorMessage("Błąd: ".$e->getMessage());
    }

    App::getRouter()->redirectTo("employeePanel");
}
    
}
