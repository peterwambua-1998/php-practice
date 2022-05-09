<?php

function prettyprintarray(array $items) {
    echo "<pre>";

    print_r($items);

    echo "<pre>";
}

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];


prettyprintarray(array_chunk($items, 2, true));

