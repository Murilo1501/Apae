<?php

namespace Model;

use interfaces\Model\CompaniesInterface;
use Model\Crud;

require_once 'CrudModel.php';
require_once 'interfaces/CompaniesInterface.php';

class CompaniesModel implements CompaniesInterface{

    public function create($data){
        return Crud::insert($data,'empresas');
    }

    public function select(){
        return Crud::select('empresas');
    }



    
}