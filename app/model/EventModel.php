<?php

namespace Model;

use interfaces\Model\EventsInterface;
use Model\Crud;
require_once 'CrudModel.php';
require_once __DIR__.'/interfaces/EventInterface.php';

class EventModel implements EventsInterface{

    public function create($data,$image){
        return Crud::insert($data,$image,'events');
    }

    public function select(){
        return Crud::select('events');
    }

    public function eventFilter(){
        return Crud::select('event');
    }

    public function noticeFilter(){
        return Crud::select('notice');
    }
}