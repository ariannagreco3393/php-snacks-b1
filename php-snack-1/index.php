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

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
<div><?php echo $partite[0]['squadra casa'] ?></div>
    
</body>
</html>