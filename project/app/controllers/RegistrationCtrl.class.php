<?php
namespace app\controllers;

use core\App;
use app\forms\RegistrationForm;

class RegistrationCtrl {
    private $form;

    public function __construct(){
        $this->form = new RegistrationForm();
    }

    public function action_registrationShow(){
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("RegistrationView.tpl");
    }

    public function action_registration(){
        // Logika rejestracji będzie tutaj później
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("RegistrationView.tpl");
    }
}
