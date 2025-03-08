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
        $this->form->pass  = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login)) {
            return false; 
        }
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (App::getMessages()->isError()) return false;

        try {
            $user = App::getDB()->get("users", [
                "idUser",
                "login",
                "password"
            ], [
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
            Utils::addErrorMessage("Niepoprawny login lub hasło (brak takiego loginu)");
            return false;
        }

        if (password_verify($this->form->pass, $user['password'])) {
            $_SESSION['user_id'] = $user['idUser'];  

            $_SESSION['_amelia_roles'] = serialize([]);
            App::getConf()->roles = [];

            $userRoles = App::getDB()->select("user_roles", ["idRole"], [
                "idUser" => $user['idUser']
            ]);
            foreach ($userRoles as $ur) {
                $roleRow = App::getDB()->get("roles", ["roleName"], [
                    "idRole" => $ur["idRole"]
                ]);
                if ($roleRow && isset($roleRow["roleName"])) {
                    RoleUtils::addRole($roleRow["roleName"]);
                }
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
            App::getRouter()->redirectTo("home");
        } else {
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
