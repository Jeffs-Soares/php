<?php

require_once "./classes/DataBaseConnection.php";

/*      private string $host,
        private string $port,
        private string $dbname,
        private string $user,
        private string $password */

$conection = new DatabaseConnection("localhost", "5432", "ecidade", "postgres", "root");


$conection -> connect();

var_dump($conection);

//$conection -> disconnect();
