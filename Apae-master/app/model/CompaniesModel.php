<?php

namespace Model;

use interface\Model\CompaniesInterface;
use Model\Crud;

require_once 'CrudModel.php';
require_once 'interfaces/CompaniesInterface.php';

class CompaniesModel implements CompaniesInterface{

    public function create($data,$image){
        return Crud::insert($data,$image,'empresas');
    }

    public function select(){
        return Crud::select('empresas');
    }



    
}