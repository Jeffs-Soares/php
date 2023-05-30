<?php

require_once "./connection/DataBaseConnection.php";

$connection = new DataBaseConnection("localhost", "5432", "alura", "postgres", "root");

$connection->connect();

$url =  filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL);

if($url === false){
    header("Location: /index.php?sucesso=0");
    exit();
}

$titulo =  filter_input(INPUT_POST, "titulo");


//Estudar sobre FILTER_SANITAZE and FILTER_VALIDADE

//Estudar filter_input


$sql = "INSERT INTO videos (url, title) VALUES (?, ?)";

$statement = $connection->pdo->prepare($sql);

$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);


if ($statement->execute() === false) {
    header("Location: /index.php?sucesso=0");
} else {
    header("Location: /index.php?sucesso=1");
}