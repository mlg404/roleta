<?php
  include("./config.php");
  $nome = $_POST["nome"];
  $resultado = rand(1,10);
  if ($nome == '' || $nome == null){
    $nome = "Anônimo";
  }
  $sql = "INSERT INTO jogos (nome,resultado) VALUES (:nome,:resultado)";
  $sql = $pdo->prepare($sql);
  $sql->bindParam(':nome', $nome);
  $sql->bindParam(':resultado', $resultado);
  $sql->execute();

  if($sql){
    $resposta = array('nome' => $nome, 'resultado' => $resultado);
    echo $resposta['resultado'] - 1;
  }

 ?>
