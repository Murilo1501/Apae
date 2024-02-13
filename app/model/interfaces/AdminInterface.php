<?php

namespace interfaces\Model;

interface AdminInterface{
    public function create($data);
    public function select();
    public function update($data,$id);
    public function selectById($id);
}