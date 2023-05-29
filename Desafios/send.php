<?php 


try{

    $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=names", "postgres", "root", [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
} catch(PDOException $e){
    
    die($e -> getMessage());
}


$name = $_POST['nome'];


try{
    
    $statement = $pdo -> prepare("INSERT INTO namess (nome) VALUES (?)");
    $statement -> bindValue(1, $name);
    $statement -> execute();

    echo "$name cadastrado com sucesso <br>";


} catch (Exception $e){
    die($e -> getMessage());
}





