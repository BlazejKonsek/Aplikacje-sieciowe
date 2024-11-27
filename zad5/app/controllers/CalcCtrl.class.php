<?php
namespace app\controllers;

use app\models\CalcForm;
use app\models\CalcResult;
use core\Messages;

class CalcCtrl {
    private $form;   
    private $result; 
    private $role;   

    public function __construct() {
        $this->role = getRole();

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->oprocentowanie = getFromRequest('oprocentowanie');
    }

    public function validate() {
        if (!isset($this->form->kwota) && !isset($this->form->lata) && !isset($this->form->oprocentowanie)) {
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

        if (!getMessages()->isError()) {
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

        if (!getMessages()->isError()) {
            $this->form->kwota = floatval($this->form->kwota);
            if ($this->form->kwota > 10000 && $this->role != 'admin') {
                getMessages()->addError('Tylko administrator może obliczyć ratę dla kwoty powyżej 10,000.');
            }
        }

        return !getMessages()->isError();
    }

    public function process() {
        if ($this->role == '') {
            getMessages()->addError('Dostęp tylko dla zalogowanych użytkowników.');
            $this->generateView();
            exit();
        }

        $this->getParams();

        if ($this->validate()) {
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->lata = floatval($this->form->lata);
            $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
            getMessages()->addInfo('Parametry poprawne.');

            $this->result->result = ($this->form->kwota + $this->form->kwota * ($this->form->oprocentowanie / 100)) / ($this->form->lata * 12);
            $this->result->result = round($this->result->result, 2);
            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title', 'Kalkulator Kredytowy');
        getSmarty()->assign('page_description', 'Obiektowy kalkulator kredytowy z zabezpieczeniem.');
        getSmarty()->assign('page_header', 'Obiektowy Kalkulator Kredytowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);
        getSmarty()->assign('role', $this->role);

        getSmarty()->display('calc_view.tpl');
    }
}
?>
