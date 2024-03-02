<?php

namespace Interface;

interface  AdminInterface{
    public function index();
    public function create();
    public function store();
    public function edit();
    public function update($id);
    public function card();
}