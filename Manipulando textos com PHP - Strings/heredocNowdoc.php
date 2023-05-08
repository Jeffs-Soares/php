<?php

function geraEmail():void
{
    $conteudoEmail = <<<FIM
    
    Olá, Fulano(a)!
    
    Estamos entrando em contato para {motivo do contato}

    {assinatura}
    FIM;

    echo $conteudoEmail;

}

geraEmail();