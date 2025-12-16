<?php
require 'database-connectiecrudchallange-[Dasalio].php'; // database verbinding

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // als formulier is verzonden
    $student_naam = $_POST['student_naam']; // naam uit formulier
    $klas = $_POST['klas']; // klas uit formulier
    $minuten_te_laat = $_POST['minuten_te_laat']; // minuten uit formulier
    $reden = $_POST['reden']; // reden uit formulier

    // query voorbereiden en uitvoeren
    $sql = "INSERT INTO te_laat_meldingen (student_naam, klas, minuten_te_laat, reden)
            VALUES (:student_naam, :klas, :minuten_te_laat, :reden)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':student_naam' => $student_naam,
        ':klas' => $klas,
        ':minuten_te_laat' => $minuten_te_laat,
        ':reden' => $reden
    ]);
    require 'index.php'; // terug naar overzicht
} else {
    echo "Geen te laat melding verzonden."; // foutmelding
}
?>