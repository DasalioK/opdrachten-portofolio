<?php
require 'database-connectiecrudchallange-[Dasalio].php'; // database verbinding

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // als formulier is verzonden
    $id = $_POST['id'];
    $student_naam = $_POST['student_naam'];
    $klas = $_POST['klas'];
    $minuten_te_laat = $_POST['minuten_te_laat'];
    $reden = $_POST['reden'];

    $sql = "UPDATE te_laat_meldingen 
            SET student_naam = '$student_naam', 
                klas = '$klas', 
                minuten_te_laat = $minuten_te_laat, 
                reden = '$reden' 
            WHERE id = $id";

    $conn->exec($sql); // query uitvoeren

    require 'index.php'; // terug naar overzicht
    exit;
} else if (isset($_GET['id'])) { // als id is meegegeven
    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM te_laat_meldingen WHERE id = $id"); // melding ophalen
    $melding = $result->fetch();

    if (!$melding) {
        echo "Melding niet gevonden."; // foutmelding
        exit;
    }
} else {
    echo "Geen ID opgegeven."; // foutmelding
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Melding aanpassen</title>
</head>
<body>
<h1>Melding aanpassen</h1>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $melding['id'] ?>">
    Naam:<br>
    <input type="text" name="student_naam" value="<?= $melding['student_naam'] ?>"><br><br>

    Klas:<br>
    <input type="text" name="klas" value="<?= $melding['klas'] ?>"><br><br>

    Minuten te laat:<br>
    <input type="number" name="minuten_te_laat" min="0" value="<?= $melding['minuten_te_laat'] ?>"><br><br>

    Reden:<br>
    <input type="text" name="reden" value="<?= $melding['reden'] ?>"><br><br>

    <button type="submit">Update</button>
</form>

<p><a href="index.php">Terug naar overzicht</a></p>
</body>
</html>

