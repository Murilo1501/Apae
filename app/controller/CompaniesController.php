<?php

namespace Controller;
use View\View;
require_once __DIR__.'/../view/View.php';

class CompaniesController{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index(){
        $allUsers = $this->model->select();
        require_once View::render('lista_usuarios','admin');
    }

    public function empresas(){
        require_once View::render('empresas_parceiras','comum');
    }

 
    public function create(){
        require_once View::render('cadastro_empresas','admin');
    }

    public function store(){
        $data = $_POST;
        $this->model->create($data);
    }

    public function edit(){

    }

    public function update($id){
        
    }
}