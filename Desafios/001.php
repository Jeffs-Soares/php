<?php

/*
1. Entre com os dados de 5 alunos de uma classe, recebendo as
informações como nome e uma nota do aluno.

Armazene estes dados em um vetor.

Ao final do programa mostrar a média de nota da classe, e o nome do aluno que obteve maior nota.

*/

$alunos = [
        [
            'nome' => 'Lucas',
            'nota' => 7
        ],
        [
            'nome' => 'Ribamito',
            'nota' => 5
        ],
        [
            'nome' => 'Pedro',
            'nota' => 9
        ],
        [
            'nome' => 'Arrascaeta',
            'nota' => 3
        ],
        [
            'nome' => 'Gabigol',
            'nota' => 1
        ],

    ];


    $nomeMaiorNota = '';
    $notaAtual = 0;
    

    echo $nomeMaiorNota;

foreach($alunos as $aluno){
    $count += $aluno['nota'];

    if($aluno['nota'] > $notaAtual){
        $notaAtual = $aluno['nota'];
        $nomeMaiorNota = $aluno['nome'];
    }


}

$mediaAlunos = $count / count($alunos);

echo "A média da turma foi de $mediaAlunos".PHP_EOL;
echo "O aluno com maior nota foi $nomeMaiorNota".PHP_EOL;













