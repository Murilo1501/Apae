<?php

namespace Model;
use Model\Crud;
require_once 'CrudModel.php';

class CompaniesModel{

    public function create($data){
        return Crud::insert($data,'empresas');
    }

    public function select(){
        return Crud::select('empresas');
    }

    public function update(){
        
    }

    
}