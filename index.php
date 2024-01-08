<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <h1>PHP Badwords</h1>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <h3>Compila il form</h3>
        <form action="censura.php" method="get">
            <label for="paragrafo">Scrivi il paragrafo</label>
            <input type="text" name="paragrafo" id="paragrafo">
            <label for="censura">Scrivi la parola da censurare nel paragrafo</label>
            <input type="text" name="censura" id="censura">
            <button>Invia il form</button>
        </form>
    </main>
    <!--/main -->
</body>

</html>