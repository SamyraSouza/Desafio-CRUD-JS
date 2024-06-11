<?php 

$email = $_POST['email'];

header('Content-Type> application/json');

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$stmt = $pdo->prepare('select * from cliente where email = :em ');

$stmt->bindValue(':em', $email);

$stmt->execute();

if($stmt->rowCount() >= 1){

    echo json_encode('error');

}
else{
    echo json_encode('success');
}
?>