<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <button type="button" data-bs-toggle="modal" data-bs-target="#card">Ativar</button>

    <div class="modal" id="card" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>
                        Carteira - Empresa
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="thumbnail text-center">
                        <img src="../../view/assets/cardUser.png" alt="" class="w-100">
                        <div>
                            <!-- Coloque os dados PHP aqui -->
                            <!-- <p class="nome_empresa fw-bold">' . $dados['nome'] . '</p>
                            <p class="ramo">' . $dados['ramoAtiv'] . '</p>
                            <p class="cadastro_empresa">' . $dados['data_cadastro'] . '</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
