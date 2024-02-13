<?php

namespace interfaces\Model;

interface CrudInterface{
    public static function insert($data,$typeUser);
    public static function select($type,$data);
    public static function update($data,$typeUser,$id);
}