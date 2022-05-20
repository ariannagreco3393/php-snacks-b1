<?php
/* 
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$alunni = [
    [
        'nome' => 'arianna',
        'cognome' => 'greco',
        'voti' => [
            5, 7, 8
        ]
    ],
    [
        'nome' => 'andrea',
        'cognome' => 'rossi',
        'voti' => [
            5, 5, 3,4
        ]
    ],
    [
        'nome' => 'paolo',
        'cognome' => 'bianchi',
        'voti' => [
            9, 7, 6, 8, 5
        ]
    ],
];

for ($i=0; $i < count($alunni) ; $i++) { 
    $sum = array_sum($alunni[$i]['voti']) . "\n";
    //var_dump($sum);

    $media = $sum / count($alunni[$i]['voti']);
    $voto = number_format($media, 2);
    //var_dump($voto);

    echo $alunni[$i]['nome'] . ' ' . $alunni[$i]['cognome'] . ' ' . $voto . "<br>";
}
