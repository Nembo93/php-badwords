<?php 
$testo="Il mio nome è Francesco";
$bad_word = $_GET["word"];
$nuovo_testo = str_replace($bad_word, "***", $testo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <p>Questo è il paragrafo: <? echo $testo ?></p>
    <p>Questa è la lunghezza del paragrafo: <? echo strlen($testo) ?></p>

    <p>Questo è il paragrafo censurato: <? echo str_replace($bad_word, "***", $testo) ?></p>
    <p>Questo è il paragrafo censurato (variabile): <? echo $nuovo_testo ?></p>
    <p>Questa è la lunghezza del paragrafo censurato: <? echo strlen($nuovo_testo) ?></p>
    <h2>Parola censurata: <? echo $bad_word ?></h2>
</body>
</html>