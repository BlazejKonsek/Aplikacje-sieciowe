<?php
namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\User;

class LoginCtrl {
	private $form;

	public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}
	
	public function validate() {
		if (! (isset($this->form->login) && isset($this->form->pass))) {
			getMessages()->addError('Błędne wywołanie aplikacji !');
		}
		
		if (!getMessages()->isError()) {
			if ($this->form->login == "") {
				getMessages()->addError('Nie podano loginu');
			}
			if ($this->form->pass == "") {
				getMessages()->addError('Nie podano hasła');
			}
		}

		if (!getMessages()->isError()) {
			if ($this->form->login == "admin" && $this->form->pass == "admin") {
				$user = new User($this->form->login,'admin');
				$_SESSION['user'] = serialize($user);
			} else if ($this->form->login == "user" && $this->form->pass == "user") {
				$user = new User($this->form->login,'user');
				$_SESSION['user'] = serialize($user);
			} else {
				getMessages()->addError('Niepoprawny login lub hasło');
			}
		}
		
		return !getMessages()->isError();
	}
	
	public function doLogin(){
		$this->getParams();
		
		if ($this->validate()) {
			header("Location: ".getConf()->action_url.'calcView');
		} else {
			$this->generateView();
		}
	}
	
	public function doLogout(){
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		session_destroy();
		
		getMessages()->addInfo('Poprawnie wylogowano z systemu');
		$this->generateView();
	}
	
	public function generateView(){
		getSmarty()->assign('page_title','Strona logowania');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('login_view.tpl');
	}
}
