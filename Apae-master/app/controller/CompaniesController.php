<?php

namespace Controller;
use View\View;
use Controller\Treating;
use interface\CompaniesInterface;

require_once __DIR__.'/treating/TreatingController.php';
require_once __DIR__.'/../view/View.php';
require_once __DIR__.'/interfaces/CompaniesInterface.php';

class CompaniesController extends Treating implements CompaniesInterface{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index(){
        session_start();
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
        $filtered = $this->filterInput($data);
        $stored =  $this->model->create($filtered);

        if($stored){
            header("Location:/apae/Apae-master/admin/companiesForm/1");
        } else{
            header("Location:/apae/Apae-master/admin/companiesform/0");
        }
    }


    public function card(){
        require_once View::render('carteirinha','empresas');
    }
}