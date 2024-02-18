<?php

namespace Model;
use Connection\Connect;
use Controller\Treating;
use interfaces\Model\CrudInterface;

require_once __DIR__.'/../config/database/Connect.php';
require_once __DIR__.'/interfaces/CrudInterface.php';
$pdo = Connect::connect();

require_once __DIR__.'/../config/queriesSql.php';



class Crud extends Treating implements CrudInterface{

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
                $resultSql->bindValue(11,'comum');
                $resultSql->bindValue(12,'inativo');
                $resultSql->bindValue(13,date('Y-m-d'));

               return  $resultSql->execute();

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
                $resultSql->bindValue(10,'inativo');
                $resultSql->bindValue(11,date('Y-m-d'));

              return $resultSql->execute();

            case "empresas":
                // var_dump($data);

                $sql = $insert["empresas"];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['Nome']);
                $resultSql->bindParam(2,$data['ramoAtiv']);
                $resultSql->bindParam(3,$data['Email']);
                $resultSql->bindParam(4,$data['Senha']);
                $resultSql->bindValue(5,date('Y-m-d'));

               return  $resultSql->execute();


            case "events":
                
                $sql = $insert['eventos'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['titulo']);
                $resultSql->bindParam(2,$data['descr']);
                $resultSql->bindParam(3,$data['type']);
                $resultSql->bindParam(4,$data['DataAdd']);
                $resultSql->bindParam(5,$data['DataRemove']);

               return $resultSql->execute();

        }
    }

    public static function select($type,$data = null){
        global $select,$pdo;

        switch($type){
            case "login":

                $sqlUsers = $select['loginUsers'];
                $sqlEmpresas = $select['loginEmpresas'];

                $resultSqlUsers = $pdo->prepare($sqlUsers);
                $resultSqlUsers->setFetchMode(\PDO::FETCH_ASSOC);
                $resultSqlUsers->bindParam(1,$data['EmailLogin']);

                $resultSqlEmpresas = $pdo->prepare($sqlEmpresas);
                $resultSqlEmpresas->setFetchMode(\PDO::FETCH_ASSOC);
                $resultSqlEmpresas->bindParam(1,$data['EmailLogin']);


                $resultSqlUsers->execute();
                $resultSqlEmpresas->execute();

                if($resultSqlUsers->rowCount() == 1){
                    $user = $resultSqlUsers->fetch();
                    $user['data_cadastro'] = date('d/m/Y',strtotime($user['data_cadastro']));
                    $user['data_vencimento'] = date('d/m/Y',strtotime($user['data_vencimento']));
                    $user['data_nasc'] = date('d/m/Y',strtotime($user['data_nasc']));

                    if(password_verify($data['SenhaLogin'],$user['senha'])){
                        return $user;
                    }

                } elseif($resultSqlEmpresas->rowCount() == 1){
                    $user = $resultSqlEmpresas->fetch();
                    $user['data_cadastro'] = date('d/m/Y',strtotime($user['data_cadastro']));

                    if(password_verify($data['SenhaLogin'],$user['senha'])){
                        return $user;
                    }

                }

                return false;
                


             


            case "events":
                $sql = $select['events'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->execute();

                $events = $resultSql->fetchAll();
                return $events;


            case "selectById":
                $sql = $select['selectById'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data);
                $resultSql->execute();                

                $sqlEmpresas = $select['selectByIdEmpresas'];
                $resultSqlEmpresas = $pdo->prepare($sqlEmpresas);
                $resultSqlEmpresas->bindParam(1,$data);
                $resultSqlEmpresas->execute();

                if($resultSql->rowCount() == 1){
                    $userData = $resultSql->fetch();
                    return $userData;

                }elseif($resultSqlEmpresas->rowCount() == 1){
                    $userData = $resultSqlEmpresas->fetch();
                    return $userData;
                }
                
                return false;


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

                for ($i = 0;$i<count($allUsers);$i++) {
                    if (isset($allUsers[$i]['data_nasc'])) {
                        $allUsers[$i]['data_nasc'] = date("d/m/Y",strtotime($allUsers[$i]['data_nasc']));
                    }
                    $allUsers[$i]['data_cadastro'] = date("d/m/Y",strtotime($allUsers[$i]['data_cadastro']));
                }
                
                return $allUsers;


            case "comum":
                $sqlComum = $select['comum'];
                $resultSqlComum  = $pdo->prepare($sqlComum);
                $resultSqlComum->execute();

                $usersComum = $resultSqlComum->fetchAll();

                $formattedComum = [];

                foreach ($usersComum as $user) {
                    $user['data_nasc'] = date('d/m/Y',strtotime($user['data_nasc']));
                    $user['data_cadastro'] = date('d/m/Y',strtotime($user['data_cadastro']));
                    $formattedComum[] = $user;
                }

                return $formattedComum;


            case "admin":
                $sqlAdmin = $select['admin'];
                $resultSqlAdmin  = $pdo->prepare($sqlAdmin);
                $resultSqlAdmin->execute();

                $usersAdmin = $resultSqlAdmin->fetchAll();
                return $usersAdmin;
                

            case "empresas":
                $sqlAdmin = $select['allEmpresas'];
                $resultSqlAdmin  = $pdo->prepare($sqlAdmin);
                $resultSqlAdmin->execute();

                $usersAdmin = $resultSqlAdmin->fetchAll();
                return $usersAdmin;
                

            case "selectByEmail":
                $sql = $select['selectByEmail'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['email']);
                $resultSql->execute();
                
                return $userData = $resultSql->fetch();
                

            case "event":
                $sql = $select['event'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->execute();

                $event = $resultSql->fetchAll();
                return $event;

            case "notice":
                $sql = $select['notice'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->execute();

                $notice = $resultSql->fetchAll();
                return $notice;




        }
        

    }

    public static function update($data,$typeUser,$id=null){
        global $update,$pdo;

        switch($typeUser){
            case "users":
                if($data['Senha'] !== '' && isset($data['cep'])){
                    $sql = $update['usersSenha'];
                    $resultSql = $pdo->prepare($sql);
                    $resultSql->bindParam(1,$data['telefone']);
                    $resultSql->bindParam(2,$data['cep']);
                    $resultSql->bindParam(3,$data['endereco']);
                    $resultSql->bindParam(4,$data['complemento']);
                    $resultSql->bindParam(5,$data['Senha']);
                    $resultSql->bindParam(6,$id);
                    
                    if($resultSql->execute()){
                        return true;
                    }
        
                    return false;
        
                } elseif(isset($data['ramoAtiv'])){
                    
                    if ($data['Senha']!=='') {
                        $sql = $update['empresasCSenha'];
                        $resultSql = $pdo->prepare($sql);

                        $resultSql->bindParam(1,$data['ramoAtiv']);
                        $resultSql->bindParam(2,$data['Senha']);
                        $resultSql->bindParam(3,$id);
                    } else {
                        $sql = $update['empresasSSenha'];
                        $resultSql = $pdo->prepare($sql);
                        
                        $resultSql->bindParam(1,$data['ramoAtiv']);
                        $resultSql->bindParam(2,$id);
                    }


                   return  $resultSql->execute();

                }else{
                    $sql = $update['users'];
                    $resultSql = $pdo->prepare($sql);
                    $resultSql->bindParam(1,$data['telefone']);
                    $resultSql->bindParam(2,$data['cep']);
                    $resultSql->bindParam(3,$data['endereco']);
                    $resultSql->bindParam(4,$data['complemento']);
                    $resultSql->bindParam(5,$id);

            
                    if($resultSql->execute()){
                        return true;
                    }
        
                    return false;
                }
            

            case "status":
                $sql  = $update['statusUsers'];
                $sqlEmpresas  = $update['statusEmpresas'];

                $resultSql = $pdo->prepare($sql);
                $resultSqlEmpresas = $pdo->prepare($sqlEmpresas);

                $resultSql->bindValue(1,$data['ativar']);
                $resultSql->bindParam(2,$id);

                $resultSqlEmpresas->bindValue(1,$data['ativar']);
                $resultSqlEmpresas->bindParam(2,$id);

                if($data['nivel'] == 'empresa'){
                    return $resultSqlEmpresas->execute();
                } else{
                    return $resultSql->execute();
                }


            case "updateByEmail":
                $sql = $update['updateByEmail'];
                $resultSql = $pdo->prepare($sql);
                $resultSql->bindParam(1,$data['senha']);
                $resultSql->bindParam(2,$data['email']);
                return  $resultSql->execute();


        

               
              
        }

        
       

       

    }

    public function delete(){
        global $delete,$pdo;

        $sql = $delete[''];
        $resultSql = $pdo->prepare($sql);

        $resultSql->execute();
    }
}