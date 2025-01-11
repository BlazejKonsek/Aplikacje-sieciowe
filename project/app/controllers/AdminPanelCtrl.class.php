<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\UserCreateForm;

class AdminPanelCtrl {
    private $userFilterLogin;
    private $userFilterRole;

    private $userForm;

    public function __construct() {
        $this->userForm = new UserCreateForm();
    }


    public function action_adminPanel(){
        $this->userFilterLogin = ParamUtils::getFromRequest('user_filter_login');
        $this->userFilterRole  = ParamUtils::getFromRequest('user_filter_role');

        $conditions = [
            "ORDER" => ["users.idUser" => "ASC"]
        ];

        $whereAND = [];

        if ($this->userFilterLogin) {
            $whereAND["users.login[~]"] = $this->userFilterLogin;
        }
        if ($this->userFilterRole) {
            $whereAND["roles.idRole"] = $this->userFilterRole;
        }

        if (!empty($whereAND)) {
            $conditions["AND"] = $whereAND;
        }

        $users = [];
        try {
           
            $users = App::getDB()->select("users", [
                "[>]user_roles" => ["idUser" => "idUser"],
                "[>]roles"      => ["user_roles.idRole" => "idRole"]
            ], [
                "users.idUser",
                "users.login",
                "roles.roleName"
            ], $conditions);
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd przy pobieraniu listy użytkowników: ".$e->getMessage());
        }

        $allRoles = [];
        try {
            $allRoles = App::getDB()->select("roles", "*");
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd pobierania ról: ".$e->getMessage());
        }

        App::getSmarty()->assign("users", $users);
        App::getSmarty()->assign("allRoles", $allRoles);
        App::getSmarty()->assign("user_filter_login", $this->userFilterLogin);
        App::getSmarty()->assign("user_filter_role",  $this->userFilterRole);

        App::getSmarty()->display("AdminPanel.tpl");
    }


    public function action_manageRoles() {
        $userId  = ParamUtils::getFromCleanURL(1);
        $newRole = ParamUtils::getFromRequest('new_role');

        if (!$userId || !$newRole) {
            Utils::addErrorMessage("Brak wymaganych parametrów (userId / new_role)!");
            App::getRouter()->forwardTo('adminPanel');
        }

        try {
            $existing = App::getDB()->get("user_roles", "idRole", [
                "idUser" => $userId
            ]);

            if ($existing === null) {
                App::getDB()->insert("user_roles", [
                    "idUser"   => $userId,
                    "idRole"   => $newRole,
                    "assignedBy" => $_SESSION['user_id'] ?? null
                ]);
                Utils::addInfoMessage("Przypisano nową rolę użytkownikowi ID=$userId");
            } else {
                App::getDB()->update("user_roles", [
                    "idRole" => $newRole,
                    "assignedBy" => $_SESSION['user_id'] ?? null
                ], [
                    "idUser" => $userId
                ]);
                Utils::addInfoMessage("Zmieniono rolę użytkownika ID=$userId");
            }
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd przy zmianie roli: ".$e->getMessage());
        }

        App::getRouter()->forwardTo('adminPanel');
    }

