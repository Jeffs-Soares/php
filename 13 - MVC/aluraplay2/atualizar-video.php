<?php 

require_once "./conn.php";


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

$statment = $conn -> prepare("UPDATE videos SET url=?, title=? WHERE id=?;");

$statment ->bindValue(1, $url);
$statment ->bindValue(2, $titulo);
$statment ->bindValue(3, $id, PDO::PARAM_INT);

if($statment -> execute() === false){
    header("Location: /?sucesso=0");
}else{
    
    header("Location: /?sucesso=1");
}








