<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['nivel'] != "empresas") {
    header('Location: /apae/Apae-master/routes/logout.php');
    exit();
}


?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../../view/style/comum.css">

    <title>Apae Guarulhos</title>


</head>



<body>
    <?php require_once __DIR__.'/../../components/sidebarParceiros.php'; ?>


    <div style="background-color: #f9f9f9;">
        <div class="container py-4">
            <div class="text-start scroll_1">
                <p class="fs-2 mb-0">Lista de Usuários Amigos 10</p>
                <div class="row">
                    <div class="col">
                        <p class="mt-1">Veja a lista de todos os usuários Amigos 10 cadastrados!</p>
                    </div>
                </div>
            </div>
            

            <?php
            if (isset($_GET["f"]) && $_GET["f"] == 1) {
                echo "<div class=\"alert alert-danger alert-dismissible fade show\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            <strong>Erro ao alterar!</strong> Verifique as informações. Caso acredite que estejam corretas, entre em contato com a equipe de suporte técnico.
                          </div>";
            } elseif (isset($_GET["f"]) && $_GET["f"] == 0) {
                echo '<div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Sucesso ao alterar!</strong> Os dados do usuário foram atualizados com sucesso.
                          </div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center table-hover align-middle small scroll_2">

                    <tr style='background-color: #65baeb; border-color: #2c9ada';>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ramo de atividade</th>
                        <th>Status</th>
                        <th>Tipo de usuário</th>
                        <th>Data de cadastro</th>
                        <th>Carteira</th>
                    </tr>

                    <?php

                        

                        foreach($allUsers as $dados):
                            if(!isset($dados['telefone'])){
                                $dados['telefone'] = 'Não tem número de telefone';
                            }

                            if(!isset($dados['ramoAtiv'])){
                                $dados['ramoAtiv'] = 'Não é empresa';
                            }

                            if(!isset($dados['nivel'])){
                                $dados['nivel'] = ' empresa';
                            }
                           echo "<tr>";
                                echo "<td>$dados[id]</td>";
                                echo "<td>$dados[nome]</td>";
                                echo "<td>$dados[email]</td>";
                                echo "<td>$dados[telefone]</td>";
                                echo "<td>$dados[ramoAtiv]</td>";
                                echo "<td>$dados[status]</td>";
                                echo "<td>$dados[nivel]</td>";
                                echo "<td>$dados[data_cadastro]</td>";

                           echo "</tr>";
                        endforeach;
                    ?>

                </table>
            </div>
        </div>
    </div>

       

    <!-- Carteira - Amigo10 -->

    <!-- Carteira - Admin
    <div class="modal fade" id="card2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>
                        Carteira - Administrador
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="thumbnail text-center">
                        <img src="../../images/cardAdmin.png" alt="" class="w-100">
                        <div>
                            <p class="nome_admin fw-bold">Melissa Natale Ferreira Franco Mais Um Franco</p>
                            <p class="cpf_admin">123.123.123-30</p>
                            <p class="data_nasc_admin">12/12/1222</p>
                            <p class="cadastro_admin">12/12/1221</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Carteira - Empresa -->
    <!-- <div class="modal fade" id="card3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>
                        Carteira - Empresa
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="thumbnail text-center">
                        <img src="../../images/cardEmpresa.png" alt="" class="w-100">
                        <div>
                            <p class="nome_empresa fw-bold">Melissa Natale Ferreira Franco Mais Um Franco</p>
                            <p class="ramo">Exemplo de ramo</p>
                            <p class="cadastro_empresa">31/10/2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <!-- Ativar usuário -->
    <!-- <div class="modal fade" id="ativarUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>
                        Alterar status do usuário
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3 mt-3 text-center">
                        <form action="../../routes/routes.php?isUpdate=1&user=admin" method="post">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ativo" id="ativo" value="1">
                                <label class="form-check-label" for="ativo">Ativar</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ativo" id="inativo" value="0">
                                <label class="form-check-label" for="inativo">Inativar</label>
                            </div>
                            <br>
                            <br>

                            <div class="clearfix">
                                <button type="submit" class="btn btn-sm btn-outline-success float-md-end" id="salvar">Salvar<i class="bi bi-check2-square ms-2"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Footer -->
    <?php require_once __DIR__.'/../../components/footer.html'; ?>

    <!-- Scrollavel -->
    <script>
        window.sr = ScrollReveal({
            reset: true
        });

        sr.reveal('.scroll_1', {
            duration: 1000
        });
        sr.reveal('.scroll_2', {
            duration: 1000
        });
    </script>

    <script src="../../shared/masks.js"></script>
</body>

</html>