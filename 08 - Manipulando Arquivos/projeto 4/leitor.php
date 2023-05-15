<?php


$file = fopen('newFile.txt', /* mode: */ 'a');

$curso = "\nSistemas de Informação";

fwrite($file, $curso);


fclose($file);



