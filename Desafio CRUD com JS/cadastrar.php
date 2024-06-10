<?php 

header('Content-Type> application/json');

$nome = $_POST['nome'];
$email = $_POST['email'];
$contato = $_POST['contato'];
$senha = $_POST['senha'];

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$stmt = $pdo->prepare('insert into cliente (Nome, email, Contato, senha) values (:no, :em, :tel, :sen)');

$stmt->bindValue(':no', $nome);
$stmt->bindValue(':em', $email);
$stmt->bindValue(':tel', $contato);
$stmt->bindValue(':sen', $senha);

$stmt->execute();

if($stmt->rowCount() >= 1){

    echo json_encode('success');

}else{

    echo json_encode('error');

}

?>