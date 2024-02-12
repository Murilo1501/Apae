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
    'loginUsers' => "SELECT * FROM usuarios WHERE email = ? AND status = 'ativo' ",
    'loginEmpresas' => "SELECT * FROM empresasparceiras WHERE email = ?",
    'events' => "SELECT * FROM eventsnotices",
    'selectById' => "SELECT * FROM usuarios WHERE id = ?",
    'selectByEmail' => "SELECT * FROM usuarios WHERE email = ?",
    'selectByIdEmpresas' => "SELECT * FROM empresasparceiras WHERE id = ?", 
    'countAtivo'=> "SELECT COUNT(*) FROM usuarios WHERE status = 'ativo'",
    'countInativo'=> "SELECT COUNT(*) FROM usuarios WHERE status = 'inativo'",
    'countComum' => "SELECT COUNT(*) FROM usuarios WHERE nivel = 'comum' ",
    'countAdmin' => "SELECT COUNT(*) FROM usuarios WHERE nivel = 'admin' ",
    'countEmpresas' => "SELECT COUNT(*) FROM empresasparceiras",
    'countEventos' => "SELECT COUNT(*) FROM eventsnotices WHERE tipo = 'evento' ",
    'countNoticias' => "SELECT COUNT(*) FROM eventsnotices WHERE tipo = 'noticia' ",
    'event' => "SELECT * FROM eventsnotices WHERE tipo = 'eventos' ",
    'notice' => "SELECT * FROM eventsnotices WHERE tipo = 'noticias' "

];

$update = [
    'users'=> "UPDATE usuarios SET telefone = ?, cep = ?,endereco = ?,complemento = ? WHERE id = ? ",
    'usersSenha'=> "UPDATE usuarios SET telefone = ?, cep = ?,endereco = ?,complemento = ?, senha = ? WHERE id = ? ",
    'statusUsers'=> "UPDATE usuarios SET status = ? WHERE id = ?",
    'statusEmpresas'=> "UPDATE empresasparceiras SET status = ? WHERE id = ?",
    'empresas'=> "UPDATE empresasparceiras SET ramoAtiv = ?, senha = ? ",
    'updateByEmail' => "UPDATE usuarios SET senha = ? WHERE email = ?"
];

$delete = [

]; 