<?php

function createFibonacci(){
    $a = array(0,1);
    for ($i=0 ; $i < 98; ++$i){
        $nextNumber = $a[$i] + $a[$i+1];
        array_push($a,$nextNumber);
    }
    return $a;
}

function writeFibonacci(){
    $arr = createFibonacci();
    for($i = 0; $i < count($arr); ++$i){
        echo "${arr[$i]} <br>";
    }
}
writeFibonacci();