<?php

namespace Controller;

use View\View;

require_once __DIR__ . '/../view/View.php';

class EventController
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $eventList = $this->model->select();
        require_once View::render('index', 'comum');
    }

    public function create()
    {
        require_once View::render('cadastro_eventos','admin');
    }

    public function store()
    {
        $data = $_POST;
        $success = $this->model->create($data);

        if($success){
            header("Location:/newApae/admin/eventsForm");
        }
    }

    public function events()
    {
        $eventList = $this->model->select();
        require_once View::render('noticias', 'comum');
    }
}
