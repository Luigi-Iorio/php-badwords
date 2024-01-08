<?php
$paragrafo = strtolower($_GET["paragrafo"]);
$parola_censurata = strtolower($_GET["censura"]);
$paragrafo_censurato = str_replace($parola_censurata, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola Censurata</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
    <main class="col-10 col-md-6 d-flex flex-column justify-content-center align-items-center">
        <h1>PHP Badwords</h1>
        <div class="bg-dark py-4 px-4 border rounded-4 mt-3 text-dark">
            <div class="d-flex flex-wrap align-items-center gap-1 bg-white p-3 border-0 rounded-3 mb-3">
                <h6 class="mb-0 text-primary">Il paragrafo inviato è:</h6>
                <p class="mb-0">
                    <?php echo $paragrafo; ?>
                </p>
            </div>

            <div class="d-flex flex-wrap align-items-center gap-1 bg-white p-3 border-0 rounded-3 mb-3">
                <h6 class="mb-0 text-primary">La lunghezza del paragrafo è di:</h6>
                <p class="mb-0">
                    <?php echo strlen($paragrafo); ?>
                    caratteri
                </p>
            </div>

            <div class="d-flex flex-wrap align-items-center gap-1 bg-white p-3 border-0 rounded-3 mb-3">
                <h6 class="mb-0 text-primary">Il paragrafo censurato è:</h6>
                <p class="mb-0">
                    <?php echo $paragrafo_censurato; ?>
                </p>
            </div>


            <div class="d-flex flex-wrap align-items-center gap-1 bg-white p-3 border-0 rounded-3">
                <h6 class="mb-0 text-primary">La lunghezza del paragrafo censurato è di:</h6>
                <p class="mb-0">
                    <?php echo strlen($paragrafo_censurato); ?>
                    caratteri
                </p>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>