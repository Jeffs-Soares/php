<?php

$hostname = "localhost";
$db = "crud";
$user = "postgres";
$password = "root";


try {

    $pdo = new PDO("pgsql:host=$hostname;port=5432;dbname=$db", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo "conectado";
} catch (PDOException $e) {

    echo "deu ruim";
    die($e->getMessage());
}
