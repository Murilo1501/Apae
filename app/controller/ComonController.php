<?php

namespace Controller;
use View\View;
require_once __DIR__.'/../view/View.php';

class ComonController{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index(){
        $allUsers = $this->model->select();
        require_once View::render('lista_usuarios','admin');
    }

    public function update(){
        $data = $_POST;
        
       $updated = $this->model->update($data);
       header("Location:/newApae/comum/profile");
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
        unset($data['confirmarSenha']);
        $this->model->create($data);
    }

    public function donate(){
        require_once View::render('tela_doacao','comum');
    }

    public function card(){
        session_start();
        require_once View::render('carteirinha','comum');
    }



}