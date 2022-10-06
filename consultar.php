<?php

$conn = new PDO("mysql:dbname=bibliotecaoteca;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tboteca WHERE titulo = :TITULO");

$stmt->bindParam(":TITULO", $titulo);

$titulo = $_POST['ftitulo'];

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ":</strong>" . $value. "<br/>";
	}
	echo "______________________________<br>";
}

?>