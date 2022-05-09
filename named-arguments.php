<?php 
//named argumets is a way to tell php how our argumets ar to be parsed
//named args are important when a function has eg one required param and the rest have default values
//to access the last parameter we can use named argumets to avoid adding values to the rest of the params that come before the last that we want to access
//for example 


declare(strict_types=1);

function namedArg(int $x, int $y): int
{
    if ($x % $y == 0) {
        return $x / $y;
    }

    return $x;
}

//here we tell php how to pass our values
$x = 6;
$y = 3;
echo namedArg(x: $y, y: $x);