<?php

    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user']['nivel'] != "admin") {
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="../../view/style/admin.css">

    <title>Apae Guarulhos</title>
    <style>
        .chart_size {
            width: 100%;
        }
    </style>
</head>

<body>
<?php require_once __DIR__.'/../../components/sidebarAdmin.php'?>


    <div style="background-color: #f9f9f9;">
        <div class="container py-4 px-4">
            <h1 class="fs-1">Dashboard</h1>

            <div class="row">
                <div class="col-md-6 scroll_1">
                    <div class="container-fluid p-3 mb-2 bg-white shadow-sm">
                        <div>
                            <h2 class="text-center">Usuários Ativos e Inativos</h2>
                            <canvas id="doughnut"></canvas>
                        </div>
                        <script>
                            const doughnut = document.getElementById('doughnut');

                            new Chart(doughnut, {
                                type: 'doughnut',
                                data: {
                                    labels: [
                                        'Ativos',
                                        'Inativos',
                                    ],
                                    datasets: [{
                                        label: '',
                                        data: [<?=$data['ativos']?>, <?=$data['inativos']?>,],
                                        backgroundColor: [
                                            'rgb(77, 224, 61)',
                                            'rgb(224, 61, 61)',
                                        ],
                                        hoverOffset: 4
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            display: false
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>

                <div class="col-md-6 scroll_1">
                    <div class="container-fluid p-3 mb-2 bg-white shadow-sm">
                        <div>
                            <h2 class="text-center">Usuários Cadastrados</h2>
                            <canvas id="pizza"></canvas>
                        </div>
                        <script>
                            const pizza = document.getElementById('pizza');

                            new Chart(pizza, {
                                type: 'pie',
                                data: {
                                    labels: [
                                        'Administradores',
                                        'Empresas Parceiras',
                                        'Usuários Comuns'
                                    ],
                                    datasets: [{
                                        label: '',
                                        data: [<?=$data['admin']?>, <?=$data['empresas']?>, <?=$data['comum']?>],
                                        backgroundColor: [
                                            'rgb(224, 61, 61)',
                                            'rgb(224, 197, 61)',
                                            'rgb(61, 113, 224)'
                                        ],
                                        hoverOffset: 4
                                    }]
                                },
                                options: {
                                    maintainAspectRatio: true,
                                    scales: {
                                        y: {
                                            display: false
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>


                <div class="container-fluid p-3 mb-2 bg-white shadow-sm scroll_1">
                    <div>
                        <h2 class="text-center">Eventos e Notícias cadastrados</h2>
                        <canvas id="bar"></canvas>
                    </div>
                    <script>
                        const bar = document.getElementById('bar');

                        new Chart(bar, {

                            type: 'bar',
                            data: {
                                labels: ['Eventos', 'Notícias'],
                                datasets: [{
                                    label: '',
                                    data: [<?=$data['eventos']?>, <?=$data['noticias']?>, /*<?=$data['produtos']?>*/],
                                    barThickness: 65,
                                    backgroundColor: [
                                        'rgb(61, 170, 224)',
                                        'rgb(61, 80, 224)',
                                        'rgb(126, 61, 224)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            precision: 0
                                        }
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php require_once __DIR__.'/../../components/footer.html'?>

        <!-- Scrollavel -->
        <script>
            window.sr = ScrollReveal({ reset: true });

            sr.reveal('.scroll_1', { duration: 1000 });
            sr.reveal('.scroll_2', { duration: 1000 });
        </script>
</body>

</html>
