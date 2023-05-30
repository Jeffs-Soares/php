<?php

require_once "./connection/DataBaseConnection.php";
$connection = new DataBaseConnection("localhost", "5432", "alura", "postgres", "root");
$connection->connect();


$id = $_GET['id'];

$sql = "DELETE FROM videos WHERE id = ?";

$statement = $connection->pdo->prepare($sql);

$statement->bindValue(1, $id);


if ($statement->execute() === false) {
    header("Location: /index.php?sucesso=0");
} else {
    header("Location: /index.php?sucesso=1");
}