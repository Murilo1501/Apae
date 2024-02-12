<?php

namespace interface;

interface UserInterface{
    public function index();
    public function edit($id);
    public function update($id);
    public function getUser($id);
    public function count();
    public function status($id);
}