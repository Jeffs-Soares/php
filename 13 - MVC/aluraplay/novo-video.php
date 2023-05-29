<?php

require_once "./connection/DataBaseConnection.php";

$connection = new DataBaseConnection("localhost","5432", "alura","postgres","root");

$connection -> connect();

/* $url = $_POST['rul'];
$titulo = $_POST['titulo'];


$sql = "INSERT INTO videos (url, title) VALUES (?, ?)";

$statement = $connection-> pdo -> prepare($sql);

$statement -> bindValue(1, $url);
$statement -> bindValue(2, $titulo);

 var_dump($statement -> execute()); */
 
 



