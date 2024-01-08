<?php
$paragrafo = $_GET["paragrafo"];
$parola_censurata = $_GET["censura"];
$paragrafo_censurato = str_replace($parola_censurata, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola Censurata</title>
</head>

<body>
    <main>
        <p>Il paragrafo inviato è:
            <?php echo $paragrafo; ?>
        </p>
        <p>La lunghezza del paragrafo è di:
            <?php echo strlen($paragrafo); ?>
            caratteri
        </p>
        <p>Il paragrafo censurato è:
            <?php echo $paragrafo_censurato; ?>
        </p>
        <p>La lunghezza del paragrafo censurato è di:
            <?php echo strlen($paragrafo_censurato); ?>
            caratteri
        </p>
    </main>
</body>

</html>