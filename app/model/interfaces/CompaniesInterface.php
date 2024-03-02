<?php

namespace interface\Model;

interface CompaniesInterface{
    public function create($data,$image);
    public function select();
}