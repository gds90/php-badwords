<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <!-- start Form  -->
                <form action="request.php" class="my-3" method="GET">
                    <div class="mb-3">
                        <label for="text" class="form-label">Inserisci testo:</label>
                        <textarea name="paragrafo" class="form-control" placeholder="Inserisci una frase" id="paragrafo" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="word" class="form-label">Parola da censurare:</label>
                        <input type="text" name="parola_censurata" class="form-control" id="parola_censurata" placeholder="Inserisci una parola da censurare" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <!-- end Form  -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>