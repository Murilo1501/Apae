<?php

namespace Model;

use interface\Model\UserInterface;
use Model\Crud;
require_once 'CrudModel.php';
require_once __DIR__.'/interfaces/UserInterface.php';

class UserModel implements UserInterface{


    public function read(){
        return Crud::select('allUsers');
    }

    public function update($data,$id){
        return Crud::update($data,'users',$id);
    }



    public function readById($id){
        return Crud::select('selectById',$id);
    }

    public function count(){
        return Crud::select('count');
    }

    public function updateStatus($data,$id){
        return Crud::update($data,'status',$id);
    }
}