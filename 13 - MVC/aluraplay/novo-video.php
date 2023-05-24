<?php

require_once "./connection/DataBaseConnection.php";

$connection = new DataBaseConnection("localhost","5432", "alura","postgres","root");

$connection -> connect();


$sql = "INSERT INTO videos (url, title) VALUES (?, ?)";

$statement = $connection-> pdo -> prepare($sql);

$statement -> bindValue(1, $_POST['url']);
$statement -> bindValue(2, $_POST['titulo']);

 var_dump($statement -> execute());



