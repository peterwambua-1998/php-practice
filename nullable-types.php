<?php

//You can use a "?" before return types and parameters
//this indicates that you either return the stated type or null
//for example

declare(strict_types=1);

function foo(): ?int
{
    //here we return either an integer or null
    return 1;
}

var_dump(foo());