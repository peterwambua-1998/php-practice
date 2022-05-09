<?php
//by default argumets are passed by value
//we can specify we want to pass by reference
//for example

namespace passbyreference;

function foo(int &$a, int $b): int
{
    if ($a % 2 == 0) {
        $a /= 2;
    }

    return $a * $b;
}


$a = 6;
$b = 7;

var_dump(foo($a, $b));
echo '<br>';
var_dump($a, $b);

