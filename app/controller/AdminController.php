<?php

namespace Controller;
use View\View;
use Controller\Treating;
use Interface\AdminInterface;

require_once __DIR__.'/treating/TreatingController.php';
require_once __DIR__.'/../view/View.php';
require_once __DIR__.'/interfaces/AdminInterface.php';

class AdminController extends Treating implements AdminInterface{

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


    public function create(){
        require_once View::render('cadastro_admin','admin');
    }

    public function store(){
        $data = $_POST;
        $filtered = $this->filterInput($data);
        $stored = $this->model->create($filtered);

        if($stored){
            header("Location:/newApae/admin/form/1");
        } else{
            header("Location:/newApae/admin/form/0");
        }
    }

    public function edit(){
        session_start();
        $id = $_SESSION['user']['id'];
        $userData = $this->model->selectById($id);
        require_once View::render('meus_dados','admin');
    }

    public function update($id){
        $data = $_POST;
        $filtered = $this->filterInput($data);
        $updated = $this->model->update($filtered,$id);

        if($updated){
            header("Location:/newApae/admin/profile/1");
        }else{
            header("Location:/newApae/admin/profile/0");
        }
       
    }

    public function card(){
        session_start();
        require_once View::render('carteirinha','admin');
    }


}