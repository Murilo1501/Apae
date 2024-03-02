<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>Cadastro</title>
</head>

<body>

    <div class="box">
        <div class="img-box content first-content">

            <div class="img-box_2">
                <img src="../view/assets/logo_apae2.png">
            </div>


            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Para manter-se conectado conosco</p>
                <p class="description description-primary">faça o login com suas informações pessoais</p>
                <a href="/apae/Apae-master/login/"><button id="signin" class="btn btn-primary">Conectar-se</button></a>
            </div>


        </div>
            
        <div class="controler">
            <form action="/apae/Apae-master/form/" method="post">
                <div class="form-box">

                    <div class="img-box2">
                        <img src="../view/assets/logoApaeGuarulhos.png">
                    </div>


                    <div style="padding-bottom: 15px;" class="Titulo_2">
                        <h2>Criar Conta</h2>
                    </div>

                    <?php
                        if ($_SERVER['REQUEST_URI'] == '/apae/Apae-master/form/0') {
                            echo '
                            <div id="erro" class="erro">
                                <div>
                                    <p><strong>Erro ao cadastrar!</strong> Verifique as informações. Caso acredite que estejam corretas, entre em contato com a equipe de suporte técnico.</p>
                                </div>
                                <div id="ocultar" style="height:10px;"><i class="fa-solid fa-xmark"></i></div>
                            </div>';
                        }
                    ?>

                    <div class="form">

                        <div class="inputBox on">
                            <input type="text" class="sim" id="NomeCompleto" name="Nome" required>
                            <span>Nome completo</span>
                        </div>

                        <div class="inputBox on">
                            <input type="email" class="sim" id="email" name="Email" required>
                            <span>Email</span>
                        </div>

                        <div class="inputBox on">
                            <input type="text" class="sim" id="cep" name="CEP" placeholder=" _____-___" data-slots="_"
                                required>
                            <span>CEP</span>
                        </div>

                        <div class="inputBox on">
                            <input type="text" class="sim" id="CPF" name="CPF" placeholder="___.___.___-__"
                                data-slots="_" required>
                            <span>CPF</span>
                        </div>

                        <div class="inputBox on">
                            <input type="text" class="sim" id="DataDeNascimento" name="DataDeNascimento"
                                placeholder="dd/mm/aaaa" data-slots="dma" required>
                            <span>Data de nascimento</span>
                        </div>

                      

                    </div>

                    <div class="input-group2">
                        <button type="button" class="fourth">Continuar</button>
                    </div>
                </div>

                <div class="form-box2 ">

                    <div class="form">

                        <div class="icone">
                            <a class="buy-btn">
                                <i class="fa-solid fa-arrow-left"></i>
                            </a>
                        </div>

                        <div class="inputBox on">
                            <input type="password" class="sim" id="senha" name="Senha" required>
                            <span>Senha</span>
                            <div id="icon" onclick="showHide()"></div>

                        </div>
                        <div class="inputBox on">
                            <input type="password" class="sim" id="ConfirmarSenha" name="ConfirmarSenha" required>
                            <span>Confirmar Senha</span>
                            <div id="icon2" onclick="showHide2()"></div>
                        </div>

                        <div class="inputBox on2">
                            <input type="text" class="sim" id="endereco" name="endereco" placeholder="CEP não inserido"
                                readonly required>
                            <span>Endereço</span>
                        </div>

                        <div class="inputBox on">
                            <input type="text" class="sim" id="complemento" name="complemento" required>
                            <span>Complemento</span>
                        </div>

                        <div class="inputBox on">
                            <input type="text" class="sim" id="Numero" name="Numero" placeholder="(__) _____-____"
                                data-slots="_" required>
                            <span>Numero</span>
                        </div>

                        <div class="inputBox on">
                            <input type="text" class="sim" id="DataDeVencimento" name="DataDeVencimento"
                                placeholder="dd/mm/aaaa" data-slots="dma" required>
                            <span>Data de Vencimento</span>
                        </div>

                        <div class="inputBox on recaptha">
                            <!-- class pro REcaptha--> <!-- chave principal--> <!-- chave principal-->
                           <!-- <div class="g-recaptcha" data-sitekey="6Lfxd2ImAAAAACHf0hLHUHwYWe4rWUI2V7D1m9VA"></div> -->

                            <script type="text/javascript">
                                function valida() {
                                    if (grecaptcha.getResponse() == "") {
                                        alert("Você precisa marcar a validação");
                                        return false; 
                                    }
                                }
                            </script> 

                            <!-- Validação do REcaptha -->

                            <?php
                            if (isset($_POST['enviar'])) {
                                //print_r($_POST);

                                if (!empty($_POST['g-recaptcha-response'])) {
                                    //Continuar o envio
                                    $url = "https://www.google.com/recaptcha/api/siteverify";
                                    //chave secreta
                                    $secret = "6Lfxd2ImAAAAAJhmclCtQo_b8zcvs1AW32AmBYgr";
                                    $response = $_POST['g-recaptcha-response'];
                                    $variaveis = "secret=" . $secret . "&response=" . $response;

                                    $ch = curl_init($url);
                                    curl_setopt($ch, CURLOPT_POST, 1);
                                    curl_setopt($ch, CURLOPT_POSTFIELDS, $variaveis);
                                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $resposta = curl_exec($ch);
                                    //print_r($resposta);
                                    $resultado = json_decode($resposta);
                                    //print_r($resultado);
                                    //echo $resultado->success;
                                    if ($resultado->success == 1) {
                                        echo "Continuar o envio do seu formulario";
                                    }
                                }
                            }

                            ?>
                        </div> 


                        <div class="input-group">
                            <button class="fourth" type="submit" onclick="return //valida()">Cadastrar</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- script de mudar de pagina-->

    <script>
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function () {
                if (btn.className === 'fourth') {
                    document.querySelector('.form-box2').classList.add('open');
                } else if (btn.className === 'buy-btn') {
                    document.querySelector('.form-box2').classList.remove('open');
                }
            });

        });

        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function () {
                if (btn.className === 'fourth') {
                    document.querySelector('.form-box').classList.add('open');
                } else if (btn.className === 'buy-btn') {
                    document.querySelector('.form-box').classList.remove('open');
                }
            });

        });

        document.querySelectorAll('a').forEach(btn => {
            btn.addEventListener('click', function () {
                if (btn.className === 'buy-btn') {
                    document.querySelector('.form-box').classList.remove('open');
                    document.querySelector('.form-box2').classList.remove('open');
                }
            });

        });
    </script>

    <!-- Senha -->

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

    <!-- Masks -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
                const pattern = el.getAttribute("placeholder"),
                    slots = new Set(el.dataset.slots || "_"),
                    prev = (j => Array.from(pattern, (c, i) => slots.has(c) ? j = i + 1 : j))(0),
                    first = [...pattern].findIndex(c => slots.has(c)),
                    accept = new RegExp(el.dataset.accept || "\\d", "g"),
                    clean = input => {
                        input = input.match(accept) || [];
                        return Array.from(pattern, c =>
                            input[0] === c || slots.has(c) ? input.shift() || c : c
                        );
                    },
                    format = () => {
                        const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
                            i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
                            return i < 0 ? prev[prev.length - 1] : back ? prev[i - 1] || first : i;
                        });
                        el.value = clean(el.value).join``;
                        el.setSelectionRange(i, j);
                        back = false;
                    };
                let back = false;
                el.addEventListener("keydown", (e) => back = e.key === "Backspace");
                el.addEventListener("input", format);
                el.addEventListener("focus", format);
                el.addEventListener("blur", () => el.value === pattern && (el.value = ""));
            }
        });
    </script>

    <!-- Tamanho do reptha-->

    <script>
        function scaleCaptcha(elementWidth) {
            // Width of the reCAPTCHA element, in pixels
            var reCaptchaWidth = 300;
            // Get the containing element's width
            var containerWidth = $('recaptha').width();

            // Only scale the reCAPTCHA if it won't fit
            // inside the container
            if (reCaptchaWidth > containerWidth) {
                // Calculate the scale
                var captchaScale = containerWidth / reCaptchaWidth;
                // Apply the transformation
                $('.g-recaptcha').css({
                    'transform': 'scale(' + captchaScale + ')'
                });
            }
        }

        $(function () {

            // Initialize scaling
            scaleCaptcha();

            // Update scaling on window resize
            // Uses jQuery throttle plugin to limit strain on the browser
            $(window).resize($.throttle(100, scaleCaptcha));

        });
    </script>

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
                            } else {
                                $("#endereco").val("Seu CEP não foi encontrado")
                            }
                        });
                    } else {
                        $("#endereco").val("Seu CEP é inválido");
                    }
                } else {
                    limpa_formulário_cep();
                }
            });
        });
    </script>

    <script>
        var btn1 = document.querySelector("#ocultar");
        btn1.addEventListener("click", function () {
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
