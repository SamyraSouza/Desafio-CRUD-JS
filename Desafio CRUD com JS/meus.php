<?php 


header('Content-Type> application/json');

$email = $_POST['pessoa'];

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$pegarid = $pdo->prepare('select id from cliente where email = "'.$email.'"');

$pegarid->execute();

$id = $pegarid->fetchAll(PDO::FETCH_ASSOC);

$ids = $id[0];

$i = $ids['id'];

$stmt = $pdo->prepare('select livros.*, autores.Nome, categoria.Nomes, emprestimo.dataDevo from livros join autorlivro on livros.ISBN = autorlivro.ISBN_livro join autores on autores.id=autorlivro.idAutor join categoria on categoria.id=livros.idCategoria join emprestimo on emprestimo.ISBN_liv=livros.ISBN where emprestimo.idCliente='.$i);

$stmt->execute();


if($stmt->rowCount() >= 1){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

}else{
    echo json_encode('error');
}

?>