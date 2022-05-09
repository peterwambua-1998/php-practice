<?php 

//we can specify default values in parameter
//incase no argument is provided

//optional parameters should come after the required parameters

function suming(int $a, int $b = 8)
{
    return $a + $b;
}

var_dump(suming(8, 6));