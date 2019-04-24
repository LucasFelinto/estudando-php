<?php include './config/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>crud</title>
</head>
<body>
  <h1>Login</h1>
  <form action="./config/autenticar.php" method="POST">
    <input type="text" placeholder="e-mail" name="email">
    <input type="password" placeholder="senha" name="senha">
    <input type="submit">
  </form>
  <hr>
  <h1>Cadastro</h1>
  <form action="registrar.php" method="POST">
    <?php echo $_GET['menssagem'] ?>
    <input type="text" placeholder="Nome" name="nome">
    <input type="number" placeholder="Telefone" name="telefone">
    <input type="text" placeholder="Cidade" name="cidade">
    <input type="text" placeholder="Bairro" name="bairro">
    <input type="email" placeholder="E-mail" name="email">
    <input type="password" placeholer="senha" name="senha">
    <input type="password" placeholder="Confirmar senha" name="confSenha">
    <input type="submit">
  </form>
</body>
</html>