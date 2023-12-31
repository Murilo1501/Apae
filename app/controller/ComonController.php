<?php

namespace Controller;
use View\View;
use Controller\Treating;
require_once 'treating/TreatingController.php';
require_once __DIR__.'/../view/View.php';

class ComonController extends Treating{

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
            header("Location:/newApae/login");
        }
       
        
    }

    public function update($id){
        $data = $_POST;
        
       $updated = $this->model->update($data,$id);
       if($updated){
            header("Location:/newApae/comum/profile/1");
       } else{
            header("Location:/newApae/comum/profile/0");
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
            header("Location:/newApae/login/1");
        } else{
            header("Location:/newApae/form/0");
        }
    }

    public function donate(){
        require_once View::render('tela_doacao','comum');
    }

    public function card(){
        session_start();
        require_once View::render('carteirinha','comum');
    }



}