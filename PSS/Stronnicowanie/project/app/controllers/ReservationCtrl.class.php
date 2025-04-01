<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\ReservationForm;
use DateTime;

class ReservationCtrl {
    private $form;

    public function __construct(){
        $this->form = new ReservationForm();
    }

    public function action_reservationShow(){
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("ReservationView.tpl");
    }

   public function action_reservationSave() {
    $this->form->date         = ParamUtils::getFromRequest('date');
    $this->form->timeslot     = ParamUtils::getFromRequest('timeslot'); 
    $this->form->people_count = ParamUtils::getFromRequest('people_count');
    $noteText                 = ParamUtils::getFromRequest('noteText');
    $chosenTableId            = ParamUtils::getFromRequest('table_id'); 

    if (empty($this->form->date) || empty($this->form->timeslot) || empty($this->form->people_count)) {
        Utils::addErrorMessage("Wszystkie pola (data, godzina, liczba osób) są wymagane!");
    }

    $dayOfWeek = (new \DateTime($this->form->date))->format('N');
    if ($dayOfWeek == 1) {
        Utils::addErrorMessage("Restauracja jest nieczynna w poniedziałki. Wybierz inny dzień.");
    }

    if (!RoleUtils::inRole("user")) {
        Utils::addErrorMessage("Tylko zalogowany użytkownik (rola user) może tworzyć rezerwacje.");
    }
       
       
       if (!empty($this->form->date) && !empty($this->form->timeslot)) {
        list($startHour, $endHour) = explode('-', $this->form->timeslot); 
        $reservationDateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $this->form->date . ' ' . sprintf("%02d:00:00", $startHour));
        $currentDateTime = new \DateTime();

        if ($reservationDateTime < $currentDateTime) {
            Utils::addErrorMessage("Nie możesz tworzyć rezerwacji w przeszłości. Wybierz aktualny lub przyszły termin.");
        }
    }

    if (App::getMessages()->isError()) {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("ReservationView.tpl");
        return;
    }


    list($startHour, $endHour) = explode('-', $this->form->timeslot); 
    $reservationTime = sprintf("%02d:00:00", $startHour);

    $userId = $_SESSION['user_id'] ?? null;

    try {
        App::getDB()->insert("reservations", [
            "idUser"           => $userId,
            "reservationDate"  => $this->form->date,
            "reservationTime"  => $reservationTime,  
            "numberOfPeople"   => $this->form->people_count,
            "idStatus"         => 1, 
            "dateCreated"      => date("Y-m-d H:i:s"),
            "dateModified"     => date("Y-m-d H:i:s"),
            "createdBy"        => $userId,
            "modifiedBy"       => $userId
        ]);
        $newResId = App::getDB()->id();

        if (!empty($chosenTableId)) {
            App::getDB()->insert("reservation_tables", [
                "idReservation" => $newResId,
                "idTable"       => $chosenTableId
            ]);
        }

        if (!empty($noteText)) {
            App::getDB()->insert("reservation_notes", [
                "idReservation" => $newResId,
                "noteText"      => $noteText,
                "dateCreated"   => date("Y-m-d H:i:s"),
                "dateModified"  => date("Y-m-d H:i:s"),
                "createdBy"     => $userId,
                "modifiedBy"    => $userId
            ]);
        }

        Utils::addInfoMessage("Rezerwacja została utworzona. Oczekuje na potwierdzenie przez obsługę.");
        App::getRouter()->redirectTo("reservationList");
    } catch (\PDOException $e) {
        Utils::addErrorMessage("Błąd zapisu rezerwacji: " . $e->getMessage());
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("ReservationView.tpl");
    }
}

public function action_reservationList() {
    $userId = $_SESSION['user_id'] ?? null;
    if (!$userId) {
        Utils::addErrorMessage("Musisz być zalogowany, aby zobaczyć swoje rezerwacje.");
        App::getRouter()->redirectTo("loginShow");
        return;
    }

    $statusFilter = ParamUtils::getFromRequest('sf_status');

    $currentPage = ParamUtils::getFromRequest('page');  
    if (empty($currentPage) || $currentPage < 1) {
        $currentPage = 1;
    }
    $limit  = 5; 
    $offset = ($currentPage - 1) * $limit;

    $where = [
        "reservations.idUser" => $userId
    ];
    if (!empty($statusFilter)) {
        $where["reservation_statuses.statusName"] = $statusFilter;
    }

    $countWhere = $where; 

    $where["ORDER"] = ["reservationDate" => "ASC", "reservationTime" => "ASC"];

    try {
        $totalCount = App::getDB()->count("reservations", [
    "[>]reservation_statuses" => ["idStatus" => "idStatus"]
], "*", $countWhere);

    } catch (\PDOException $e) {
        Utils::addErrorMessage("Błąd liczenia rezerwacji: ".$e->getMessage());
        $totalCount = 0; 
    }

    $where["LIMIT"] = [$offset, $limit];

    try {
        $reservations = App::getDB()->select("reservations", [
            "[>]reservation_statuses" => ["idStatus" => "idStatus"]
        ], [
            "reservations.reservationDate(date)",
            "reservations.reservationTime(time)",
            "reservations.numberOfPeople(people_count)",
            "reservation_statuses.statusName(status)"
        ], $where);
    } catch (\PDOException $e) {
        Utils::addErrorMessage("Błąd pobierania rezerwacji: ".$e->getMessage());
        $reservations = [];
        $totalCount   = 0;
    }

    $totalPages = ($totalCount > 0) ? ceil($totalCount / $limit) : 1;

    App::getSmarty()->assign('reservations',  $reservations);
    App::getSmarty()->assign('sf_status',     $statusFilter);
    App::getSmarty()->assign('current_page',  $currentPage);
    App::getSmarty()->assign('total_pages',   $totalPages);
    App::getSmarty()->display("ReservationList.tpl");
}

}
