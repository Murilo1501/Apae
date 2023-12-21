<?php

$insert = [
    'comum' => "INSERT INTO usuarios (nome,email,cep,cpf,data_nasc,senha,endereco,complemento,telefone,data_vencimento,nivel,status,data_cadastro) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)",
    'admin' => "INSERT INTO usuarios (nome,email,cep,cpf,senha,endereco,complemento,telefone,nivel,status,data_cadastro) VALUES (?,?,?,?,?,?,?,?,?,?,?)",
    'empresas' => "INSERT INTO empresasparceiras (nome,ramoAtiv,email,senha,data_cadastro) VALUES (?,?,?,?,?)",
    'eventos' => "INSERT INTO eventsnotices (titulo,texto,tipo,termino,inicio) VALUES (?,?,?,?,?)"
];

$select = [
    'allUsers' => "SELECT * FROM usuarios",
    'allEmpresas' => "SELECT * FROM empresasparceiras",
    'comum' => "SELECT * FROM usuarios WHERE nivel = 'comum' ",
    'admin' => "SELECT * FROM usuarios WHERE nivel = 'admin' ",
    'login' => "SELECT * FROM usuarios WHERE email = ?",
    'events' => "SELECT * FROM eventsnotices",
    'selectById' => "SELECT * FROM usuarios WHERE id = ?",
    'countAtivo'=> "SELECT COUNT(*) FROM usuarios WHERE status = 1",
    'countInativo'=> "SELECT COUNT(*) FROM usuarios WHERE status = 0",
    'countComum' => "SELECT COUNT(*) FROM usuarios WHERE nivel = 'comum' ",
    'countAdmin' => "SELECT COUNT(*) FROM usuarios WHERE nivel = 'admin' ",
    'countEmpresas' => "SELECT COUNT(*) FROM usuarios WHERE nivel = 'empresas' ",
    'countEventos' => "SELECT COUNT(*) FROM eventsnotices WHERE tipo = 'evento' ",
    'countNoticias' => "SELECT COUNT(*) FROM eventsnotices WHERE tipo = 'noticia' ",
];

$update = [
    'comum'=> "UPDATE usuarios SET telefone = ?, cep = ?,endereco = ?,complemento = ? WHERE id = ? ",
    'comumSenha'=> "UPDATE usuarios SET telefone = ?, cep = ?,endereco = ?,complemento = ?, senha = ? WHERE id = ? "
];

$delete = [

]; 