<?php 

//say we have an array of numbers and we want to pass the values
//of the array as individual values
//this is done by passing the array using splat operator 
//for example


namespace splat;

$numers = ['x' => 1, 'y'=>2,'z'=>34, 'a'=>5];

function sum(...$nums){
    return array_sum($nums);
}


//splat operator in argumets to unpack array
var_dump(sum(...$numers));