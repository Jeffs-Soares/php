<?php

$arquivo = fopen('lista-cursos.txt', 'r');



while(!feof($arquivo)){ //não chegar no fim do arquivo
        $curso = fgets($arquivo);
        echo $curso;
}


fclose($arquivo);
