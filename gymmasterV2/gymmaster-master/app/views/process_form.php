<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $selectedUser = $_POST['selected_user'];
    $selectedExercise = $_POST['selected_exercise'];
    $selectedSeries = $_POST['selected_series'];
    $selectedRepetitions = $_POST['selected_repetitions'];
    $selectedLoad = $_POST['selected_load'];
    $selectedDuration = $_POST['selected_duration'];
    $exerciseNotes = $_POST['exercise_notes'];

    // Database connection details
    $db_host = 'your_db_host';
    $db_name = 'your_db_name';
    $db_user = 'your_db_user';
    $db_password = 'your_db_password';

    try {
        // Create a PDO connection to the database
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert form data into the database
        $stmt = $pdo->prepare("INSERT INTO workout_records (user_id, exercise_id, series, repetitions, load, duration, exercise_notes) VALUES (:user_id, :exercise_id, :series, :repetitions, :load, :duration, :exercise_notes)");

        $stmt->bindParam(':user_id', $selectedUser);
        $stmt->bindParam(':exercise_id', $selectedExercise);
        $stmt->bindParam(':series', $selectedSeries);
        $stmt->bindParam(':repetitions', $selectedRepetitions);
        $stmt->bindParam(':load', $selectedLoad);
        $stmt->bindParam(':duration', $selectedDuration);
        $stmt->bindParam(':exercise_notes', $exerciseNotes);

        $stmt->execute();

        // Redirect back to the form page or another location
        header('Location: form_page.php');
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>