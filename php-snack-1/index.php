<?php
/* 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$partite = [
   [
    'squadra casa' => 'Olimpia Milano',
    'squadra ospite' => 'cantù',
    'punti squadra casa' => '55',
    'punti squadra ospite' => '60'
   ],
   [
    'squadra casa' => 'bologna',
    'squadra ospite' => 'varese',
    'punti squadra casa' => '86',
    'punti squadra ospite' => '50'
   ],
   [
    'squadra casa' => 'napoli',
    'squadra ospite' => 'siena',
    'punti squadra casa' => '76',
    'punti squadra ospite' => '90'
   ],

];

for ($i = 0; $i < count($partite); $i++) {
    echo $partite[$i]['squadra casa'] . " - " . $partite[$i]['squadra ospite'] . " | " . $partite[$i]['punti squadra casa'] . " - " . $partite[$i]['punti squadra ospite'] . "<br>";
};
