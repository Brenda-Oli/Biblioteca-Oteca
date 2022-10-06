<?php

$conn = new PDO("mysql:dbname=bibliotecaoteca;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tboteca WHERE idregistro = :ID");

$stmt->bindParam(":ID", $id);

$id = $_POST['fid'];
//$id = 13;
$stmt->execute();

echo "Dados deletados!";

?>