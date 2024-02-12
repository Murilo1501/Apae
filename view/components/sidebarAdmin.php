<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #2c9ada;">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="../../view/assets//logoNA.png" style="width: 120px; height:60px; margin-top: 5px; margin-left: 5px">
        </a>

        <button class="btn btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="sidebar">
            <i class="bi bi-justify"></i>
        </button>
        <!--
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end w-auto" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Teste1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teste2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teste3</a>
                    </li>
                </ul>
            </div>
        -->
    </div>
</nav>

<div class="offcanvas offcanvas-start shadow-lg" tabindex="-1" id="sidebar" aria-labelledby="offcanvas">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="offcanvas">APAE</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav-links list-unstyled">
            <li>
                <a href="/apae/Apae-master/admin/home/">
                    <i class="bi bi-pie-chart"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <!-- Cadastros collapse -->
            <li data-bs-toggle="collapse" data-bs-target="#cadastros" aria-expanded="false"
                aria-controls="multiCollapse">
                <a href="#">
                    <i class="bi bi-clipboard-plus"></i>
                    <span class="title">Cadastros</span>
                </a>
            </li>
            <div class="collapse multi-collapse" id="cadastros">
                <div class="card card-body">
                    <li class="">
                        <a href="/apae/Apae-master/admin/form/">
                            <i class="bi bi-gear"></i>
                            <span class="title">Administradores</span>
                        </a>
                    </li>
                    <li>
                        <a href="/apae/Apae-master/admin/companiesForm/">
                            <i class="bi bi-building"></i>
                            <span class="title">Empresas Parceiras</span>
                        </a>
                    </li>
                    <li>
                        <a href="/apae/Apae-master/admin/eventsForm/">
                            <i class='bx bx-news'></i>
                            <span class="title">Eventos</span>
                        </a>

                    <!-- <li>
                        <a href="../admin/cadastro_produtos.php">
                            <i class='bx bx-shopping-bag'></i>
                            <span class="title">Produtos</span>
                        </a>
                    </li> -->
                </div>
            </div>

            <!-- Listas collapse -->
            <li data-bs-toggle="collapse" data-bs-target="#listas" aria-expanded="false"
                aria-controls="multiCollapse">
                <a href="#">
                    <i class="bi bi-table"></i>
                    <span class="title">Listas</span>
                </a>
            </li>
            <div class="collapse multi-collapse" id="listas">
                <div class="card card-body">
                    <li>
                        <a href="/apae/Apae-master/admin/users/">
                            <i class="bi bi-people"></i>
                            <span class="title">Usuários</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="../admin/lista_produtos.php">
                            <i class='bx bx-shopping-bag'></i>
                            <span class="title">Produtos</span>
                        </a>
                    </li> -->
                </div>
            </div>
        </ul>

        <!-- Usuario dropdown -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle dropup"
                id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../view/assets/user.png" alt="" width="32" height="32" class="me-2">
                <strong><?=$_SESSION['user']['email']?></strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
                <li><a class="dropdown-item" href="/apae/Apae-master/admin/card/">Carteira</a></li>
                <li><a class="dropdown-item" href="/apae/Apae-master/admin/profile/">Meus Dados</a></li>
                <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item text-danger" href="/apae/Apae-master/routes/logout.php">Sair</a></li>
            </ul>
        </div>

    </div>
</div>