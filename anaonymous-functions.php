<?php 

declare(strict_types=1);

//anonymous fucntions are aslo called lambda functions 

//anonymous fucntions have no name

//have to end with a ";"

$sum = function (int ...$nums) {
    return array_sum($nums);
};

echo $sum(1, 2, 3);


//you can pass anonymous functions as arguments and also return them from other functions


// "use" keyword is used with anonymous functions to access variable from global scope

//for example

echo "<br>";

$x = 3;

$summing = function (int ...$nums) use ($x)
{
    return array_sum($nums) + $x;
};

echo $summing(1, 2,3);