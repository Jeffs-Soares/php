<?php
use Alura\Mvc\Repository\VideoRepository;
use Alura\Mvc\Entity\Video;

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



$url = filter_input(INPUT_POST, "url" , FILTER_VALIDATE_URL);

if($url === false){
    header("Location: /?sucesso=0");
}

$titulo = filter_input(INPUT_POST, "titulo");

$repository = new VideoRepository($conn);

if($repository->add(new Video($url, $titulo)) === false ){
    header("Location: /?sucesso=0");
}else{
    header("Location: /?sucesso=1");
}



