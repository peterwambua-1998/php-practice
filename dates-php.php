<?php

//time function 

echo time();

//time in future say five days

//convert to hours, then minutes, then seconds
echo '<br>';
$future = time() + 5 * 24 * 60 * 60;

echo  $future;


//subtract to get yesterdays time
echo '<br>';
$yesterday = time() - 1 * 24 * 60 * 60;

echo $yesterday;

echo '<br>';
//displaying in date format 

date_default_timezone_set('Africa/Nairobi');
echo date('m/d/Y g:ia');
echo '<br>';
echo date('m/d/Y g:ia', $yesterday);

echo "<br>";
date_default_timezone_set('Africa/Lagos');
echo date('m/d/Y g:ia');
echo '<br>';
echo date('m/d/Y g:ia', $yesterday);



//make your own time 
echo "<br>";

echo date('m/d/Y g:ia',mktime(0, 0, 0,2, 3, 2021));

