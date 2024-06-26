<?php 

header('Content-Type> application/json');

$pdo = new PDO('mysql:host=localhost; dbname=livraria;','root', '1234');

$stmt = $pdo->prepare('select livros.*, autores.Nome, categoria.Nomes, emprestimo.dataDevo from livros join autorlivro on livros.ISBN = autorlivro.ISBN_livro join autores on autores.id=autorlivro.idAutor join categoria on categoria.id=livros.idCategoria join emprestimo on emprestimo.ISBN_liv=livros.ISBN where ISBN in (SELECT ISBN_liv from emprestimo)');

$stmt->execute();

if($stmt->rowCount() >= 1){

    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

}else{
    echo json_encode('error');
}

?>