    public function action_resetPassword() {
        $userId = ParamUtils::getFromCleanURL(1, true, 'Brak ID użytkownika do resetu hasła');

        try {
            $user = App::getDB()->get("users", [
                "idUser",
                "login",
                "email",
                "firstName",
                "lastName"
            ], [
                "idUser" => $userId
            ]);
            if (!$user) {
                Utils::addErrorMessage("Nie znaleziono użytkownika o ID = $userId");
                App::getRouter()->forwardTo("adminPanel");
                return;
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd przy pobieraniu użytkownika: " . $e->getMessage());
            App::getRouter()->forwardTo("adminPanel");
            return;
        }

        App::getSmarty()->assign("user", $user);
        App::getSmarty()->display("ResetPasswordForm.tpl"); 
    }
    

    public function action_resetPasswordSave() {
        $userId   = ParamUtils::getFromRequest('userId', true, 'Brak ID użytkownika');
        $newPass  = ParamUtils::getFromRequest('newpass', true, 'Brak nowego hasła');

        if (mb_strlen($newPass) < 3) {
            Utils::addErrorMessage("Hasło powinno mieć co najmniej 3 znaki");
            App::getRouter()->forwardTo("adminPanel");
            return;
        }

        $hashedPass = password_hash($newPass, PASSWORD_DEFAULT);

        try {
            App::getDB()->update("users", [
                "password" => $hashedPass,
                "dateModified" => date("Y-m-d H:i:s"),
                "modifiedBy" => 4 
            ], [
                "idUser" => $userId
            ]);
            Utils::addInfoMessage("Hasło dla użytkownika ID=$userId zostało zresetowane.");
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd przy aktualizacji hasła: " . $e->getMessage());
        }

        App::getRouter()->forwardTo("adminPanel");
    }

    public function action_createUserShow() {
        $roles = [];
        try {
            $roles = App::getDB()->select("roles", "*", [
                "isActive" => 1
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd odczytu ról z bazy: ".$e->getMessage());
        }

        App::getSmarty()->assign("allRoles", $roles);
        App::getSmarty()->assign("userForm", $this->userForm);
        App::getSmarty()->display("UserCreateForm.tpl");
    }

    public function action_createUser() {
        $this->userForm->login        = ParamUtils::getFromRequest('login');
        $this->userForm->pass         = ParamUtils::getFromRequest('pass');
        $this->userForm->pass_repeat  = ParamUtils::getFromRequest('pass_repeat');
        $this->userForm->email        = ParamUtils::getFromRequest('email');
        $this->userForm->firstName    = ParamUtils::getFromRequest('firstName');
        $this->userForm->lastName     = ParamUtils::getFromRequest('lastName');
        $this->userForm->phoneNumber  = ParamUtils::getFromRequest('phoneNumber');
        $this->userForm->address      = ParamUtils::getFromRequest('address');
        $this->userForm->role         = ParamUtils::getFromRequest('role'); // id roli

        if (empty($this->userForm->login)) {
            Utils::addErrorMessage("Login nie może być pusty");
        }
        if (empty($this->userForm->pass)) {
            Utils::addErrorMessage("Hasło nie może być puste");
        } elseif ($this->userForm->pass !== $this->userForm->pass_repeat) {
            Utils::addErrorMessage("Podane hasła nie są takie same!");
        }

        if (App::getMessages()->isError()) {
            $this->action_createUserShow();
            return;
        }

        try {
            $count = App::getDB()->count("users", ["login" => $this->userForm->login]);
            if ($count > 0) {
                Utils::addErrorMessage("Taki login już istnieje w bazie!");
            }
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd bazy: ".$e->getMessage());
        }
        if (App::getMessages()->isError()) {
            $this->action_createUserShow();
            return;
        }

        try {
            $adminId = $_SESSION['user_id'] ?? null;
            App::getDB()->insert("users", [
                "login"      => $this->userForm->login,
                "password"   => password_hash($this->userForm->pass, PASSWORD_DEFAULT),
                "firstName"  => $this->userForm->firstName,
                "lastName"   => $this->userForm->lastName,
                "email"      => $this->userForm->email,
                "phoneNumber"=> $this->userForm->phoneNumber,
                "address"    => $this->userForm->address,
                "createdBy"  => $adminId,
                "modifiedBy" => $adminId
            ]);
            $newUserId = App::getDB()->id();

            if (!empty($this->userForm->role)) {
                App::getDB()->insert("user_roles", [
                    "idUser"    => $newUserId,
                    "idRole"    => $this->userForm->role,
                    "assignedBy"=> $adminId
                ]);
            }
            Utils::addInfoMessage("Utworzono nowego użytkownika o ID=$newUserId.");
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd zapisu: ".$e->getMessage());
            $this->action_createUserShow();
            return;
        }

        App::getRouter()->redirectTo('adminPanel');
    }

    public function action_addRole() {
        $rname = ParamUtils::getFromRequest('role_name');

        if (empty($rname)) {
            Utils::addErrorMessage("Podaj nazwę roli!");
            App::getRouter()->forwardTo('adminPanel');
        }
        try {
            App::getDB()->insert("roles", [
                "roleName" => $rname,
                "isActive" => 1
            ]);
            Utils::addInfoMessage("Dodano rolę: $rname");
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd bazy: ".$e->getMessage());
        }

        App::getRouter()->forwardTo('adminPanel');
    }

    public function action_disableRole() {
        $roleId = ParamUtils::getFromCleanURL(1);
        if (!$roleId) {
            Utils::addErrorMessage("Brak id roli!");
            App::getRouter()->forwardTo('adminPanel');
        }
        try {
            App::getDB()->update("roles", [
                "isActive" => 0
            ], [
                "idRole" => $roleId
            ]);
            Utils::addInfoMessage("Wyłączono rolę ID=$roleId");
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd bazy: ".$e->getMessage());
        }
        App::getRouter()->forwardTo('adminPanel');
    }

    public function action_enableRole() {
        $roleId = ParamUtils::getFromCleanURL(1);
        if (!$roleId) {
            Utils::addErrorMessage("Brak id roli!");
            App::getRouter()->forwardTo('adminPanel');
        }
        try {
            App::getDB()->update("roles", [
                "isActive" => 1
            ], [
                "idRole" => $roleId
            ]);
            Utils::addInfoMessage("Włączono rolę ID=$roleId");
        } catch (\PDOException $e){
            Utils::addErrorMessage("Błąd bazy: ".$e->getMessage());
        }
        App::getRouter()->forwardTo('adminPanel');
    }
}
