<?php


//$file = fopen('eita.txt', /* mode: */ 'a+');

$curso = "Sistemas de Informação\n";

/* fwrite($file, $curso);

fclose($file); */

file_put_contents('eita.txt', $curso, FILE_APPEND);


