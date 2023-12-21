<?php

namespace Model;
use Model\Crud;
require_once 'CrudModel.php';

class ComonModel{

    public function create($data){
        Crud::insert($data,'comum');
    }

    public function update($data){
        return Crud::update($data,'comum_admin');
    }

    public function selectById($id){
        return Crud::select('selectById',$id);
    }

    public function select(){
        return Crud::select('comum');
    }
}