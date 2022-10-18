<?php
require_once "usuario.class.php";

$usr = new Usuario();

if(isset($_POST['Entrar']))
  $usr->logar($_POST);
elseif (isset($_POST['Cadastrar']))
  $usr->cadastrar($_POST)
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div>
    <h1>Login</h1>
    <form action="" method="post">
      <p>
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario">
      </p>
      <p>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
      </p>
      <p>
        <input type="submit" value="Cadastrar">
        <input type="submit" value="Entrar">
      </p>
    </form>
  </div>
</body>
</html>