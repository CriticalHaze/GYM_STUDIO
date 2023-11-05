<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM STUDIO</title>

    <!-- Collegamento a Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <!-- Stili personalizzati -->
    <style>
        /* Stile per la pagina */
        body {
            background-color: #dc930b;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        h1, p {
            color: white;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            max-height: 50vh;
        }

        /* Personalizza lo stile del form di Bootstrap */
        form {
            max-width: 400px;
            width: 100%;
            margin: 20px 0;
        }

        .submit-button {
            background-color: white;
            color: black;
        }

        .submit-button:hover {
            background-color: black;
            color: white;
        }

        table {
            width: 80%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #555;
        }

        tr {
            background-color: #ede2e2;
        }
    </style>
</head>
<body>
    <img src="logo.jpg" alt="GYM STUDIO">
    <h1>GYM STUDIO</h1>
    
 
    <?php
        // database data down here----this data down here have to be changed.-------------
        $userData = [
            'ID' => 1,
            'ID_Palestra' => 101,
            'Nome' => 'Ornella',
            'Cognome' => 'Ambrosino',
            'DataNascita' => '20/1/93',
            'Email' => 'ornella.ambrosino@gmail.com',
        ];
    ?>
    <p>Qui troverai tutte le informazioni personali associate al tuo account</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Palestra</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Data di nascita</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $userData['ID']; ?></td>
                <td><?php echo $userData['ID_Palestra']; ?></td>
                <td><?php echo $userData['Nome']; ?></td>
                <td><?php echo $userData['Cognome']; ?></td>
                <td><?php echo $userData['DataNascita']; ?></td>
                <td><?php echo $userData['Email']; ?></td>
            </tr>
        </tbody>
    </table>

    <div>
        <p>La tua scheda esercizi:</p>
    </div>

    <!--  replace with exercise data from database -->
    <?php
        $exerciseData = [
            [
                'EsercizoNum' => 1,
                'NomeEsercizio' => 'Push-Up',
                'DescrizioneEsercizio' => 'Eseguito in posizione prona, ossia con il corpo disteso orizzontalmente e faccia rivolta verso il basso, alzando ed abbassando il corpo tramite le braccia.',
                'Serie' => 3,
                'Ripetizioni' => 10,
                'Carico' => '0',
                'Durata' => '8 minuti',
                'Note' => 'Da eseguire su tappetino apposito',
            ],
            [
                'EsercizoNum' => 2,
                'NomeEsercizio' => 'PectoralMachine',
                'DescrizioneEsercizio' => 'Posizionare i gomiti sulla superficie morbida in modo che il braccio sia extraruotato e formi con l\'avambraccio un angolo di 90°: tramite spinta il macchinario consente un movimento a croce efficace sulla zona del petto.',
                'Serie' => 3,
                'Ripetizioni' => 8,
                'Carico' => '25 KG',
                'Durata' => '6 minuti',
                'Note' => '30 secondi di riposo tra una serie ed un altra',
            ],
            [
                'EsercizoNum' => 3,
                'NomeEsercizio' => 'Tapis Roulant',
                'DescrizioneEsercizio' => 'Correre o camminare sul Tapis Roulant può aiutare a tonificare i muscoli delle gambe, dei glutei e dell\'addome. Aumentare la resistenza. L\'allenamento regolare sul Tapis Roulant può aumentare la resistenza fisica e migliorare la capacità di resistere allo sforzo.',
                'Serie' => 1,
                'Ripetizioni' => 1,
                'Carico' => '0',
                'Durata' => '30 minuti',
                'Note' => 'Non eccedere nella velocità',
            ],
        ];
    ?>
    <table>
        <tr>
            <th>Esercizo Num</th>
            <th>Nome Esercizio</th>
            <th>Descrizione Esercizio</th>
            <th>Numero di serie per Esercizio</th>
            <th>Numero di ripetizioni per Esercizio</th>
            <th>Carico da utilizzare per Esercizio</th>
            <th>Durata per esercizio</th>
            <th>Note sull'esercizio</th>
        </tr>
        <?php foreach ($exerciseData as $exercise) { ?>
            <tr>
                <td><?php echo $exercise['EsercizoNum']; ?></td>
                <td><?php echo $exercise['NomeEsercizio']; ?></td>
                <td><?php echo $exercise['DescrizioneEsercizio']; ?></td>
                <td><?php echo $exercise['Serie']; ?></td>
                <td><?php echo $exercise['Ripetizioni']; ?></td>
                <td><?php echo $exercise['Carico']; ?></td>
                <td><?php echo $exercise['Durata']; ?></td>
                <td><?php echo $exercise['Note']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <div class="select">
        <p> GYM STUDIO A.S.D. 2023</p>
    </div>
    
    <!-- Collegamento al JavaScript di Bootstrap (se necessario) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>