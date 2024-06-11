<?php 

header('Content-Type> application/json');

$email = $_POST['pessoa'];
$livro = $_POST['livro'];

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$pegarid = $pdo->prepare('select id from cliente where email = "'.$email.'"');

$pegarid->execute();

$id = $pegarid->fetchAll(PDO::FETCH_ASSOC);

$ids = $id[0];

$i = $ids['id'];

$stmt = $pdo->prepare('insert into requerimento (pessoa, livro) values ("'.$i.'"'.',"'.$livro.'")');


$stmt->execute();


if($stmt->rowCount() >= 1){
  
    echo json_encode('success');

}else{

    echo json_encode('error');

}
?>