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
        $allUsers = $this->model->read();
        require_once View::render('lista_usuarios', 'admin');
    }

    public function edit()
    {
    }

    public function update($id)
    {
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
}
