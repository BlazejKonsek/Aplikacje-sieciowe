<?php
namespace app\controllers;

use core\App;
use app\forms\ReservationForm;

class ReservationCtrl {
    private $form;

    public function __construct(){
        $this->form = new ReservationForm();
    }

    public function action_reservationShow(){
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("ReservationView.tpl");
    }

    public function action_reservationSave(){
        // Logika zapisu rezerwacji w przyszłości
        App::getSmarty()->display("ReservationView.tpl");
    }

    public function action_reservationList(){
        // Tu wyświetlimy listę rezerwacji zalogowanego użytkownika
        // Na razie pusta logika
        App::getSmarty()->assign('reservations', []);
        App::getSmarty()->display("ReservationList.tpl");
    }
}
