<?php


/* $email = 'jeff@gmail.com';


echo substr($email, 0 , 4).PHP_EOL;

echo substr($email, 5); */

$email = 'ana@gmail.com';

//Achar posição
$pos = strpos($email, '@', );


echo substr($email, 0 , $pos).PHP_EOL;

echo substr($email, $pos + 1);




