
//SNACK-4
//creare un array con 15 numeri casuali,tenendo conto che l array non dovrà contenere lo stesso numero più di una volta.

<?php

#creo un array vuoto da popolare

$numbers = [];

while (count($numbers) < 15) {
    $random = rand(1 , 100);
#restituisce se il valore è presente nell array altrimenti è false
    if(!in_array($random, $numbers)){
        $numbers[] = $random; #come una specie di push
    }
}

    var_dump($numbers);
?>