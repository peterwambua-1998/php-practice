<?php 


//union types is using pipe symbol with type hinting paramaters
//as of php 8
//for example

function sum(int|float $a, int $b)
{
    return $a + $b;
}