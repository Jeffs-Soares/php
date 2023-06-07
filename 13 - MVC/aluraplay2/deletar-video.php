<?php

$host = "localhost";
$port = "5432";
$dbname = "alura";
$user = "postgres";
$password = "root";

try {
    $conn = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die($e->getMessage());
}

$id = $_GET['id'];

$sql = "DELETE FROM videos WHERE id=?;";


$statement = $conn -> prepare($sql);


$statement ->bindValue(1, $id);


if($statement -> execute() === false){
    header("Location: /?sucesso=0");
}else{
    header("Location: /?sucesso=1");
}

echo "<pre>";

print_r($_GET["id"]);



