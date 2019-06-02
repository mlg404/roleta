<?php 
  include("config.php");
  $return_arr = array();
  $sql = $pdo->query("SELECT id,nome,resultado FROM jogos ORDER BY id DESC");
  $sql->execute();
  while($dados = $sql->fetch(PDO::FETCH_ASSOC)){
    $row_array['id'] = $dados['id'];
    $row_array['nome'] = $dados['nome'];
    $row_array['resultado'] = $dados['resultado'];
    $row_array['hash'] = md5($dados['resultado']);
    array_push($return_arr,$row_array);
  }
  echo json_encode($return_arr);
?>
