<?php
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
    <link rel="stylesheet" href="../../view/style/comum.css">

    <title>Apae Guarulhos</title>

    <style>
        .thumbnail {
            position: relative;
            display: inline-block;
        }

        .nome {
            position: absolute;
            top: 19%;
            left: 18%;
            text-align: start;
            width: 60%;
            color: #24376b;
            font-weight: 500;
            font-size: 3vw;
        }

        .cpf {
            position: absolute;
            top: 45%;
            left: 26.5%;
            text-align: start;
            color: #6d7ca1;
            font-weight: 500;
            font-size: 2vw;
        }

        .data_nasc {
            position: absolute;
            top: 54%;
            left: 36%;
            text-align: start;
            color: #6d7ca1;
            font-weight: 500;
            font-size: 2vw;
        }

        .cadastro {
            position: absolute;
            top: 63%;
            left: 45%;
            text-align: start;
            color: #6d7ca1;
            font-weight: 500;
            font-size: 2vw;
        }

    </style>

</head>

<body>
<?php require_once __DIR__.'/../../components/sidebarComum.php';?>

    <div style="background-color: #eee;">
        <div class="container py-5 scroll_meus_dados">
            <div class="thumbnail text-center">
                <img src="../../view/assets/cardUser.png" alt="" class="w-75">
                <div>
                    <p class="nome fw-bold"><?=$_SESSION['user']['nome']?></p>
                    <p class="cpf"><?=$_SESSION['user']['cpf']?></p>
                    <p class="data_nasc"><?=$_SESSION['user']['data_nasc']?></p>
                    <p class="cadastro"><?=$_SESSION['user']['data_cadastro']?></p>
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

</body>

</html>
