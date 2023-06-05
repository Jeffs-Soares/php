<?php 

require_once "./conn.php";


$url = filter_input(INPUT_POST, "url" , FILTER_VALIDATE_URL);

if($url === false){
    header("Location: /index.php?sucesso=0");
}

$titulo = filter_input(INPUT_POST, "titulo");

$sql = "INSERT INTO videos (url , title) VALUES (?, ?);";

$statment = $conn -> prepare($sql);

$statment -> bindValue(1, $url);
$statment -> bindValue(2, $titulo);

if($statment -> execute() === false ){
    header("Location: /index.php?sucesso=0");

}else{

    header("Location: /index.php?sucesso=1");
}



