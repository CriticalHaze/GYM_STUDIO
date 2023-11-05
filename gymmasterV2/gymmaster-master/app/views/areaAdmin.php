<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your meta and CSS links here -->
</head>
<body>
    <img src="logo.jpg" alt="Description of the image">
    <h1>GYM STUDIO MOBILE MANAGER</h1>

    <!-- Create a form with method="post" for data submission -->
    <form method="post" action="process_form.php">
        <!-- Dropdown menu for selecting the user (you can populate it dynamically) -->
        <select class="dropdown-select" name="selected_user">
            <option disabled selected>Seleziona un utente</option>
            <option value="1">Ornella Ambrosino</option>
            <option value="2">Marco Di Domenico</option>
            <option value="3">Luigi Riccardis</option>
            <!-- Add more users as needed -->
        </select>

        <!-- Dropdown menu for assigning an exercise (populate from the database) -->
        <select class="dropdown-select" name="selected_exercise">
            <option disabled selected>Assegna un esercizio</option>
            <!-- Here, you can use PHP to populate options from the database -->
            <?php
            // Replace with your database connection and query to fetch exercises
            $db_host = 'your_db_host';
            $db_name = 'your_db_name';
            $db_user = 'your_db_user';
            $db_password = 'your_db_password';

            try {
                $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Fetch exercises from the database
                $stmt = $pdo->prepare("SELECT id, name FROM exercises");
                $stmt->execute();
                $exercises = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($exercises as $exercise) {
                    echo '<option value="' . $exercise['id'] . '">' . $exercise['name'] . '</option>';
                }
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
            ?>
        </select>

        <!-- Dynamically populate dropdown menus for series, repetitions, load, and duration -->
        <?php
        $series = [1, 2, 3, 4, 5];
        $repetitions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $load = [2, 4, 5, 6, 8, 10, 12, 15, 18, 20, 25, 28, 30, 35];
        $durations = [5, 10, 15, 20, 25, 30, 40];
        ?>

        <select class="dropdown-select" name="selected_series">
            <option disabled selected>Seleziona il numero di serie</option>
            <?php
            foreach ($series as $value) {
                echo '<option value="' . $value . '">' . $value . '</option>';
            }
            ?>
        </select>

        <select class="dropdown-select" name="selected_repetitions">
            <option disabled selected>Seleziona il numero di ripetizioni</option>
            <?php
            foreach ($repetitions as $value) {
                echo '<option value="' . $value . '">' . $value . '</option>';
            }
            ?>
        </select>

        <select class="dropdown-select" name="selected_load">
            <option disabled selected>Seleziona il carico da utilizzare</option>
            <?php
            foreach ($load as $value) {
                echo '<option value="' . $value . '">' . $value . ' KG</option>';
            }
            ?>
        </select>

        <select class="dropdown-select" name="selected_duration">
            <option disabled selected>Seleziona la durata dell'esercizio</option>
            <?php
            foreach ($durations as $value) {
                echo '<option value="' . $value . '">' . $value . ' min</option>';
            }
            ?>
        </select>

        <!-- Text input for exercise notes -->
        <label for="exercise_notes">Note per l'esercizio:</label>
        <input type="text" id="exercise_notes" name="exercise_notes" class="form-control" style="width: 50%; height: 60px;">

        <!-- Submit button to save data -->
        <button type="submit" class="btn btn-primary submit-button">SUBMIT</button>
    </form>

    <div class="select">
        <p>GYM STUDIO A.S.D. 2023</p>
    </div>
</body>
</html>
