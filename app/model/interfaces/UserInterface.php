<?php

namespace interface\Model;

interface UserInterface{
    public function read();
    public function update($data,$id);
    public function readById($id);
    public function count();
    public function updateStatus($data,$id);
}