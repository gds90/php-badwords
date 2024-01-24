<?php
// assegno i valori dei campi input della Form alle variabili
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola_censurata'];

// sostituisco le parole da censurare con gli asterischi
$nuovo_paragrafo = str_replace($parola, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- mostro il paragrafo senza censurare le parole  -->
    <h1>With Badwords</h1>
    <div>
        <p><?php echo $paragrafo; ?></p>
        <p>Lunghezza del paragrafo: <?php echo strlen($paragrafo) ?></p>
    </div>
    <!-- mostro il paragrafo con le parole censurate -->
    <h1>Without Badwords</h1>
    <div>
        <p><?php echo $nuovo_paragrafo; ?></p>
        <p>Lunghezza del paragrafo: <?php echo strlen($nuovo_paragrafo) ?></p>
    </div>
</body>

</html>