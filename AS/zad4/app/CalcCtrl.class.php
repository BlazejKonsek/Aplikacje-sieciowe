<?php
require_once $conf->root_path . '/libs/Smarty/libs/Smarty.class.php';
require_once $conf->root_path . '/libs/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;
    private $hide_intro;
    private $role;

    public function __construct() {
        global $conf;

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
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
        } else {
            $this->hide_intro = true; // Hide intro when form is submitted
        }

        // Check if fields are empty
        if ($this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->lata == "") {
            $this->msgs->addError('Nie podano liczby lat kredytu');
        }
        if ($this->form->oprocentowanie == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }

        // Validate numeric values
        if (!$this->msgs->isError()) {
            if (!is_numeric($this->form->kwota)) {
                $this->msgs->addError('Kwota kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->lata)) {
                $this->msgs->addError('Liczba lat kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->oprocentowanie)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą');
            }
        }

        // Check role and amount limit
        if (!$this->msgs->isError()) {
            $this->form->kwota = floatval($this->form->kwota);
            if ($this->form->kwota > 10000 && $this->role != 'admin') {
                $this->msgs->addError('Tylko administrator może obliczyć ratę dla kwoty powyżej 10,000.');
            }
        }

        return !$this->msgs->isError();
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
            // Conversion to float
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->lata = floatval($this->form->lata);
            $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
            $this->msgs->addInfo('Parametry poprawne.');

            // Perform calculations
            $this->result->result = ($this->form->kwota + $this->form->kwota * ($this->form->oprocentowanie / 100)) / ($this->form->lata * 12);
            $this->result->result = round($this->result->result, 2);
            $this->msgs->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView() {
    global $conf;

    $smarty = new Smarty();

    // Set Smarty directories
    $smarty->setTemplateDir($conf->root_path . '/templates/');
    $smarty->setCompileDir($conf->root_path . '/templates_c/');
    $smarty->setCacheDir($conf->root_path . '/cache/');
    $smarty->assign('conf', $conf);

    // Assign variables to the template
    $smarty->assign('page_title', 'Kalkulator Kredytowy');
    $smarty->assign('page_description', 'Obiektowy kalkulator kredytowy z zabezpieczeniem.');
    $smarty->assign('page_header', 'Obiektowy Kalkulator Kredytowy');

    $smarty->assign('hide_intro', $this->hide_intro);

    $smarty->assign('msgs', $this->msgs);
    $smarty->assign('form', $this->form);
    $smarty->assign('res', $this->result);
    $smarty->assign('role', $this->role); // Ensure this line is present

    $smarty->display('calc_view.tpl');
}
}
?>
