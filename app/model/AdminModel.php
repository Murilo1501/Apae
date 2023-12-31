<?php

namespace Model;
use Model\Crud;

require_once 'CrudModel.php';

class AdminModel{

    public function create($data){
        return Crud::insert($data,'admin');
    }

    public function select(){
        return Crud::select('admin');
    }

    public function update($data,$id){
        return Crud::update($data,'users',$id);
    }

    public function selectById($id){
        return Crud::select('selectById',$id);
    }

   
}