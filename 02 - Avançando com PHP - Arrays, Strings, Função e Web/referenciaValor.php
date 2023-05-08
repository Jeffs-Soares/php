<?php


$arr = ['titular' => 'Jeff'];


function upper( array &$conta){
    return $conta['titular'] = strtoupper($conta['titular']);
}

upper($arr);

echo "{$arr['titular']}";
