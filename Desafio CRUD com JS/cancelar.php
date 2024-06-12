<?php 


header('Content-Type> application/json');

$livro = $_POST['livro'];

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$stmt = $pdo->prepare('delete from requerimento where livro = "'.$livro.'"');

$stmt->execute();

   echo json_encode('success');
?>