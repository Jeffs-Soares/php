<?php

$telefones = [' (38) 98811 - 6632' , '(21) 99999 - 9999', '(21) 2222 - 2222'];


foreach($telefones as $telefone){

    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefone);

    if($telefoneValido){
        echo 'Válido' . PHP_EOL;
    }

}