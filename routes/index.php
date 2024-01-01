<?php

require_once '../autoload.php';

use Route\Route;
use Controller\{ComonController, EventController, LoginController,AdminController, CompaniesController,UserController};
use Model\{ComonModel, EventModel, LoginModel,AdminModel, CompaniesModel, UserModel};

//Login 
Route::get('/login/{status}',LoginController::class,'create',LoginModel::class);
Route::post('/login',LoginController::class,'login',LoginModel::class);

//Comum
Route::get('/form/{status}',ComonController::class,'create',ComonModel::class);
Route::post('/form/',ComonController::class,'store',ComonModel::class);
Route::get('/comum/profile/{status}',ComonController::class,'edit',ComonModel::class);
Route::post('/comum/profile/{id}',ComonController::class,'update',ComonModel::class);
Route::get('/comum/donate/',ComonController::class,'donate',ComonModel::class);
Route::get('/admin/comum/',ComonController::class,'index',ComonModel::class);
Route::get('/empresas/users/{status}',ComonController::class,'index',ComonModel::class);
Route::get('/comum/card/',ComonController::class,'card',ComonModel::class);
Route::get('/esqueceuSenha/{status}',ComonController::class,'createForgetPassword',ComonModel::class);
Route::post('/esqueceuSenha/',ComonController::class,'forgetPassword',ComonModel::class);
Route::post('/esqueceuSenha/update/',ComonController::class,'forgetPasswordUpdate',ComonModel::class);

//Admin
Route::get('/admin/form/{status}',AdminController::class,'create',AdminModel::class);
Route::post('/admin/form/',AdminController::class,'store',AdminModel::class);
Route::get('/admin/profile/{status}',AdminController::class,'edit',AdminModel::class);
Route::post('/admin/profile/{id}',AdminController::class,'update',AdminModel::class);
Route::get('/admin/admin/{status}',AdminController::class,'index',AdminModel::class);
Route::get('/admin/card/',AdminController::class,'card',AdminModel::class);

//Eventos/Notícias
Route::get('/comum/home/',EventController::class,'index',EventModel::class);
Route::get('/empresas/home/',EventController::class,'index',EventModel::class);
Route::get('/comum/events/',EventController::class,'events',EventModel::class);
Route::get('/empresas/events/',EventController::class,'events',EventModel::class);
Route::get('/admin/eventsForm/{status}',EventController::class,'create',EventModel::class);
Route::post('/admin/eventsForm/',EventController::class,'store',EventModel::class);

//Empresas
Route::get('/comum/companies/',CompaniesController::class,'empresas',CompaniesModel::class);
Route::get('/admin/companiesForm/{status}',CompaniesController::class,'create',CompaniesModel::class);
Route::post('/admin/companiesForm/',CompaniesController::class,'store',CompaniesModel::class);
Route::get('/admin/empresas/{status}',CompaniesController::class,'index',CompaniesModel::class);
Route::get('/empresas/card/',CompaniesController::class,'card',CompaniesModel::class);

//Geral
Route::get('/admin/home/',UserController::class,'count',UserModel::class);
Route::get('/admin/users/{status}',UserController::class,'index',UserModel::class);
Route::get('/admin/update/{id}',UserController::class,'edit',UserModel::class);
Route::post('/admin/update/{id}',UserController::class,'update',UserModel::class);
Route::post('/admin/status/{id}',UserController::class,'status',UserModel::class);






Route::redirect($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);