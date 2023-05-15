<?php


$meusCursos = file('cursos.txt');
$disciplinas = file('disciplinas.txt');


$arquivoCsv = fopen('lul.csv', 'w');

foreach($meusCursos as $curso){
    $linha = [trim($curso), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');

}

foreach($meusCursos as $curso){
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);

