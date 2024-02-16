<?php
    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user']['nivel']!="admin") {
        header('Location: /newaApae/routes/logout.php');
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="../../view/style/admin.css">

    <title>Apae Guarulhos</title>

</head>

<body>
    <?php require_once __DIR__.'/../../components/sidebarAdmin.php';?>

    <div style="background-color: #eee;">
        <div class="container py-4">
            <div class="container border border-1 bg-body rounded-3 shadow rounded p-4 scroll_meus_dados">
                <div class="text-start">
                    <h1 class="fs-1">Alteração dos dados do usuário</h1>
                </div>
                <form method="post" action= <?= '/apae/Apae-master/admin/update/'.$userData['id'] ?> >

                    <!-- Nome -->
                    <div class="mb-3 mt-3">
                        <label for="nome" class="form-label">Nome</label>
                        <div class="col-md-12 mb-3"><input type="text" class="form-control" id="nome" placeholder="Nome" name="Nome"
                                maxlenght="64" minlenght="2" autocomplete='off' value="<?=$userData['nome']?>" disabled required>
                        </div>
                    </div>

                    <!-- CPF -->
                    <div class="mb-3 mt-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" name="cpf"
                                placeholder="___.___.___-__" id="cpf" data-slots="_" data-accept="[\d]"
                                autocomplete='off' value="<?=$userData['cpf']?>" disabled required>
                        </div>
                    </div>

                    <!-- Telefone -->
                    <div class="mb-3 mt-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" name="telefone"
                                autocomplete='off' value="<?=$userData['telefone']?>" >
                        </div>
                    </div>

                    <!-- CEP -->
                    <div class="mb-3 mt-3">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="cep" name="cep" placeholder="_____-___" data-slots="_" data-accept="[\d]" autocomplete='off' value="<?=$userData['cep']?>" required>
                        </div>
                    </div>

                    <!-- Endereço & complemento -->
                    <div class="row g-2">
                        <div class="col-md-8">
                            <label for="endereco" class="form-label">Endereço</label>
                            <div class="form-label">
                                <input type="text" class="form-control" id="endereco" placeholder="Endereço" style='background-color: #e9ecef;'
                                    name="endereco" maxlenght="256" value="<?=$userData['endereco']?>" readonly required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="complemento" class="form-label">Complemento</label>
                            <div class="form-label">
                                <input type="text" class='form-control' id="complemento" name="complemento"
                                    placeholder="Complemento" value="<?=$userData['complemento']?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="email" name="email"
                                placeholder="E-mail" maxlength="128" minlength="5" style='background-color: #e9ecef;'
                                pattern="^[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}$" autocomplete='off'
                                value="<?=$userData['email']?>" readonly required>
                        </div>
                    </div>

                    <!-- Senha -->
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Senha" maxlength="24" name="Senha"
                                minlength="8" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,24}" aria-label="button-addon1">

                            <button class="btn btn-outline-primary rounded-end" type="button" id="button-addon1"
                                onclick="showPass('password',this.id)"><i class="bi bi-eye-slash"></i></button>
                        </div>
                        <div class="form-text">
                            Sua senha deve conter ao menos 8 caracteres, sendo 1 letra maiúscula, 1 letra minúscula
                            e 1
                            número. Limite de
                            24 caracteres. Se este campo permanecer vazio, a senha não será alterada.
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="conf-password" class="form-label">Confirmar senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="conf-password" placeholder="Confirmar senha" name="ConfirmarSenha"
                                maxlength="24" minlength="8" onkeyup="validatePass()" aria-label="button-addon2">

                            <button class="btn btn-outline-primary rounded-end" type="button" id="button-addon2"
                                onclick="showPass('conf-password',this.id)"><i class="bi bi-eye-slash"></i></button>

                            <span class="valid-feedback" id="conf-pass-lbl">As senhas não são iguais</span>
                            <span class="invalid-feedback">As senhas não são iguais</span>
                        </div>
                    </div>



                    <!-- Botão -->
                    <div class="clearfix">
                    <button type="submit" class="btn btn-sm btn-outline-success float-md-end" id="salvar">Salvar<i class="bi bi-check2-square ms-2"></i></button></div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once __DIR__.'/../../components/footer.html';?>

    <!-- Scrollavel -->
    <script>
        window.sr = ScrollReveal({ reset: true });

        sr.reveal('.scroll_meus_dados', { duration: 1000 });
    </script>

    <!-- Verif Senha -->
    <script src="../../view/components/confirmPassword.js"></script>

    <!-- Script CEP autocomplete -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            function limpa_formulário_cep() {
                $("#endereco").val("");
            }
            $("#cep").blur(function () {

                var cep = $(this).val().replace(/\D/g, '');
                if (cep != "") {
                    var validacep = /^[0-9]{8}$/;

                    if (validacep.test(cep)) {
                        $("#endereco").val("Consultando...");
                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                            if (!("erro" in dados)) {
                                $("#endereco").val(dados.logradouro + ", " + dados.bairro + ", " + dados.localidade + ", " + dados.uf);
                            }
                            else {
                                $("#endereco").val("Seu CEP não foi encontrado")
                            }
                        });
                    }
                    else {
                        $("#endereco").val("Seu CEP é inválido");
                    }
                }
                else {
                    limpa_formulário_cep();
                }
            });
        });

    </script>

    <!-- Masks -->
        <script src="../../view/components/masks.js"></script>
</body>

</html>