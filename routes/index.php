<?php

require_once '../autoload.php';

use Route\Route;
use Controller\{ComonController, EventController, LoginController,AdminController, CompaniesController,UserController};
use Model\{ComonModel, EventModel, LoginModel,AdminModel, CompaniesModel, UserModel};

//Login 
Route::get('/login',LoginController::class,'create',LoginModel::class);
Route::post('/login',LoginController::class,'login',LoginModel::class);

//Comum
Route::get('/form',ComonController::class,'create',ComonModel::class);
Route::post('/form',ComonController::class,'store',ComonModel::class);
Route::get('/comum/profile',ComonController::class,'edit',ComonModel::class);
Route::post('/comum/profile',ComonController::class,'update',ComonModel::class);
Route::get('/comum/donate',ComonController::class,'donate',ComonModel::class);
Route::get('/admin/users/comum',ComonController::class,'index',ComonModel::class);
Route::get('/comum/card',ComonController::class,'card',ComonModel::class);


//Admin
Route::get('/admin/form',AdminController::class,'create',AdminModel::class);
Route::post('/admin/form',AdminController::class,'store',AdminModel::class);
Route::get('/admin/profile',AdminController::class,'edit',AdminModel::class);
Route::post('/admin/profile',AdminController::class,'update',AdminModel::class);
Route::get('/admin/users/admin',AdminController::class,'index',AdminModel::class);
Route::get('/admin/card',AdminController::class,'card',AdminModel::class);


//Eventos/Notícias
Route::get('/comum',EventController::class,'index',EventModel::class);
Route::get('/comum/events',EventController::class,'events',EventModel::class);
Route::get('/admin/eventsForm',EventController::class,'create',EventModel::class);
Route::post('/admin/eventsForm',EventController::class,'store',EventModel::class);

//Empresas
Route::get('/comum/companies',CompaniesController::class,'empresas',CompaniesModel::class);
Route::get('/admin/companiesForm',CompaniesController::class,'create',CompaniesModel::class);
Route::post('/admin/companiesForm',CompaniesController::class,'store',CompaniesModel::class);
Route::get('/admin/users/empresas',CompaniesController::class,'index',CompaniesModel::class);

//Geral
Route::get('/admin',UserController::class,'count',UserModel::class);
Route::get('/admin/users',UserController::class,'index',UserModel::class);




Route::redirect($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);