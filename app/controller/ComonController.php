<?php

namespace Controller;
use View\View;
use Controller\Treating;
use interfaces\ComonInterface;

require_once 'treating/TreatingController.php';
require_once __DIR__.'/../view/View.php';
require_once __DIR__.'/interfaces/ComonInterface.php';

class ComonController extends Treating implements ComonInterface{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index(){

        session_start();
        $allUsers = $this->model->select();
        if(isset($_SESSION['user'])){
            require_once View::render('lista_usuarios',$_SESSION['user']['nivel']);
        }else{
            header("Location:/apae/Apae-master/login");
        }
       
        
    }

    public function update($id){
        $data = $_POST;
        $filtered = $this->filterInput($data);
       $updated = $this->model->update($filtered,$id);
       if($updated){
            header("Location:/apae/Apae-master/comum/profile/1");
       } else{
            header("Location:/apae/Apae-master/comum/profile/0");
       }
      
    }

    public function edit(){
        session_start();
        $id = $_SESSION['user']['id'];
        $userData = $this->model->selectById($id);
        require_once View::render('meus_dados','comum');
    }

    public function create(){
        require_once View::render('cadastro');
    }

    public function store(){
        $data = $_POST;
        $filter = $this->filterInput($data);

        $stored = $this->model->create($filter);
        
        if($stored){
            header("Location:/apae/Apae-master/login/1");
        } else{
            header("Location:/apae/Apae-master/form/0");
        }
    }

    public function donate(){
        require_once View::render('tela_doacao','comum');
    }

    public function card(){
        session_start();
        require_once View::render('carteirinha','comum');
    }

    public function createForgetPassword(){
        require_once View::render('esqueceuSenha');
    }

    public function forgetPassword()
    {
        $email = $this->filterInput($_POST);
        $user = $this->model->selectByEmail($email);

        if($user){
            require_once View::render('atualizarSenha');
        } else{
            header("Location:/apae/Apae-master/esqueceuSenha/");
        }
    }

    public function forgetPasswordUpdate(){
        $data = $this->filterInput($_POST);
        $updated = $this->model->updateByEmail($data);
        header("Location:/apae/Apae-master/login/1");
    }





}