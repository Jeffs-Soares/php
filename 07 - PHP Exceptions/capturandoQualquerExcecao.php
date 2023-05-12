<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (Exception | Error $error) {

        //catch (Exception | Error $error) or catch( Throwable $error)
        // O ideal por boas práticas é especificar qual exatamente
        echo $error -> getMessage() . PHP_EOL;
        echo $error -> getLine() . PHP_EOL;
        //echo $error -> getFile() . PHP_EOL;
        echo $error -> getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException('Essa é uma mensagem de exceção');
    
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;


