<?php

$file = fopen('file.txt', 'r');

$tamanho = filesize('file.txt');

$cursos = fread($file, $tamanho);


echo $cursos;

fclose($file);