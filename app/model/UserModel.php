<?php

namespace Model;
use Model\Crud;
require_once 'CrudModel.php';

class UserModel{

    public function create(){

    }

    public function read(){
        return Crud::select('allUsers');
    }

    public function update(){
        
    }

    public function delete(){
        
    }

    public function readById($id){
        return Crud::select('selectById',$id);
    }

    public function count(){
        return Crud::select('count');
    }
}