<?php
    session_start();
    if(!isset($_SESSION['user'])|| $_SESSION['user']['nivel'] != "comum") {
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


    <link rel="stylesheet" href="../../view/style/tela_doacao.css">
    
    <title>Doação</title>

</head>

<body>

<!-- Navbar -->
<?php require_once __DIR__.'/../../components/sidebarComum.php'?>

    <div style="text-align:center; padding-top:30px;">
        <p class="fs-2 mb-0">Doações</p>
        <p class="text-decoration-none text-black-50">Ajude-nos contribuindo com a sua doação</p>
    </div>

    <br>

    <div class="conteiner_card" style="background-color: #ebebeb;">

        <div class="cards">

            <section class="card shop">
                <div class="imagem_doação">
                    <img src="https://apaegarca.org.br/wp-content/uploads/2021/02/cropped-logo-1.png" alt="Shop here.">
                </div>
                <p class="fs-5 mb-3">Doação Mensal</p>
                <p class="preço1 text-decoration-none text-black-50"><sup>R$</sup>10,<sub>00</sub></p>
                <p class="text-decoration-none text-black-40">Doe R$10,00 e faça a diferença </p>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exemplo1">Doar agora</button>
                <!-- Popup -->
                <div class="modal fade" id="exemplo1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Pague com QR code</h5>
                            </div>
                            <div class="modal-body">
                                <img src="../../view/assets/qr_template.png" class="img-fluid">
                                <div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card shop">
                <div class="imagem_doação">
                    <img src="https://apaegarca.org.br/wp-content/uploads/2021/02/cropped-logo-1.png" alt="Shop here.">
                </div>
                <p class="fs-5 mb-3">Doação Semestral</p>
                <p class="preço1 text-decoration-none text-black-50"><sup>R$</sup>60,<sub>00</sub></p>
                <p class="text-decoration-none text-black-40">Doe R$60,00 e faça a diferença </p>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exemplo1">Doar agora</button>
                <!-- Popup -->
                <div class="modal fade" id="exemplo1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Pague com QR code</h5>
                            </div>
                            <div class="modal-body">
                            <img src="../../view/assets/qr_template.png" class="img-fluid">
                                <div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cards">

            <section class="card shop">
                <div class="imagem_doação">
                    <img src="https://apaegarca.org.br/wp-content/uploads/2021/02/cropped-logo-1.png" alt="Shop here.">
                </div>
                <p class="fs-5 mb-3">Doação Anual</p>
                <p class="preço1 text-decoration-none text-black-50"><sup>R$</sup>120,<sub>00</sub></p>
                <p class="text-decoration-none text-black-40">Doe R$120,00 e faça a diferença </p>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exemplo1">Doar agora</button>
                <!-- Popup -->
                <div class="modal fade" id="exemplo1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Pague com QR code</h5>
                            </div>
                            <div class="modal-body">
                            <img src="../../view/assets/qr_template.png" class="img-fluid">
                                <div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="card shop">
                <div class="imagem_doação">
                    <img src="https://apaegarca.org.br/wp-content/uploads/2021/02/cropped-logo-1.png" alt="Shop here.">
                </div>
                <p class="fs-5 mb-3">Doação Amigo10</p>
                <p class="preço1 text-decoration-none text-black-50"><sup>R$</sup>XX,<sub>00</sub></p>
                <p class="text-decoration-none text-black-40">Doe qualquer quantia e faça a diferença</p>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exemplo1">Doar
                    agora</button>
                <!-- Popup -->
                <div class="modal fade" id="exemplo1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Pague com QR code</h5>
                            </div>
                            <div class="modal-body">
                            <img src="../../view/assets/qr_template.png" class="img-fluid">
                                <div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>



    <div class="container_text ">
        <div class="texto_inicial">
            <div class="texto1">
                <h1 class="fs-2 mb-0">Faça a diferença!</h1>
                <br>
                <p class="text-decoration-none text-black-10">Faça a diferença na vida das pessoas
                    através da sua doação. Quando você compartilha dinheiro, está ajudando de forma importante. Essas
                    pessoas precisam de recursos especiais, como equipamentos adaptados e terapias, para viver uma vida
                    completa e inclusiva. Sua generosidade pode transformar vidas e inspirar outras pessoas a fazerem o
                    mesmo. Juntos, podemos criar um mundo onde todos são valorizados e têm a oportunidade de alcançar
                    seu potencial máximo.</p>
            </div>
        </div>
        <div class="imagem1">
            <img src="https://img.freepik.com/vetores-premium/caridade-e-doacao-de-dinheiro-as-pessoas-estao-colocando-dinheiro-na-caixa-de-doacoes-mulheres-jogam-moedas-de-ouro-e-coracao-em-uma-caixa-para-doacoes-doacao-e-conceito-de-financiamento-ilustracao-vetorial-em-estilo-simples_7737-2220.jpg"
                alt="">
        </div>
    </div>

    <!-- Footer -->
    <?php require_once __DIR__.'/../../components/footer.html'?>

</body>

</html>