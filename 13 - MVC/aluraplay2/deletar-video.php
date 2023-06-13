<?php
use Alura\Mvc\Repository\VideoRepository;

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

$repository = new VideoRepository($conn);


if($repository->remove($id) === false){
    header("Location: /?sucesso=0");
}else{
    header("Location: /?sucesso=1");
}
