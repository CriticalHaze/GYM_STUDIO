<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM STUDIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <style>
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
    <p>Here you will find all the personal information associated with your account</p>
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
            <?php
          
            $user_id = 1; 

          //  $user_data = fetchUserData($user_id); 
            if ($user_data) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['gym_id'] . "</td>";
                echo "<td>" . $user_data['first_name'] . "</td>";
                echo "<td>" . $user_data['last_name'] . "</td>";
                echo "<td>" . $user_data['date_of_birth'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <div>
        <p>Your exercise schedule:</p>
    </div>
    <table>
        <tr>
            <th>Exercise Num:</th>
            <th>Nome Esercizio</th>
            <th>Descrizione Esercizio:</th>
            <th>Numero di serie per Esercizio:</th>
            <th>Numero di ripetizioni per Esercizio:</th>
            <th>Carico da utilizzare per Esercizio:</th>
            <th>Durata per esercizio:</th>
            <th>Note sull'esercizio:</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Push-Up</td>
            <td>Eseguito in posizione prona, ossia con il corpo disteso orizzontalmente e faccia rivolta verso il basso, alzando ed abbassando il corpo tramite le braccia.</td>
            <td>3</td>
            <td>10</td>
            <td>0</td>
            <td>8 minuti</td>
            <td>Da eseguire su tappetino apposito</td>
        </tr>
        <tr>
            <td>2</td>
            <td>PectoralMachine</td>
            <td>Posizionare i gomiti sulla superficie morbida in modo che il braccio sia extraruotato e formi con l'avambraccio un angolo di 90°: tramite spinta il macchinario consente un movimento a croce efficace sulla zona del petto.</td>
            <td>3</td>
            <td>8</td>
            <td>25 KG</td>
            <td>6 minuti</td>
            <td>30 secondi di riposo tra una serie ed un'altra</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tapis Roulant</td>
            <td>Correre o camminare sul Tapis Roulant può aiutare a tonificare i muscoli delle gambe, dei glutei e dell'addome. Aumentare la resistenza. L'allenamento regolare sul Tapis Roulant può aumentare la resistenza fisica e migliorare la capacità di resistere allo sforzo.</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>30 minuti</td>
            <td>Non eccedere nella velocità</td>
        </tr>
    </table>
    <div class="select">
        <p>GYM STUDIO A.S.D. 2023</p>
    </div>
</body>
</html>