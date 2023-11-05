<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Gestionale</title>

    <!-- Collegamento a Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <!-- Stili personalizzati -->
    <style>
        /* Aggiungi qui i tuoi stili personalizzati, se necessario */
        /* Stile per il corpo della pagina */
        body {
            background-color: #dc930b;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <!-- Utilizza le classi Bootstrap per stilizzare il contenuto -->
    <div class="container text-center">
        <img src="logo.jpg" alt="Description of the image" class="my-4">
        <h1>GYM STUDIO</h1>

        <!-- Utilizza classi Bootstrap per la tabella -->
        <table class="table table-bordered table-striped">
            <tr>
                <th>Area Login Utente Palestra</th>
                <th>Area Login Admin Palestra</th>
            </tr>
            <tr>
            <a href="index.php?action=login&area=user" class="btn btn-primary">User Area</a>
            <a href="index.php?action=login&area=admin" class="btn btn-primary">Admin Area</a>
            </tr>
        </table>
   
        <div class="select">
            <p>GYM STUDIO A.S.D. 2023</p>
        </div>
    </div>

    <!-- Collegamento al JavaScript di Bootstrap (se necessario) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

   



</body>

</html>