<?php
/* 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$numbers = [];

for ($i = 0; $i < 15; $i++) {
    $random_numbers = rand(1, 100);
    //var_dump($random_numbers);
    if (!in_array($random_numbers, $numbers)) {
        array_push($numbers, $random_numbers);
    }
};

var_dump($numbers);
