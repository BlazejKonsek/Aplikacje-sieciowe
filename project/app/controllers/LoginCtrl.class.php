<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\LoginForm;

class LoginCtrl {
    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        // sprawdzenie czy podano dane
        if (!isset($this->form->login)) {
            // jeszcze nie podano danych (np. dopiero weszliśmy na stronę logowania)
            return false;
        }

        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        if (App::getMessages()->isError()) return false;

        // sprawdzenie w bazie czy użytkownik istnieje
        try {
            $user = App::getDB()->get("users", ["id","login","password","role"], [
                "login" => $this->form->login
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            return false;
        }

        if (!$user) {
            Utils::addErrorMessage("Niepoprawny login lub hasło");
            return false;
        }

        // weryfikacja hasła
        if (password_verify($this->form->pass, $user['password'])) {
            // hasło poprawne
            // Nadajemy rolę 'user' każdemu zalogowanemu
            RoleUtils::addRole('user');

            // Jeśli user ma rolę admin lub employee, to również dodajemy
            // (zakładamy, że kolumna 'role' w tabeli users zawiera np. 'admin', 'employee' lub null)
            if ($user['role'] === 'admin') {
                RoleUtils::addRole('admin');
            }
            if ($user['role'] === 'employee') {
                RoleUtils::addRole('employee');
            }

            Utils::addInfoMessage("Zalogowano poprawnie!");
            return true;
        } else {
            Utils::addErrorMessage("Niepoprawny login lub hasło");
            return false;
        }
    }

    public function action_loginShow() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display("LoginView.tpl");
    }

    public function action_login() {
        if ($this->validate()) {
            // jeżeli zalogowano to przekieruj do listy rezerwacji lub na stronę główną
            App::getRouter()->redirectTo("home");
        } else {
            // pozostań na stronie logowania
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->display("LoginView.tpl");
        }
    }

    public function action_logout() {
        session_destroy();
        Utils::addInfoMessage("Wylogowano pomyślnie.");
        App::getRouter()->redirectTo('home');
    }
}
