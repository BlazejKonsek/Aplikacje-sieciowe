<?php
require_once dirname(__FILE__).'/../config.php';
require_once $config->root_path.'/libs/Smarty/libs/Smarty.class.php';
require_once $config->root_path.'/app/CalcForm.class.php';
require_once $config->root_path.'/app/CalcResult.class.php';
require_once $config->root_path.'/libs/Messages.class.php';

class CalcCtrl {
    private $form;
    private $result;
    private $messages;
    private $role;

    public function __construct() {
        global $config;

        // Start session if not already active
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->messages = new Messages();
        $this->role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
    }

    public function getParams() {
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
    }

    public function validate() {
        if (!isset($this->form->kwota) && !isset($this->form->lata) && !isset($this->form->oprocentowanie)) {
            return false; // No parameters provided
        }

        // Check if fields are empty
        if ($this->form->kwota == "") {
            $this->messages->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->lata == "") {
            $this->messages->addError('Nie podano ilości lat kredytu');
        }
        if ($this->form->oprocentowanie == "") {
            $this->messages->addError('Nie podano stopnia oprocentowania');
        }

        // Validate numeric values
        if (!$this->messages->isError()) {
            if (!is_numeric($this->form->kwota)) {
                $this->messages->addError('Kwota kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->lata)) {
                $this->messages->addError('Liczba lat kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->oprocentowanie)) {
                $this->messages->addError('Oprocentowanie nie jest liczbą');
            }
        }

        // Check role and amount limit
        if (!$this->messages->isError()) {
            $this->form->kwota = floatval($this->form->kwota);
            if ($this->form->kwota > 10000 && $this->role != 'admin') {
                $this->messages->addError('Tylko administrator może obliczyć ratę dla kwoty powyżej 10,000.');
            }
        }

        return !$this->messages->isError();
    }

    public function calculate() {
        $this->form->kwota = floatval($this->form->kwota);
        $this->form->lata = floatval($this->form->lata);
        $this->form->oprocentowanie = floatval($this->form->oprocentowanie);

        $this->result->result = ($this->form->kwota + $this->form->kwota * ($this->form->oprocentowanie / 100)) / ($this->form->lata * 12);
        $this->result->result = round($this->result->result, 2);

        $this->messages->addInfo('Wykonano obliczenia');
    }

    public function generateView() {
        global $config;

        $smarty = new Smarty();

    $smarty->setTemplateDir(array(
        $config->root_path.'/templates/',
        $config->root_path.'/app/'
    ));
    $smarty->setCompileDir($config->root_path.'/templates_c/');
    $smarty->setCacheDir($config->root_path.'/cache/');

    // Assign variables to the template
    $smarty->assign('config', $config);
    $smarty->assign('form', $this->form);
    $smarty->assign('result', $this->result);
    $smarty->assign('messages', $this->messages);
    $smarty->assign('role', $this->role);

    $smarty->display('calc_view.tpl');
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
            $this->calculate();
        }

        $this->generateView();
    }
}
