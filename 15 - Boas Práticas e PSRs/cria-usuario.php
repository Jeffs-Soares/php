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

$email = $argv[1];
$password = $argv[2];

//$hash = password_hash($password, PASSWORD_DEFAULT);
$hash = password_hash($password, PASSWORD_ARGON2ID);

$sql = "INSERT INTO users (email, password) VALUES (?, ?);";

$statement = $pdo->prepare($sql);

$statement->bindValue(1, $email);
$statement->bindValue(2, $hash);

$statement->execute();

?>