

//Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

<?php

$posts = [
          #array associativi
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
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

<h1>POSTS</h1>

<?php 

#stampa posts per data

    $arr_keys = array_keys($posts);
    var_dump($arr_keys);

#creo un ciclo per prendere ogni chiave di posts

    for($i = 0; $i < count($arr_keys); $i++) : ?>
#inserisco html chiudendo e riaprendo blocchetto php
    <h3><?php  echo $arr_keys[$i]; ?></h3>
# endfor e : usati al posto  di {} , per semantica ad evidenziare la chiusura del blocchetto php,funziona cmq ma più leggibile 

    <?php
#prendo post con data
    $date_posts = $posts[$arr_keys[$i]];
    var_dump($date_posts);
#creo ciclo con indice j altrimenti prende uktimo valore di i
    for($j = 0; $j < count($date_posts); $j++) { ?>
        <ul>
            <li>Title: <?php echo $date_posts[$j]['title']; ?></li>
            <li>Author: <?php echo $date_posts[$j]['author']; ?></li>
            <li>Text: <?php echo $date_posts[$j]['text']; ?></li>
        </ul>
    <?php } ?>
    
    <?php endfor; ?>   
</body>
</html>





