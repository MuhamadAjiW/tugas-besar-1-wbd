<?php

namespace app\controllers;

use app\core\Controller;

class Home extends Controller{
    public function index(){
        $this->view('Home', ['name' => 'Hello!']);
    }
}

?>