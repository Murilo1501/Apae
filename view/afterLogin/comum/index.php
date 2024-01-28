<?php
    if(!isset($_SESSION['user']) || $_SESSION['user']['nivel'] != "comum") {
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
    <link rel="stylesheet" href="../../view/style/parceiros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Apae Guarulhos</title>
    <style>
        body,
        html {
            height: 100%;
        }

        .parallax {
            /* The image used */
            background-image: url('../../images/imagem_parallax.png');

            /* Full height */
            height: 100%;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body>

    <?php require_once __DIR__.'/../../components/sidebarComum.php'?>

    <!-- Banner -->
    <div class="container_text" style="background-color: #fffffe;">
        <div class="texto_inicial scroll_1 col-md-8">
            <div class="ms-2 me-2">
                <h1 class="fw-bold mb-0" style="color: #ffcd17">Associação de Pais e Amigos dos Excepcionais Guarulhos
                </h1>
                <br>
                <p class="text-decoration-none text-black-10">1° de Julho de 1979 por um grupo de voluntários,
                    professores e pais, sem fins
                    lucrativos, com o intuito de promover a atenção integral às pessoas com deficiência
                    intelectual e múltipla.</p>
                <a href="../comum/tela_doacao.php" role="button"
                    class="btn btn-outline-warning px-4 me-sm-3 fw-bold mb-3">Contribuir</a>
            </div>
        </div>
        <div>
            <img src="../../view/assets/imagemIndex-modified.png" style="width: 90% ;border-radius: 15px" class="float-end img-fluid scroll_1">
        </div>
    </div>

    <!-- texto -->
    <div class="container_text" style="background-color: #f1f8ff;">
        <div class="texto_inicial scroll_1">
            <div class="ms-2">
                <h1 class="fw-bold mb-0" style="color: #164b84">Por que continuar colaborando com a APAE Guarulhos?</h1>
                <br>
                <p class="text-decoration-none text-black-10">Continue apoiando o programa Amigo 10 e faça a
                    diferença
                    na vida dos excepcionais. Sua colaboração oferece recursos, oportunidades e serviços
                    essenciais para promover uma vida mais inclusiva. Juntos, construímos um mundo mais igualitário.</p>
            </div>
        </div>
        <div>
            <img src="../../view/assets/donate.png" class="img-fluid scroll_1">
        </div>
    </div>

    <!-- Missão, Visão & Valores -->
    <div>
        <div class="container align-items-end py-4">
            <div class="row row-cols-1 row-cols-md-3 g-4 scroll_1">
                <div class="col pe-2 ps-2">
                    <div class="card h-100 card-shadow" style="border: none;">
                        <img src="../../view/assets/telescope.png" class="card-img-top mx-auto d-block w-25 mt-3">
                        <div class="card-body">
                            <h3 class="card-title text-center">Missão</h3>
                            <p class="card-text text-center">Ser referência em atendimento na cidade, buscando a
                                integração à sociedade desta população.</p>
                        </div>
                    </div>
                </div>
                <div class="col pe-2 ps-2">
                    <div class="card h-100 card-shadow" style="border: none;">
                        <img src="../../view/assets/target.png" class="card-img-top mx-auto d-block w-25 mt-3" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Visão</h3>
                            <p class="card-text text-center">Promover e articular ações de defesa de direitos e
                                prevenção,
                                orientações, prestação de serviços, apoio à família, direcionadas à melhoria de
                                qualidade de vida da pessoa com deficiência e a construção de uma sociedade justa e
                                solidária.</p>
                        </div>
                    </div>
                </div>
                <div class="col pe-2 ps-2">
                    <div class="card h-100 card-shadow" style="border: none;">
                        <img src="../../view/assets/receive.png" class="card-img-top mx-auto d-block w-25 mt-3" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Valores</h3>
                            <p class="card-text text-center">Busca Constante da Excelência nos Serviços;
                                Comprometimento com a Causa;
                                Ética nas Relações e no Exercício das Atividades;
                                Promoção do Exercício da Cidadania;
                                Respeito as Diversidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #f0f0f0">
        <div class="container py-4">
            <div class="texto_parceiro">
                <p class="fs-2 mb-0" style="color: #164b84">Empresas Parceiras</p>
                <p class="text-decoration-none text-black-50">Veja algumas de nossas empresas parceiras</p>
            </div>
        </div>

        <div class="containerEmpresas scroll_2">

            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <ul class="carousel">
                    <li class="card">
                        <div class="img"><img src="../../view/assets/AlumiSA.jpg" alt="img" draggable="false"></div>
                        <h2>Alumi S&A Kit Box e Ferragens</h2>
                        <span>Empresa Mais Amiga, desde 2021.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="../../view/assets/GTNAutoPecas.jpg" alt="img" draggable="false"></div>
                        <h2>GTN Auto Peças</h2>
                        <span>Parceiro nos eventos da APAE Guarulhos.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="../../view/assets/Damapel.jpg" alt="img" draggable="false"></div>
                        <h2>Damapel</h2>
                        <span>Fornecedor de PHs.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="../../view/assets/Tambor-Line.jpg" alt="img" draggable="false"></div>
                        <h2>Tambor-Line</h2>
                        <span>Empresa Mais Amiga, desde 2021.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="../../view/assets/WMB.jpg" alt="img" draggable="false"></div>
                        <h2>Grupo WMB</h2>
                        <span> Sócio Contribuinte APAE Guarulhos, desde 2018.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="../../view/assets/NRMonitoramentos.jpg" img" draggable="false"></div>
                        <h2>NR Monitoramentos</h2>
                        <span>Sócio Contribuinte APAE Guarulhos, desde 2018.</span>
                    </li>
                </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>

        </div>

    </div>

        <!-- Últimas Notícias -->
        <div style="background-color: #fff;">
            <div class="container py-4">
                <div class="text-center scroll_2">
                    <p class="fs-2 mb-0" style="color: #164b84">Eventos & Notícias</p>
                    <a href="noticias.php" class="text-black-50">Veja mais eventos e notícias clicando aqui</a>
                </div>
                <div class="row g-4 mt-1 mb-1 scroll_3">
                    <?php
                        foreach ($eventList as $dados) {
                           // echo $dados['nome'];
                            if($dados['tipo'] == "evento"){
                                echo " <div class='col-sm-6'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='card-title fw-bold mb-0'>$dados[titulo]<i class='bi bi-calendar-event ms-2'></i>
                                        </h5>
                                        <span class='mt-0 mb-0 text-muted small'>".date("d/m/Y",strtotime($dados['inicio']))."</span>
                                        <p class='card-text mt-1'>".$dados['texto']."</p>
            
                                        <button type='button' class='btn btn-sm btn-outline-primary' data-bs-toggle='modal'
                                            data-bs-target='#noticia".$dados['id']."'>
                                            Ler mais<i class='bi bi-arrow-right ms-1'></i> </button>
            
                                        <div class='modal fade' id='noticia".$dados['id']."' tabindex='-1' aria-hidden='true'>
                                            <div class='modal-dialog modal-dialog-scrollable modal-xl'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title fs-3'>$dados[titulo]</h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal'
                                                            aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    $dados[texto] </div>
                                                    <div class='modal-footer'>
                                                        <p class='text-black-50'>".date("d/m/Y",strtotime($dados['termino']))."</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
            
                                    </div>
                                </div>
                            </div>";
                            } else {
                                echo "   <div class='col-sm-6'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='card-title fw-bold mb-0'>".$dados['titulo']."<i class='bi bi-newspaper ms-2'></i>
                                        </h5>
                                        <span class='mt-0 mb-0 text-muted small'>".date("d/m/Y",strtotime($dados['inicio']))."</span>
                                        <p class='card-text mt-1'>".$dados['texto']."</p>
            
                                        <button type='button' class='btn btn-sm btn-outline-primary' data-bs-toggle='modal'
                                            data-bs-target='#noticia".$dados['id']."'>
                                            Ler mais<i class='bi bi-arrow-right ms-1'></i> </button>
            
                                        <div class='modal fade' id='noticia".$dados['id']."' tabindex='-1' aria-hidden='true'>
                                            <div class='modal-dialog modal-dialog-scrollable modal-xl'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title fs-3'>".$dados['titulo']." </h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal'
                                                            aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>".
                                                        $dados['texto']." </div>
                                                    <div class='modal-footer'>
                                                        <p class='text-black-50'>".date("d/m/Y",strtotime($dados['termino']))."</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            }
                        }
                    ?>

                </div>
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
        sr.reveal('.scroll_3', { duration: 1000 });
    </script>
</body>

<!-- Carrossel -->

<script>
    const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".carousel");
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const carouselChildrens = [...carousel.children];
    let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;
    // Get the number of cards that can fit in the carousel at once
    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);
    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });
    // Insert copies of the first few cards to end of carousel for infinite scrolling
    carouselChildrens.slice(0, cardPerView).forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });
    // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");
    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
        });
    });
    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        // Records the initial cursor and scroll position of the carousel
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }
    const dragging = (e) => {
        if (!isDragging) return; // if isDragging is false return from here
        // Updates the scroll position of the carousel based on the cursor movement
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }
    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    }
    const infiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if (carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }
        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
        clearTimeout(timeoutId);
        if (!wrapper.matches(":hover")) autoPlay();
    }
    const autoPlay = () => {
        if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
        // Autoplay the carousel after every 2500 ms
        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }
    autoPlay();
    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);
</script>


</html>
