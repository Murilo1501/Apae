<?php

namespace Model;
use Model\Crud;
require_once 'CrudModel.php';

class ComonModel{

    public function create($data){
       return Crud::insert($data,'comum');
    }

    public function update($data,$id){
        return Crud::update($data,'users',$id);
    }

    public function selectById($id){
        return Crud::select('selectById',$id);
    }

    public function select(){
        return Crud::select('comum');
    }
}