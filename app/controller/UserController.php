<?php

namespace Controller;

use interfaces\UserInterface;
use View\View;
use Controller\Treating;

require_once __DIR__ . '/../view/View.php';
require_once __DIR__.'/interfaces/UserInterface.php';
require_once __DIR__.'/treating/TreatingController.php';


class UserController extends Treating implements UserInterface
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        session_start();
        $allUsers = $this->model->read();
        require_once View::render('lista_usuarios', 'admin');
    }

    public function edit($id)
    {
        $userData = $this->model->readById($id);
        
        $page = !isset($userData['nivel']) ? 'alter_empresa':'alter_usuario';
        require_once View::render($page,'admin');
    }

    public function update($id)
    {
        $filtered = $this->filterInput($_POST);
        $update = $this->model->update($filtered,$id);

        if($update){
            header("Location:/apae/Apae-master/admin/users/1");
        }
    }



    public function getUser($id)
    {
        $this->model->readById();
    }


    public function count()
    {
        $data =  $this->model->count();
        require_once View::render('index', 'admin');
    }

    public function status($id){
        $status = $this->model->updateStatus($_POST,$id);

        if($status){
            header("Location:/apae/Apae-master/admin/users/1");
        } else{
            header("Location:/apae/Apae-master/admin/users/0");
        }
    }

}
