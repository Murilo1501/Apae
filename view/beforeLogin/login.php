<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/login.css">
    <title>Login</title>

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>



</head>

<body>

    <div class="box">

        <div class="img-box content first-content">

            <div class="img-box_2">
                <img src="../images/logo_apae2.png">
            </div>

            <div class="first-column">
                <h2 class="title title-primary">Faça seu cadastro!</h2>
                <p class="description description-primary">Ainda não é um contribuinte </p>
                <p class="description description-primary">faça seu cadastro </p>
                <a href="/newApae/form"><button id="signin" class="btn btn-primary">Clique Aqui</button></a>
            </div>
        </div>

        <div class="form-box">
            <div class="img-box2">
                <img src="../images/logoApaeGuarulhos.png">
            </div>

            <div class="Titulo_2">
                <h2>Login</h2>
            </div>
            <?php
            if (isset($_GET["f"]) && $_GET["f"] == 1) {
                echo "<div id=\"erro\" class=\"erro\">
                            <div>
                                <p><strong>Erro ao logar!</strong> Verifique as informações. Caso acredite que estejam corretas,
                                    entre em contato com a equipe de suporte técnico.</p>
                            </div>
                            <div id=\"ocultar\" style=\"height:10px;\"><i class=\"fa-solid fa-xmark\"></i></div>
                        </div>";
            } elseif (isset($_GET["f"]) && $_GET["f"] == 2) {

                echo "<div id=\"erro\" class=\"success\">
                            <div>
                                <p><strong>Senha alterada com sucesso</strong> Realize o login com as novas credenciais</p>
                            </div>
                            <div id=\"ocultar\" style=\"height:10px; \"><i class=\"fa-solid fa-xmark\"></i></div>
                        </div>";
            } else if (isset($_GET["f"]) && $_GET["f"] == 3) {
                echo "<div id=\"erro\" class=\"success\">
                    <div>
                        <p><strong>Cadastro efetuado com sucesso !</strong> Espere pela confirmação do Administrador</p>
                    </div>
                    <div id=\"ocultar\" style=\"height:10px; \"><i class=\"fa-solid fa-xmark\"></i></div>
                </div>";
            }
            ?>
            <form action="/newApae/login" method="post">
                <div class="inputBox on">
                    <input type="email" class="sim" id="email" name="EmailLogin" required>
                    <span>Email</span>
                </div>


                <div class="inputBox on">
                    <input type="password" class="sim" id="senha" name="SenhaLogin" required>
                    <span>Senha</span>
                    <div id="icon" onclick="showHide()"></div>
                </div>

                <div class="input-group">
                    <button class="fourth2">Logar</button>
                </div>

            </form>

            <div class="forgetPass">
                <a href="esqueciSenha.php">Esqueceu a senha</a>
            </div>

            <div style="text-align: center; padding:5px">
                <h3>Ou</h3>
            </div>

            <div class="icons">

                <div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID" data-login_uri="https://your.domain/your_login_endpoint" data-ux_mode="popup" data-auto_prompt="false">
                </div>

                <div class="g_id_signin" data-type="standard" data-shape="circle" data-theme="filled_blue" data-text="signin_with" data-size="large" data-logo_alignment="left">
                </div>

            </div>
        </div>


    </div>

    <!-- Google -->

    <script>
        function handleCredentialResponse(response) {
            const data = jwt_decode(response.credential)
            console.log(data)

            fullName.textContent = data.name
            sub.textContent = data.sub
            given_name.textContent = data.given_name
            family_name.textContent = data.family_name
            email.textContent = data.email
            verifiedEmail.textContent = data.email_verified
            picture.setAttribute("src", data.picture)
        }

        window.onload = function() {

            google.accounts.id.initialize({
                client_id: "107161323498-kfqtti50so00lb13n6prli67g3dovpii.apps.googleusercontent.com",
                callback: handleCredentialResponse
            });

            google.accounts.id.renderButton(
                document.getElementById("buttonDiv"), {
                    theme: "board",
                    size: "large",
                    type: "standard",
                    shape: "rectangular",
                    theme: "filled_blue",
                    text: "$ {button.text}",
                    logo_alignment: "left",
                    width: "250"
                } // customization attributes
            );
            google.accounts.id.prompt(); // also display the One Tap dialog
        }
    </script>

    <!-- senha -->

    <script>
        function showHide() {
            const password = document.getElementById('senha');
            const icon = document.getElementById('icon');

            if (password.type === 'password') {
                password.setAttribute('type', 'text');
                icon.classList.add('hide')
            } else {
                password.setAttribute('type', 'password');
                icon.classList.remove('hide')
            }
        }

        function showHide2() {
            const password = document.getElementById('ConfirmarSenha');
            const icon = document.getElementById('icon2');

            if (password.type === 'password') {
                password.setAttribute('type', 'text');
                icon.classList.add('hide')
            } else {
                password.setAttribute('type', 'password');
                icon.classList.remove('hide')
            }
        }
    </script>

    <!-- inputs -->
    <script>
        document.querySelectorAll('input').forEach(inpur => {
            inpur.addEventListener('focus', function() {
                if (inpur.className === "sim") {
                    inpur.classList.add("on");
                    inpur.parentNode.classList.add("on2");
                }
            });

            inpur.addEventListener('focusout', function() {
                if (inpur.value === inpur.getAttribute("placeholder") || inpur.value === "") {
                    inpur.classList.remove("on");
                    inpur.parentNode.classList.remove("on2");
                }
            });

        });
    </script>

    <!-- Erro -->

    <script>
        var btn1 = document.querySelector("#ocultar");
        btn1.addEventListener("click", function() {
            var div = document.querySelector("#erro");

            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }

        });
    </script>

</body>

</html>
