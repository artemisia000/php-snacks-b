
//SNACK-5
//prendere un paragrafo abbastanza lungo,contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi p .Ogni punto un nuovo paragrafo.

<?php 

$text = "STREGHE E STREGONERIA.Carattere essenziale che, nell 'opinione volgare di tutti i tempi, distingue la stregoneria o magia nera  dalla magia bianca, è lo scopo a cui la prima è diretta: arrecare nocumento al prossimo o costringerlo a fare in favore dello stregone o di una terza persona quel che non farebbe di propria volontà. La credenza che vi siano persone che abbiano tali facoltà è di tutti i tempi e di tutti i popoli; e i metodi adoperati dagli stregoni e dalle streghe sono rimasti presso che gli stessi.
Verso la fine del II millennio a. C., nell' ultimo anno di regno di Rameśśêśe III, la regina Teje trama un complotto, in cui sono implicati ufficiali di corte e dame dell'harem, per far salire sul trono, invece del legittimo erede, il figlio di lei Pentawere; dagli atti dell'inchiesta risulta che anche allora si facevano sortilegi su statuette che rappresentavano gli avversarî. Nella biblioteca di Assurbanipal (sec. VIII a. C.) s'è trovata tutta una serie di esorcismi, designata col nome di serie maqlū, per scongiurare gli effetti del sortilegio (mamītu) dello stregone (kashshapu) o della strega (kashshaptu). Il Vecchio Testamento parla di streghe e di necromanti, ma per vietarne la consultazione e le pratiche; anzi Lev. XXII, 18, prescrive che streghe e stregoni non siano lasciati vivere.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <?php
    #stampa pargrafo,con explode divide stringa(delimitatore,stringa)
    $paragraphs = explode('.', $text);
    var_dump($paragraphs);

    #ciclo per stampare i figli paragrafi
    for($i = 0; $i < count($paragraphs); $i++) { 
    #se il pargrafo NON è vuoto lo stampi altrimenti false,non fà nulla(per togliere eventuali ghost)
        if(!empty($paragraphs[$i])) { ?> 

        <p><?php echo $paragraphs[$i]; ?></p>

        <?php } ?>
    <?php } ?> 
    
</body>
</html>