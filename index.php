<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex flex-column justify-content-center">
    <!-- header -->
    <header>
        <h1 class="text-center text-secondary">PHP Badwords</h1>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <div class="col-10 col-md-4 mx-auto bg-secondary py-5 px-4 border rounded-4 mt-3">
            <h3 class="text-light mb-3">Compila il form</h3>
            <form action="censura.php" method="get">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control text-secondary" name="paragrafo" id="floatingInput"
                        placeholder="Scrivi il paragrafo">
                    <label for="floatingInput" class="text-secondary">Scrivi il paragrafo</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control text-secondary" name="censura" id="censura"
                        placeholder="Scrivi la parola da censurare nel paragrafo">
                    <label for="censura" class="text-secondary">Parola da censurare</label>
                </div>
                <button type="submit" class="btn btn-light mt-3">Invia il form</button>
            </form>
        </div>
    </main>
    <!--/main -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>