<?php 


//print files in the current directory

$dir = scandir(__DIR__);

var_dump(is_file($dir[2]));


//make folder and delete folder

//if directory is not empty you will get a warning

//rmdir('foo');

//makeing recursive directory

//mkdir('foo/bar', 0777,true);

//rmdir('foo');


//check if file or folder exists

//php will cache the returned value of some file related functions for better performance
if (file_exists('foo.txt')) {
    echo filesize('foo.txt'); // prints 0

    file_put_contents('foo.txt', 'hello world');

    clearstatcache();

    echo filesize('foo.txt');// prints 0 beacuse of cached value

} else {
    echo 'file not found';
}






