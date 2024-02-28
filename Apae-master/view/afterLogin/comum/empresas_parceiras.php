<?php
    session_start();
    if(!isset($_SESSION['user'])) {
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="../../view/style/comum.css">

    <title>Apae Guarulhos</title>


</head>

<body>
<?php require_once __DIR__.'/../../components/sidebarComum.php';?>

    <div style="background-color: #fff;">
        <div class="container py-4 g-5">
            <div class="text-start">
                <h1 class="fs-1">Empresas Parceiras</h1>
            </div>

            <div class="row row-cols-1 row-cols-md-4">
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Alumi S&A Kit Box e Ferragens
                            </h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/AlumiSA.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Mais Amiga, desde 2021</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Andra</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/Andra.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Mais Parceira APAE Guarulhos, desde 2016</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Aqia Química Industrial
                            </h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/AQIA.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Mais Amiga, desde 2020</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Damapel</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/Damapel.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Fornecedor de PHs</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Depósito da Praça</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/DepositoDaPracaParaventi.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Parceira do Sócio Contribuinte APAE Guarulhos, desde 2018</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Grupo Quero Trabalhar</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/QueroTrabalhar.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Parceiro apoiador da APAE Guarulhos, desde 2022</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Grupo WMB
                            </h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/WMB.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Parceira do Sócio Contribuinte APAE Guarulhos, desde 2018</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">GTN Auto Peças</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/GTNAutoPecas.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Parceiro nos eventos da APAE Guarulhos</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Instituto Adimax</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/InstitutoAdimax.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Mais Amiga, desde 2023</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">NR Monitoramentos
                            </h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/NRMonitoramentos.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Parceira do Sócio Contribuinte APAE Guarulhos, desde 2018</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Tambor-Line
                            </h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/Tambor-Line.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa Mais Amiga, desde 2021</div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card border-primary h-100" style="justify-content: center;">
                        <div class="card-header bg-transparent border-primary text-center mt-2">
                            <h5 class="fw-bold">Tenda Atacado</h5>
                        </div>
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                            <img src="../../view/assets/TendaAtacado.jpg"
                                class="img-fluid">
                        </div>
                        <div class="card-footer bg-transparent border-primary">Empresa parceira na campanha "Troco Generoso"</div>
                    </div>
                </div>

                <?php 
                    foreach($allUsers as $companie):
                        echo "    <div class='col mb-3'>
                        <div class='card border-primary h-100' style='justify-content: center;'>
                            <div class='card-header bg-transparent border-primary text-center mt-2'>
                                <h5 class='fw-bold'>$companie[nome]
                                </h5>
                            </div>
                            <div class='card-body d-flex flex-wrap align-items-center justify-content-center'>
                                <img src='../$companie[image]'
                                    class='img-fluid'>
                            </div>
                            <div class='card-footer bg-transparent border-primary'>$companie[ramoAtiv]</div>
                        </div>
                    </div>";

                    endforeach;
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once __DIR__.'/../../components/footer.html';?>

    <!-- Scrollavel -->
    <script>
        window.sr = ScrollReveal({ reset: true });

        sr.reveal('.scroll_1', { duration: 1000 });
        sr.reveal('.scroll_2', { duration: 1000 });
    </script>
</body>

</html>