<?php

namespace Model;
use Model\Crud;
require_once 'CrudModel.php';

class EventModel{

    public function create($data){
        return Crud::insert($data,'events');
    }

    public function select(){
        return Crud::select('events');
    }
}