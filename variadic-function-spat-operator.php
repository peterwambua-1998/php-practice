<?php 

//splat operator can be used to specify that a parameter can accept mutiple argumets

//you can add required parameters the specify non required parameters using the splat operator

//you can also type hint what is required in the splat operator

//for example if we want user to pass any amout of numbers as argumets and we add them

function summ(int ...$nums)
{
    /*
    $numbers = 0;
    foreach ($nums as $num) {
        $numbers += $num;
    }

    return $numbers;
    */

    return array_sum($nums);
}

var_dump(summ(1, 2, 4));

echo '<br>';


function printArray(...$words)
{
    $arr = [];

    for ($i=0; $i < count($words); $i++) { 
        $arr = array_fill($i, 1, $words);
    }
   

    return $arr;
}

var_dump(printArray('peter', 'paul', 'rose'));