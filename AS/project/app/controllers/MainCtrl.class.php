<?php
namespace app\controllers;

use core\App;

class MainCtrl {
    public function action_home() {
        App::getSmarty()->display("HomeView.tpl");
    }
}
