<?php


require_once './conn.php';



$statement = $pdo -> query("SELECT * FROM students");

print_r($statement -> fetchAll(PDO::FETCH_ASSOC));
//var_dump($statement -> fetchAll());
