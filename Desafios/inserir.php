<?php

require_once './conn.php';

$sql = "INSERT INTO students(name) VALUES ('Léo da Massa')";

var_dump($pdo -> exec($sql));