<?php
namespace app\controllers;

use core\Messages;

class LoginCtrl {
    private $form;
    private $msgs;

    public function __construct() {
        $this->form = array(
            'login' => '',
            'pass' => ''
        );
        $this->msgs = getMessages();
    }

    public function getParams() {
        $this->form['login'] = getFromRequest('login');
        $this->form['pass'] = getFromRequest('pass');
    }

    public function validate() {
        if ($this->form['login'] == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if ($this->form['pass'] == "") {
            $this->msgs->addError('Nie podano hasła');
        }

        if ($this->msgs->isError()) return false;

        if ($this->form['login'] == "admin" && $this->form['pass'] == "admin") {
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->form['login'] == "user" && $this->form['pass'] == "user") {
            $_SESSION['role'] = 'user';
            return true;
        }

        $this->msgs->addError('Niepoprawny login lub hasło');
        return false;
    }

    public function doLogin() {
        $this->getParams();

        if ($this->validate()) {
            header("Location: " . getConf()->action_url . 'calcView');
        } else {
            $this->generateView();
        }
    }

    public function doLogout() {
        session_destroy();
        session_start();
        $this->msgs->addInfo('Poprawnie wylogowano z systemu');

        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title', 'Logowanie');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('msgs', $this->msgs);
        getSmarty()->assign('role', getRole());

        getSmarty()->display('login_view.tpl');
    }
}
?>
