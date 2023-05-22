<?php

require_once './conn.php';

$especificData = $pdo -> query("SELECT * FROM students WHERE id = 1");

$data = $especificData -> fetch(PDO::FETCH_ASSOC);

print_r($data['name']);

