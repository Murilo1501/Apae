<?php

namespace Model;
use Model\Crud;
require_once 'CrudModel.php';

class LoginModel{

   public function login($data){
      return Crud::select('login',$data);
   }  
}