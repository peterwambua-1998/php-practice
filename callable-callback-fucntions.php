<?php 


// when  a function is passed to another function as an argument

// and then is called within that function its called a callback function

function name($string, $callback){
    $result = array(
        'upper' => strtoupper($string),
        'lower' => strtolower($string)
    );

    if (is_callable($callback)) {
        call_user_func($callback, $result);
        //$callback($result);
    }
}

name('peter', function($result) {
    echo $result['lower'];
});



$users = array('peter', 'paul', 'rozy');

function newNames($item){
    return $item . 'mutuku';
    
}



function newArr($callable, $arr) {
    $newArray = [];
    foreach ($arr as $ar) {
       $values = $callable($ar);
       array_push($newArray, $values);
    }

    return $newArray;
}


print_r(newArr('newNames', $users));



function addition(int $a, int $b, $callback) {
    $results = $a + $b;

    if (is_callable($callback)) {
        call_user_func($callback, $results);
    }
}

function callBack($result) {
    echo $result + 15;
}

echo "<br>";
addition(1, 2, 'callback');