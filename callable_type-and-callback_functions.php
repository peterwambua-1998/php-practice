<?php

//when a function is passed to another function as an argument
//and called within that function is called CALLBACK FUNCTION

$arr = [1, 2, 3, 4];

$arr2 = array_map(function($val){
  return $val * 2;  
}, $arr);

echo "<pre>";
print_r($arr2);
echo "<pre>";


//our example

$sum = function (callable $callback, int ...$numbers){
    return $callback(array_sum($numbers));
};

function foos($element){
    return $element * 2;
}

