<?php

namespace interfaces;

interface ComonInterface{
    public function index();
    public function update($id);
    public function edit();
    public function create();
    public function store();
    public function donate();
    public function card();
    public function createForgetPassword();
    public function forgetPassword();
}