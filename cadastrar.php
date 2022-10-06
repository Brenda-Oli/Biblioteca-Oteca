<?php

$conn = new PDO("mysql:dbname=bibliotecaoteca;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tboteca(titulo, escritor, editora) VALUES (:TITULO, :ESCRITOR, :EDITORA)");

$stmt->bindParam(":TITULO", $titulo);
$stmt->bindParam(":ESCRITOR", $escritor);
$stmt->bindParam(":EDITORA", $editora);

$titulo = $_POST['ftitulo'];
$escritor = $_POST['fescritor'];
$editora = $_POST['feditora'];

$stmt->execute();

echo "Cadastro Concluído!";

?>