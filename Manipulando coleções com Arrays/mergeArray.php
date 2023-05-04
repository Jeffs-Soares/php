<?php

$alunos = [

    'Vini Junior',
    'Rodrygo',
    'Haaland',
    'Ribamito',
    'Neymídia'
];

$novosAlunos = [
    'Pedro Queixada',
    'Gabi sem gol',
    'Arrascaeta'
];


$alunos2022 = array_merge($alunos, $novosAlunos);

var_dump($alunos2022);


//spread is so good

$lul = [...$alunos, ...$novosAlunos];

var_dump($lul);





