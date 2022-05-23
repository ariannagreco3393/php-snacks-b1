<?php 
/* 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 6</title>
</head>
<body>
    <?php foreach ($db as $key => $value) { ?>
        <h3><?php echo $key; ?></h3>
        <div style="background-color:<?php echo ($key == 'teachers') ? 'gray' : 'green'?>">
        <ul>
        <?php foreach ($value as $category) { ?>
            <li>
                <p><?php echo $category['name']; ?></p>
                <p><?php echo $category['lastname']; ?></p>
        </li>
        <?php } ?>
        </ul>
    </div>
    <div style="color: green"></div>
    <?php } ?>
  
</body>
</html>