<?php

$host = "localhost";
$port = "5432";
$dbname = "alura";
$user = "postgres";
$password = "root";

try {
    $pdo = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
} catch (\PDOException $e) {
    die($e->getMessage());
}


return $pdo;

?>