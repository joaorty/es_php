<?php

class BD{
  $usuario = 'root';
  $senha = '';
  $bd = 'tarefas';
  $host = 'localhost';

  public static function conectar() {
    $mysqli = new mysqli($host, $usuario, $senha, $bd);

    if($mysqli->error) {
      die("Falha ao conectar");
    }
  }
}