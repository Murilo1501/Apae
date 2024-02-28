<?php

namespace Controller;
use View\View;
use interface\EventInterface;
use Controller\Treating;

require_once __DIR__ . '/../view/View.php';
require_once __DIR__.'/interfaces/EventInterface.php';
require_once __DIR__.'/treating/TreatingController.php';

class EventController extends Treating implements EventInterface 
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
            header("Location:/apae/Apae-master/login");
        }

    }

    public function create()
    {
        require_once View::render('cadastro_eventos','admin');
    }

    public function store()  
    {
        $data = $_POST;
        move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$_FILES['image']['name']);
        $filtered = $this->filterInput($data);
        $success = $this->model->create($filtered,'../images/'.$_FILES['image']['name']);

        if($success){
            header("Location:/apae/Apae-master/admin/eventsForm/1");
        }
    }

    public function events()
    {
        session_start();
        $eventList = $this->model->select();

        if(isset($_SESSION['user'])){
            require_once View::render('noticias', $_SESSION['user']['nivel']);
        } else{
            header("Location:/apae/Apae-master/login/");
        }

    }

    public function eventFilter(){
        session_start();
        $eventList = $this->model->eventFilter();
        require_once View::render('noticias','comum');
    }

    public function noticeFilter(){
        session_start();
        $eventList = $this->model->noticeFilter();
        require_once View::render('noticias','comum');
    }
}
