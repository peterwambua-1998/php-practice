<?php 


//using "mixed" as return type to specify mutiple data types
//dont use "?" before mixed bcoz it also includes null type
//for example

function bar(): mixed{
    return ['peter', 'wambua'];
}

var_dump(bar());