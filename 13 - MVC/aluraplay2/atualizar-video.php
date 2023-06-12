<?php
use Alura\Mvc\Entity\Video;
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


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

$titulo = filter_input(INPUT_POST, 'titulo');

if($url === false){
    header("Location: /?sucesso=0");
}

if($titulo === false){
    header("Location: /?sucesso=0");
}

if($id === false && $id === null){
    header("Location: /?sucesso=0");
}

$video = new Video($url, $titulo);
$video->setId($id);



$repository = new VideoRepository($conn);
$repository -> update($video);


if($repository->update($video) === false){
    header("Location: /?sucesso=0");
}else{
    
    header("Location: /?sucesso=1");
}








