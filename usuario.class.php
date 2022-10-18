<?php 
require_once "bd.class.php";

class Usuario {
  $nome;
  $senha;
  $tarefas; 

  function logar($dados) {
    $nome = $dados['usuario'];
    $senha = $dados['senha'];
    bd::conectar();
    $consulta = bd::consulta($nome, $senha);
    if($consulta->$row_count) {
      session_start();
      $row = $consulta->fetch();
      $_SESSION['usuario'] = $row['nome'];
      header("Location: index.php");

    } else
      header("Location: login.php");
      
  }

  function cadastrar($dados) {
    $nome = $dados['usuario'];
    $senha = $dados['senha'];
    if(bd::consulta($nome, $senha)) {
      echo "Usuário já existente no banco de dados";
    }
  }
}
