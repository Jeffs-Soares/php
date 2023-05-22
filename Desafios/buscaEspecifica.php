<?php

require_once './conn.php';

$especificData = $pdo -> query("SELECT * FROM students;");
//$especificData = $pdo -> query("SELECT * FROM students WHERE id = 1;");

while($data = $especificData -> fetch(PDO::FETCH_ASSOC)){

    echo $data['name'] . PHP_EOL;

}


//print_r($data['name']);

