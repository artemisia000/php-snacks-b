

//SNACK-6
//utilizzare questo array: http://pastebin.com/CkX3680A
//stampiamo questo array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

<?php
 
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
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="box grey">
        <h3>TEACHERS:</h3>
        <ul>
            <?php
            #ciclo in cui prendo per tutta la lunghezza di $db tutti gli array teachers,incremento
            for($i = 0; $i < count($db['teachers']); $i++) : ?>
                <li>
                    #entro in $db e poi in $teachers,pesco le chiavi associative che mi interessano e stampo name e poi lastname
                    <?php echo $db['teachers'][$i]['name']; ?>
                    <?php echo $db['teachers'][$i]['lastname']; ?>
                </li>
            <?php endfor; ?>
        </ul>
    </div>

    <div class="box green">
        <h3>PM:</h3>
        <ul>
            <?php
            #ciclo in cui prendo per tutta la lunghezza di $db tutti gli array teachers,incremento
            for($i = 0; $i < count($db['pm']); $i++) : ?>
                <li>
                    #entro in $db e poi in $pm,pesco le chiavi associative che mi interessano e stampo name e poi lastname
                    <?php echo $db['pm'][$i]['name']; ?>
                    <?php echo $db['pm'][$i]['lastname']; ?>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
    
</body>
</html>