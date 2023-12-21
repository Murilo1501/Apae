<?php

namespace Controller;
use View\View;
require_once __DIR__.'/../view/View.php';

class LoginController{

    private $model;

    function __construct($model)
    {
        $this->model  = $model;
    }

    public function login(){
        $data = $_POST;

       $user =  $this->model->login($data);
       if($user){
            session_start();
            $_SESSION['user'] = $user;
            header("Location:/newApae/".$user['nivel']);
       }
    }

    public function create(){
        require_once View::render('login');
   }
}