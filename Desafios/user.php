<?php

require_once "./conn.php";



$pdo-> exec("CREATE TABLE students (id SERIAL PRIMARY KEY, name VARCHAR(255) NOT NULL);");





