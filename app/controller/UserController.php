<?php

namespace Controller;

use View\View;

require_once __DIR__ . '/../view/View.php';


class UserController
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
        $update = $this->model->update($_POST,$id);

        if($update){
            header("Location:/newApae/admin/users/1");
        }
    }

    public function destroy($id)
    {
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
        var_dump($_POST);
        echo $id;
        die();
        $status = $this->model->updateStatus($_POST,$id);
    }

}
