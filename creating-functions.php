<?php

//declaring functions conditionally

if (true) {

    function checkConst($str){
        return str_repeat($str, 13);
    }   

}

echo checkConst('peter');


function checkIFPrime(int $num){
    if ($num % 2 == 0) {
       return "this is not prime";
    } 

    return "prime";
}


echo "<br>";
echo checkIFPrime(192);







