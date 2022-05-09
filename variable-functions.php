<?php 

namespace variablefunctions;

function sum(int ...$nums)
{
    return array_sum($nums);
}


$x = 'variablefunctions\sum';

if (is_callable($x)) {
    echo $x(1, 2, 3);
} else {
    echo 'its not callable';
}