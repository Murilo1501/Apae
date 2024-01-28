<?php
    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user']['nivel']!="admin") {
        header('Location: /newApae/routes/logout.php');
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
                    <h1 class="fs-1">Cadastro de Administradores</h1>
                </div>

                <?php
                    if (($_SERVER['REQUEST_URI']) == '/newApae/admin/form/0') {
                        echo "<div class=\"alert alert-danger alert-dismissible fade show\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            <strong>Erro ao cadastrar!</strong> Verifique as informações. Caso acredite que estejam corretas, entre em contato com a equipe de suporte técnico.
                            </div>";
                    } elseif (($_SERVER['REQUEST_URI']) == '/newApae/admin/form/1') {
                        echo "<div class=\"alert alert-success alert-dismissible fade show\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            <strong>Sucesso ao cadastrar!</strong> O novo administrador já está pronto para acessar a conta.
                            </div>";
                    }
                ?>

                <form method="post" action="/newApae/admin/form/">

                    <!-- Nome -->
                    <div class="mb-3 mt-3">
                        <label for="nome" class="form-label">Nome</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="nome" name="Nome"
                                placeholder="Nome" maxlenght="64" minlenght="2" autocomplete='off' required>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="email" name="Email"
                                placeholder="E-mail" maxlength="128" minlength="5"
                                pattern="^[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}$" autocomplete='off'
                                required>
                        </div>
                    </div>

                    <!-- CEP -->
                    <div class="mb-3 mt-3">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="cep" name="CEP"
                                placeholder="_____-___" data-slots="_" data-accept="[\d]" autocomplete='off' required>
                        </div>
                    </div>

                    <!-- CPF -->
                    <div class="mb-3 mt-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" name="CPF"
                                placeholder="___.___.___-__" id="cpf" data-slots="_" data-accept="[\d]"
                                autocomplete='off' required>
                        </div>
                    </div>

                    <!-- Senha -->
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Senha" maxlength="24" name="Senha"
                                minlength="8" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,24}" aria-label="button-addon1"
                                required>

                            <button class="btn btn-outline-primary rounded-end" type="button" id="button-addon1"
                                onclick="showPass('password',this.id)"><i class="bi bi-eye-slash"></i></button>
                        </div>
                        <div class="form-text">
                            Sua senha deve conter ao menos 8 caracteres, sendo 1 letra maiúscula, 1 letra minúscula
                            e 1
                            número. Limite de
                            24 caracteres
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="conf-password" class="form-label">Confirmar senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="conf-password" placeholder="Confirmar senha" name="ConfirmarSenha"
                                maxlength="99" minlength="8" onkeyup="validatePass()" aria-label="button-addon2"
                                required>

                            <button class="btn btn-outline-primary rounded-end" type="button" id="button-addon2"
                                onclick="showPass('conf-password',this.id)"><i class="bi bi-eye-slash"></i></button>

                            <span class="valid-feedback" id="conf-pass-lbl">As senhas não são iguais</span>
                            <span class="invalid-feedback">As senhas não são iguais</span>
                        </div>
                    </div>
                    
                    <!-- Endereço -->
                    <div class="row g-2">
                        <div class="col-md-8">
                            <label for="endereco" class="form-label">Endereço</label>
                            <div class="form-label">
                                <input type="text" class="form-control" id="endereco" placeholder="Endereço" style='background-color: #e9ecef;'
                                    name="endereco" maxlenght="256" readonly required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="complemento" class="form-label">Complemento</label>
                            <div class="form-label">
                                <input type="text" class='form-control' id="complemento" name="complemento"
                                    placeholder="Complemento" autocomplete='off' required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Telefone -->
                    <div class="mb-3 mt-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <div class="col-md-12 mb-3"> <input type="text" class="form-control" name="Numero"
                                placeholder="(__) _____-____" id="telefone" data-slots="_" data-accept="[\d]"
                                autocomplete='off' required>
                        </div>
                    </div>


                    <!-- imagem
                        <div>
                          <label for="file" class="form-label">Imagem</label>
                          <input class="form-control" type="file" id="file" placeholder="file">
                          <span class="invalid-feedback">Preencha este campo</span>
                        </div> -->

                    <!-- Campo invisivel / usuário -->

                    <!-- Botão -->
                    <div class="clearfix">
                        <button type="submit" class="btn btn-sm btn-outline-primary float-md-end mt-2"
                            id="cadastrar">Cadastrar<i class="bi bi-plus-square ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once __DIR__.'/../../components/footer.html';?>

    <!-- script do input arrumado -->
    <script>
        document.querySelectorAll('input').forEach(inpur => {
            inpur.addEventListener('focus', function () {
                if (inpur.className === "sim") {
                    inpur.classList.add("on");
                    inpur.parentNode.classList.add("on2");
                }
            });

            inpur.addEventListener('focusout', function () {
                if (inpur.value === inpur.getAttribute("placeholder") || inpur.value === "") {
                    inpur.classList.remove("on");
                    inpur.parentNode.classList.remove("on2");
                }
            });

        });
    </script>

    <!-- Scrollavel -->
    <script>
        window.sr = ScrollReveal({ reset: true });

        sr.reveal('.scroll_meus_dados', { duration: 1000 });
    </script>

    <!-- Verif Senha -->
    <script src="../../shared/confirmPassword.js"></script>

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
        <script src="../../shared/masks.js"></script>
</body>

</html>