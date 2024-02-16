<?php

namespace interfaces\Model;

interface ComonInterface{
    public function create($data);
    public function select();
    public function update($data,$id);
    public function selectById($id);
}