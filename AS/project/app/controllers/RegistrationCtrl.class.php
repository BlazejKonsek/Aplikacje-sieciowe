<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
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
        $this->form->login        = ParamUtils::getFromRequest('login');
        $this->form->pass         = ParamUtils::getFromRequest('pass');
        $this->form->pass_repeat  = ParamUtils::getFromRequest('pass_repeat');
        $this->form->email        = ParamUtils::getFromRequest('email');
        $this->form->firstName    = ParamUtils::getFromRequest('firstName');
        $this->form->lastName     = ParamUtils::getFromRequest('lastName');
        $this->form->phoneNumber  = ParamUtils::getFromRequest('phoneNumber');
        $this->form->address      = ParamUtils::getFromRequest('address');

        if (
            empty($this->form->login) ||
            empty($this->form->pass) ||
            empty($this->form->pass_repeat) ||
            empty($this->form->email) ||
            empty($this->form->firstName) ||
            empty($this->form->lastName) ||
            empty($this->form->phoneNumber) ||
            empty($this->form->address)
        ) {
            Utils::addErrorMessage("Wszystkie pola są obowiązkowe!");
        }

        if ($this->form->pass !== $this->form->pass_repeat) {
            Utils::addErrorMessage("Hasła nie są identyczne!");
        }

        if (!preg_match('/^[0-9\s+]+$/', $this->form->phoneNumber)) {
            Utils::addErrorMessage("Numer telefonu może zawierać tylko cyfry, spacje oraz znak plusa.");
        }

        try {
            $isLoginUsed = App::getDB()->has("users", [
                "login" => $this->form->login
            ]);
            if ($isLoginUsed) {
                Utils::addErrorMessage("Login '{$this->form->login}' jest już zajęty. Wybierz inny.");
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd weryfikacji loginu w bazie: " . $e->getMessage());
        }

        if (App::getMessages()->isError()) {
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->display("RegistrationView.tpl");
            return;
        }

        $hashedPass = password_hash($this->form->pass, PASSWORD_DEFAULT);

        try {
            App::getDB()->insert("users", [
                "login"         => $this->form->login,
                "password"      => $hashedPass,
                "firstName"     => $this->form->firstName,
                "lastName"      => $this->form->lastName,
                "email"         => $this->form->email,
                "phoneNumber"   => $this->form->phoneNumber,
                "address"       => $this->form->address,
                "dateCreated"   => date("Y-m-d H:i:s"),
                "dateModified"  => date("Y-m-d H:i:s"),
                "createdBy"     => null,
                "modifiedBy"    => null
            ]);
            $newUserId = App::getDB()->id();

            App::getDB()->insert("user_roles", [
                "idUser"       => $newUserId,
                "idRole"       => 2,  // zakładamy że 2 = 'User'
                "dateAssigned" => date("Y-m-d H:i:s"),
                "assignedBy"   => null
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd podczas rejestracji w bazie danych: " . $e->getMessage());
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->display("RegistrationView.tpl");
            return;
        }

        Utils::addInfoMessage("Rejestracja przebiegła pomyślnie! Możesz się teraz zalogować.");
        App::getRouter()->redirectTo("loginShow");
    }
}
