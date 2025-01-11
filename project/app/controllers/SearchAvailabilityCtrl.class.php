<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class SearchAvailabilityCtrl
{
    
    public function action_searchAvailabilityShow()
    {
        App::getSmarty()->display('SearchAvailabilityView.tpl');
    }

    public function action_searchAvailability()
    {
        $searchDate     = ParamUtils::getFromRequest('search_date');
        $searchTimeSlot = ParamUtils::getFromRequest('search_timeslot');
        $searchPeople   = ParamUtils::getFromRequest('search_people');

        if (empty($searchDate) || empty($searchTimeSlot) || empty($searchPeople)) {
            Utils::addErrorMessage("Uzupełnij wszystkie pola wyszukiwania (data, przedział godzinowy, liczba osób).");
            App::getRouter()->forwardTo('searchAvailabilityShow');
        }

        list($startHour, $endHour) = explode('-', $searchTimeSlot);

        try {
            // a) Pobierz stoliki, które mają co najmniej $searchPeople miejsc i są aktywne:
            $tables = App::getDB()->select('tables', [
                'idTable',
                'tableName',
                'maxCapacity'
            ], [
                'maxCapacity[>=]' => $searchPeople,
                'isActive'        => 1
            ]);

            $results = [];

            foreach ($tables as $tbl) {

                $countCollisions = App::getDB()->count('reservations', [
                    "[>]reservation_tables" => ["idReservation" => "idReservation"],
                ], [
                    'reservations.idReservation'
                ], [
                    'reservation_tables.idTable' => $tbl['idTable'],
                    'reservations.reservationDate' => $searchDate,
                  
                    'reservations.reservationTime[>=]' => sprintf("%02d:00:00", $startHour),
                    'reservations.reservationTime[<]'  => sprintf("%02d:00:00", $endHour),
                ]);

                $status = ($countCollisions > 0) ? 'Zajęty' : 'Wolny';

                $results[] = [
                    'tableId'   => $tbl['idTable'],
                    'tableName' => $tbl['tableName'],
                    'capacity'  => $tbl['maxCapacity'],
                    'status'    => $status
                ];
            }

            App::getSmarty()->assign('searchDate', $searchDate);
            App::getSmarty()->assign('searchTimeSlot', $searchTimeSlot);
            App::getSmarty()->assign('searchPeople', $searchPeople);
            App::getSmarty()->assign('results', $results);

            App::getSmarty()->display('SearchAvailabilityResults.tpl');

        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('searchAvailabilityShow');
        }
    }
}
