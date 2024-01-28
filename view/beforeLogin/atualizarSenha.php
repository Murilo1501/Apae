<?php
$email = filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/style/redefinirSenha.css">
  <title>Document</title>
</head>

<body>

  <div class="caixa_01">
    <div class="img_01">
      <img src="../view//assets/Apae_logo.png" alt="">
    </div>
    <br>
    <form class="redefinir" action="/newApae/esqueceuSenha/update/" method="post">
      <h3 style="text-align:center;">Alterar Senha</h3>
      <p style="color: grey; padding: 10px; font-size: 18px; text-align: center;">Insira a nova senha,tendo no mínimo 8 caracteres,uma letra maiúscula e um número</p>
      <div class="inputBox">
        <input type="password" id="Email" required="required" name="senha">
        <span>Senha</span>
        <input type="hidden" name="email" value="<?=$user['email']?>">

      </div>
      <div class="input-group2">
        <button class="fourth">Enviar</button>
      </div>
    </form>

    <div style="display: flex; flex-direction: column; gap: 10px; justify-content: center; align-items: center;">

      <div class="outros">
        <hr style="width: 100px;">
        <p style="padding-left: 10px; padding-right: 10px;">Ou</p>
        <hr style="width: 100px;">
      </div>

      
        <a href="/newApae/login/" style="text-decoration: none; ">Voltar</a>
      
    </div>


</body>

</html>
