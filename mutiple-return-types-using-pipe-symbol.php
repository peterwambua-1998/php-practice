<?php 


//you can specify mutiple return types eg float, integer, string
//for example as of php 8

function bar(): int|float 
{
    return 1;

    //or retrun 1.5;
}