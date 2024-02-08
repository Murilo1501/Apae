<?php
// autoload.php

spl_autoload_register(function ($class) {
    // Converte o namespace da classe para um caminho de arquivo
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Diretórios a serem verificados
    $directories = [
        __DIR__ . '/app/controller/',
        __DIR__ . '/app/model/',
        __DIR__ . '/routes/' // Adiciona o diretório para a classe Route
    ];

    // Tenta incluir o arquivo da classe
    foreach ($directories as $directory) {
        $filePath = $directory . $classPath . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
            return;
        }
    }
});

// Seu código continua aqui, se necessário
require_once __DIR__ . '/routes/Route.php';
require_once __DIR__ . '/app/controller/AdminController.php';
require_once __DIR__ . '/app/controller/ComonController.php';
require_once __DIR__ . '/app/controller/CompaniesController.php';
require_once __DIR__ . '/app/controller/EventController.php';
require_once __DIR__ . '/app/controller/LoginController.php';
require_once __DIR__ . '/app/controller/UserController.php';

require_once __DIR__ . '/routes/Route.php';
require_once __DIR__ . '/app/Model/AdminModel.php';
require_once __DIR__ . '/app/Model/ComonModel.php';
require_once __DIR__ . '/app/Model/CompaniesModel.php';
require_once __DIR__ . '/app/Model/EventModel.php';
require_once __DIR__ . '/app/Model/LoginModel.php';
require_once __DIR__ . '/app/Model/UserModel.php';