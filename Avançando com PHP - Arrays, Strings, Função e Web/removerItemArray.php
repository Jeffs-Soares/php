<?php


$arr = [1,2,3,4,5,6,7,8,9,10];

unset($arr[8]);

foreach($arr as $number){
    echo $number . PHP_EOL;
}

