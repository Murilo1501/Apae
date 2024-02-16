<?php

namespace Model;

use interfaces\Model\ComonInterface;
use Model\Crud;

require_once 'CrudModel.php';
require_once __DIR__.'/interfaces/ComonInterface.php';

class ComonModel implements ComonInterface{

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

    public function selectByEmail($email){
        return Crud::select('selectByEmail',$email);
    }

    public function updateByEmail($data){
        return Crud::update($data,'updateByEmail');
    }
}