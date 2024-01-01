<?php

namespace Controller;
use View\View;
use interface\EventInterface;

require_once __DIR__ . '/../view/View.php';
require_once __DIR__.'/interfaces/EventInterface.php';

class EventController implements EventInterface
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $eventList = $this->model->select();
        session_start();

        if(isset($_SESSION['user'])){
            require_once View::render('index', $_SESSION['user']['nivel']);
        } else{
            header("Location:/newApae/login");
        }

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
            header("Location:/newApae/admin/eventsForm/1");
        }
    }

    public function events()
    {
        session_start();
        $eventList = $this->model->select();

        if(isset($_SESSION['user'])){
            require_once View::render('noticias', $_SESSION['user']['nivel']);
        } else{
            header("Location:/newApae/login/");
        }

        
        
      
    }
}
