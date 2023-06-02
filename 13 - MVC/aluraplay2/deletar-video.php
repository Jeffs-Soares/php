<?php

require_once "./conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM videos WHERE id=?;";


$statement = $conn -> prepare($sql);


$statement ->bindValue(1, $id);


if($statement -> execute() === false){
    header("Location: /index.php?sucesso=0");
}else{
    header("Location: /index.php?sucesso=1");
}

echo "<pre>";

print_r($_GET["id"]);



