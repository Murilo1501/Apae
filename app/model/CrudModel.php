<?php

namespace Model;
use Connection\Connect;
require_once __DIR__.'/../config/database/Connect.php';
$pdo = Connect::connect();

require_once __DIR__.'/../config/queriesSql.php';



class Crud{

    public static function insert($data,$typeUser){
        global $insert,$pdo;

        switch($typeUser){
            case "comum":
                $sql = $insert['comum'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['Nome']);
                $resultSql->bindParam(2,$data['Email']);
                $resultSql->bindParam(3,$data['CEP']);
                $resultSql->bindParam(4,$data['CPF']);
                $resultSql->bindParam(5,$data['DataDeNascimento']);
                $resultSql->bindParam(6,$data['Senha']);
                $resultSql->bindParam(7,$data['endereco']);
                $resultSql->bindParam(8,$data['complemento']);
                $resultSql->bindParam(9,$data['Numero']);
                $resultSql->bindParam(10,$data['DataDeVencimento']);
                $resultSql->bindParam(11,0);
                $resultSql->bindValue(12,'ativo');
                $resultSql->bindValue(13,date('Y-m-d'));

                $resultSql->execute();
            break;

            case "admin":
                $sql = $insert['admin'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['Nome']);
                $resultSql->bindParam(2,$data['Email']);
                $resultSql->bindParam(3,$data['CEP']);
                $resultSql->bindParam(4,$data['CPF']);
                $resultSql->bindParam(5,$data['Senha']);
                $resultSql->bindParam(6,$data['endereco']);
                $resultSql->bindParam(7,$data['complemento']);
                $resultSql->bindParam(8,$data['Numero']);
                $resultSql->bindValue(9,'admin');
                $resultSql->bindValue(10,0);
                $resultSql->bindValue(11,date('Y-m-d'));

                $resultSql->execute();
            break;

            case "empresas":
                $sql = $insert["empresas"];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['Nome']);
                $resultSql->bindParam(2,$data['ramoAtiv']);
                $resultSql->bindParam(3,$data['Email']);
                $resultSql->bindParam(4,$data['Senha']);
                $resultSql->bindValue(5,date('Y-m-d'));

                $resultSql->execute();

            break;

            case "events":
                $sql = $insert['eventos'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['titulo']);
                $resultSql->bindParam(2,$data['descr']);
                $resultSql->bindParam(3,$data['type']);
                $resultSql->bindParam(4,$data['DataAdd']);
                $resultSql->bindParam(5,$data['DataRemove']);

               return $resultSql->execute();

            break;
        }
    }

    public static function select($type,$data = null){
        global $select,$pdo;

        switch($type){
            case "login":
                $sql = $select['login'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->setFetchMode(\PDO::FETCH_ASSOC);
                $resultSql->bindParam(1,$data['EmailLogin']);

                $resultSql->execute();

                if($resultSql->rowCount() == 1){
                    $user = $resultSql->fetch();

                    if($data['SenhaLogin'] == $user['senha']){
                        return $user;
                    }
                }

                return false;
                


             

            break;

            case "events":
                $sql = $select['events'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->execute();

                $events = $resultSql->fetchAll();
                return $events;

            break;

            case "selectById":
                $sql = $select['selectById'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data);
                $resultSql->execute();

                $userData = $resultSql->fetch();
                return $userData;

            break;

            case "count":
                $sqlAtivo = $select['countAtivo'];
                $sqlInativo = $select['countInativo'];

                $sqlComum = $select['countComum'];
                $sqlAdmin = $select['countAdmin'];
                $sqlEmpresas = $select['countEmpresas'];

                $sqlNoticias = $select['countNoticias'];
                $sqlEventos = $select['countEventos'];

                $resultSqlAtivo = $pdo->prepare($sqlAtivo);
                $resultSqlInativo = $pdo->prepare($sqlInativo);

                $resultSqlComum = $pdo->prepare($sqlComum);
                $resultSqlAdmin = $pdo->prepare($sqlAdmin);
                $resultSqlEmpresas = $pdo->prepare($sqlEmpresas);

                $resultSqlNoticias = $pdo->prepare($sqlNoticias);
                $resultSqlEventos = $pdo->prepare($sqlEventos);

                $resultSqlAtivo->execute();
                $resultSqlInativo->execute();

                $resultSqlComum->execute(); 
                $resultSqlAdmin->execute();
                $resultSqlEmpresas->execute();

                $resultSqlNoticias->execute();
                $resultSqlEventos->execute();
                
                $retornoComum = $resultSqlComum->fetchColumn();
                $retornoEmpresa = $resultSqlEmpresas->fetchColumn();
                $retornoAdmin = $resultSqlAdmin->fetchColumn();
        
                $retornoAtivos = $resultSqlAtivo->fetchColumn();
                $retornoInativos = $resultSqlInativo->fetchColumn();
        
                // $retornoProdutos = $countProdutos->fetchColumn();
                $retornoNoticias = $resultSqlNoticias->fetchColumn();
                $retornoEventos = $resultSqlEventos->fetchColumn();

                $retornos = [
                    "comum" => $retornoComum,
                    "empresas" => $retornoEmpresa,
                    "admin" => $retornoAdmin,
        
                    "ativos" => $retornoAtivos,
                    "inativos" => $retornoInativos,
        
                    // "produtos" => $retornoProdutos,
                    "noticias" => $retornoNoticias,
                    "eventos" => $retornoEventos,
                ];
        
                return $retornos;
            
            break;

            case "allUsers":
                $sqlUsers = $select['allUsers'];
                $sqlEmpresas = $select['allEmpresas'];

                $resultSqlUsers = $pdo->prepare($sqlUsers);
                $resultSqlEmpresas = $pdo->prepare($sqlEmpresas);
                
                $resultSqlUsers->execute();
                $resultSqlEmpresas->execute();

                $users = $resultSqlUsers->fetchAll();
                $empresas = $resultSqlEmpresas->fetchAll();

                $allUsers = array_merge($users,$empresas);
                
                return $allUsers;

            break;

            case "comum":
                $sqlComum = $select['comum'];
                $resultSqlComum  = $pdo->prepare($sqlComum);
                $resultSqlComum->execute();

                $usersComum = $resultSqlComum->fetchAll();
                return $usersComum;

            break;

            case "admin":
                $sqlComum = $select['admin'];
                $resultSqlComum  = $pdo->prepare($sqlComum);
                $resultSqlComum->execute();

                $usersComum = $resultSqlComum->fetchAll();
                return $usersComum;
                
            break;

            case "empresas":
                $sqlComum = $select['allEmpresas'];
                $resultSqlComum  = $pdo->prepare($sqlComum);
                $resultSqlComum->execute();

                $usersComum = $resultSqlComum->fetchAll();
                return $usersComum;
                
            break;



        }
        

    }

    public static function update($data,$typeUser){
        global $update,$pdo;

        switch($typeUser){
            case "comum_admin":
                if($data['Senha'] !== ''){
                    $sql = $update['comumSenha'];
                    $resultSql = $pdo->prepare($sql);
                    $resultSql->bindParam(1,$data['telefone']);
                    $resultSql->bindParam(2,$data['cep']);
                    $resultSql->bindParam(3,$data['endereco']);
                    $resultSql->bindParam(4,$data['complemento']);
                    $resultSql->bindParam(5,$data['Senha']);
                    $resultSql->bindParam(6,$data['id']);
            
                    if($resultSql->execute()){
                        return true;
                    }
        
                    return false;
        
                } else{
                    $sql = $update['comum'];
                    $resultSql = $pdo->prepare($sql);
                    $resultSql->bindParam(1,$data['telefone']);
                    $resultSql->bindParam(2,$data['cep']);
                    $resultSql->bindParam(3,$data['endereco']);
                    $resultSql->bindParam(4,$data['complemento']);
                    $resultSql->bindParam(5,$data['id']);
            
                    if($resultSql->execute()){
                        return true;
                    }
        
                    return false;
                }
            
            break;
        }

        
       

       

        

    }

    public function delete(){
        global $delete,$pdo;

        $sql = $delete[''];
        $resultSql = $pdo->prepare($sql);

        $resultSql->execute();
    }
}