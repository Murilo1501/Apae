<?php

namespace Controller;
use View\View;
use Controller\Treating;
require_once 'treating/TreatingController.php';
require_once __DIR__.'/../view/View.php';

class LoginController extends Treating{

    private $model;

    function __construct($model)
    {
        $this->model  = $model;
    }

    public function login(){
        $data = $_POST;
        $filtered = $this->filterInput($data);
        $user = $this->model->login($filtered);

        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            
            if(!isset($user['nivel'])){
                $_SESSION['user']['nivel'] = 'empresas';
              
            }
        
            header("Location: /apae/Apae-master/".$_SESSION['user']['nivel']."/home/");                                                                                      
        } else{
            header("Location:/apae/Apae-master/login/0");
        }
   
    }

    public function create(){
        require_once View::render('login');
   }
}