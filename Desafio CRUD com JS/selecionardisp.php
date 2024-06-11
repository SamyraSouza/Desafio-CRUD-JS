<?php 


header('Content-Type> application/json');

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$stmt = $pdo->prepare('select * from livros join categoria on categoria.id = livros.idCategoria where ISBN not in (SELECT ISBN_liv from emprestimo)');

$stmt->execute();

if($stmt->rowCount() >= 1){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

}else{
    echo json_encode('error');
}

?>