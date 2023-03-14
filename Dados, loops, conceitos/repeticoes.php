<?php

 $n = 1;

while ($n <= 15) {
    echo $n . PHP_EOL;
    $n++;
} 



//for

for ($b = 1; $b <= 15; $b++) {

    if($b != 13){
        echo $b . PHP_EOL;
    }
}

//break, mas pouco usual

for ($b = 1; $b <= 15; $b++) {
    echo $b . PHP_EOL;
    if ($b === 2) {
        break;
    }
}
