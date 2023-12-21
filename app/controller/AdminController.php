<?php

namespace Controller;
use View\View;
require_once __DIR__.'/../view/View.php';

class AdminController{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index(){
        $allUsers = $this->model->select();
        require_once View::render('lista_usuarios','admin');
    }


    public function create(){
        require_once View::render('cadastro_admin','admin');
    }

    public function store(){
        $data = $_POST;
        $this->model->create($data);
    }

    public function edit(){
        session_start();
        $id = $_SESSION['user']['id'];
        $userData = $this->model->selectById($id);
        require_once View::render('meus_dados','admin');
    }

    public function update(){
        $data = $_POST;
        
        $updated = $this->model->update($data);
        header("Location:/newApae/admin/profile");
    }

    public function card(){
        session_start();

        require_once View::render('carteirinha','admin');
    }


}