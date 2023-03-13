
<?php


$idade = 18;

echo "Você só pode entrar se tiver mais de 18 anos." . PHP_EOL;

if ($idade >= 18 /* || $idade == 18 */)
{

    echo "Você tem $idade anos. Pode entrar.";
}else{
    echo "Você não tem mais de 18 anos parça.";
}




