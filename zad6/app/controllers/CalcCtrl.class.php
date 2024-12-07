<?php
namespace app\controllers;

use app\models\CalcForm;
use app\models\CalcResult;

class CalcCtrl {
    private $form;
    private $result;
    private $role;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->role = \getRole(); 
    }
    
    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->oprocentowanie = getFromRequest('oprocentowanie');
    }
    
    public function validate() {
        if (! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))) {
            return false;
        }
        
        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->lata == "") {
            getMessages()->addError('Nie podano liczby lat kredytu');
        }
        if ($this->form->oprocentowanie == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        
        if (! getMessages()->isError()) {
            if (!is_numeric($this->form->kwota)) {
                getMessages()->addError('Kwota kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->lata)) {
                getMessages()->addError('Liczba lat kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->oprocentowanie)) {
                getMessages()->addError('Oprocentowanie nie jest liczbą');
            }
        }
        
        return ! getMessages()->isError();
    }
    
    public function process(){
        $this->getParams();
        
        if ($this->validate()) {
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->lata = floatval($this->form->lata);
            $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
            getMessages()->addInfo('Parametry poprawne.');
            
            if ($this->form->kwota > 10000 && $this->role != 'admin') {
                getMessages()->addError('Tylko administrator może obliczyć ratę powyżej 10,000.');
            } else {
                $this->result->result = ($this->form->kwota + $this->form->kwota * ($this->form->oprocentowanie / 100)) / ($this->form->lata * 12);
                $this->result->result = round($this->result->result, 2);
                getMessages()->addInfo('Wykonano obliczenia.');
            }
        }
        
        $this->generateView();
    }
    
    public function generateView(){
    $user = getUserFromSession();
    $role = $user ? $user->role : '';

    // Konwersja obiektów form i res na tablice
    getSmarty()->assign('form', [
        'kwota' => $this->form->kwota,
        'lata' => $this->form->lata,
        'oprocentowanie' => $this->form->oprocentowanie
    ]);
    getSmarty()->assign('res', [
        'result' => isset($this->result->result) ? $this->result->result : null
    ]);
    getSmarty()->assign('role',$role);
    getSmarty()->assign('user',$user);

    // Przypisz zmienne wiadomości
    $error = getMessages()->isError();
    $info = getMessages()->isInfo();
    $errors = getMessages()->getErrors();
    $infos = getMessages()->getInfos();

    getSmarty()->assign('msgs_isError', $error);
    getSmarty()->assign('msgs_isInfo', $info);
    getSmarty()->assign('msgs_errors', $errors);
    getSmarty()->assign('msgs_infos', $infos);

    getSmarty()->assign('page_title','Kalkulator Kredytu');
    getSmarty()->display('calc_view.tpl');
}
}
