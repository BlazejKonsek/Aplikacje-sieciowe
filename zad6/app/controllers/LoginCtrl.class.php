<?php
namespace app\controllers;
use function getRole;


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
			getMessages()->addError('Błędne wywołanie aplikacji!');
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
				addRole($user->role);
			} else if ($this->form->login == "user" && $this->form->pass == "user") {
				$user = new User($this->form->login,'user');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);
			} else {
				getMessages()->addError('Niepoprawny login lub hasło');
			}
		}
		
		return !getMessages()->isError();
	}
	
	public function doLogin(){
		$this->getParams();
		
		if ($this->validate()) {
			header("Location: ".getConf()->app_url."/");
		} else {
			$this->generateView();
		}
	}
	
	public function doLogout(){
		session_destroy();
		getMessages()->addInfo('Poprawnie wylogowano z systemu');
		$this->generateView();
	}
	
	public function generateView(){
    $user = getUserFromSession();
    $role = $user ? $user->role : '';

    $error = getMessages()->isError();
    $info = getMessages()->isInfo();
    $errors = getMessages()->getErrors();
    $infos = getMessages()->getInfos();

    getSmarty()->assign('msgs_isError', $error);
    getSmarty()->assign('msgs_isInfo', $info);
    getSmarty()->assign('msgs_errors', $errors);
    getSmarty()->assign('msgs_infos', $infos);

    getSmarty()->assign('role',$role);
    getSmarty()->assign('user',$user);
    getSmarty()->assign('form', [
        'login'=>$this->form->login,
        'pass'=>$this->form->pass
    ]);
    getSmarty()->assign('page_title','Logowanie');
    getSmarty()->display('login_view.tpl');
}

}
