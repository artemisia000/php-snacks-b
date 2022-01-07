
//SNACK-7
//creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà nome,cognome e un array contenente i suoi voti scolastici. Stampare nome,cognome e la media di ogni alunno.

<?php

$students = [
    [
        'name' => 'Frida',
        'last_name' => 'Khalo',
        'votes' => [10, 7, 10, 9]
    ],
    [
        'name' => 'Jasmine',
        'last_name' => 'Root',
        'votes' => [1, 4, 6, 8]
    ],
    [
        'name' => 'Emma',
        'last_name' => 'Santictis',
        'votes' => [5, 3, 10, 8]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>STUDENTS</h2>
    <ul>
        <?php
        #ciclo per stampare tutti gli studenti
        for($i = 0; $i < count($students); $i++) : ?>

            <li>
                <h2>
                    <?php echo $students[$i]['name']. '' .$students[$i]['lastName']; ?>
                </h2>  
            </li>    
            <strong>Media voti:</strong>

            #(array_sum)calcola la somma ei valori contenuti e poi divido/ per la lunghezza dell'array
            <li><?php echo array_sum($students[$i]['votes']) / count($students[$i]['votes']); ?></li>

            #arrotondamento con round
            <?php round(array_sum($students[$i]['votes']) / count($students[$i]['votes']), 1); ?>

         <?php endfor; ?>  
    </ul>
  
</body>
</html>