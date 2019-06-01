<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=roleta', 'root', '');
} catch (PDOException $e){
  echo "Erro: ". $e->getMessage();
}
 ?>
