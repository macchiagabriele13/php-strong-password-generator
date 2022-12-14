<?php

/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato. */
/* Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php */




/* Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */


include __DIR__ . '/functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<div class='container text-center'>
<h1>Password Generator</h1>
<h2>Genera la tua password</h2>


<form action="index.php" method="get">
    <div>
        <label for="length_psw"></label>
        <small id="length_psw" class="">Lunghezza Password</small>
        <input type="number" name="length_psw" id="length_psw">
    </div>
    <div class='button'>
        <button type="submit">Invia</button>
        <button type="reset">Cancella</button>

    </div>
</form>

<div class="password text-center">
      <h2>La tua password</h2>
      <h3><strong><?= generatePassword($length_number) ?></strong></h3>
 </div>

    <div class="form-check form-check-inline">
        <small id="helpId" class="">Consenti ripetizioni di uno o più caratteri?</small>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="ripetizione" id="ripetizione" value="checkedValue"> Si
            <input class="form-check-input" type="radio" name="ripetizione" id="ripetizione" value="checkedValue"> No
        </label>
    </div>


    
</div>



</body>
</html>