<?php

$conn = new PDO("mysql:dbname=bibliotecaoteca;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tboteca SET titulo = :TITULO, escritor = :ESCRITOR, editora = :EDITORA WHERE idregistro = :ID");

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":TITULO", $titulo);
$stmt->bindParam(":ESCRITOR", $escritor);
$stmt->bindParam(":EDITORA", $editora);

$id = $_POST['fid'];
$titulo = $_POST['ftitulo'];
$escritor = $_POST['fescritor'];
$editora = $_POST['feditora'];

$stmt->execute();

echo "Alteração Concluída!";
?>