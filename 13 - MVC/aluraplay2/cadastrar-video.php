<?php
require_once "./conn.php";

$sql = "INSERT INTO videos (url , title) VALUES (:url, :title);";

$statment = $conn->prepare($sql);

$url = filter_input(INPUT_POST, $_POST['url'], FILTER_VALIDATE_URL);

if ($url === false) {
    header("Location: /index.php?sucesso=0");
}

$titulo = filter_input(INPUT_POST, $_POST['titulo']);

$statment->bindValue(":url", $url);
$statment->bindValue(":title", $titulo);

if ($statment->execute() === false) {

    header("Location:/index.php?sucesso=0");
} else {

    header("Location:/index.php?sucesso=1");
}