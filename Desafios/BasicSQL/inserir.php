<?php

require_once './conn.php';

$sql = "INSERT INTO students(name) VALUES ('Neymito')";

var_dump($pdo -> exec($sql));