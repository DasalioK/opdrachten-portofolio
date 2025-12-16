<?php
require 'database-connectiecrudchallange-[Dasalio].php'; // database verbinding

if (isset($_GET['id'])) { // controleer of id is meegegeven
    $id = $_GET['id']; // id uit url

    // query voorbereiden en uitvoeren
    $sql = "DELETE FROM te_laat_meldingen WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]);

    header('Location: index.php'); // terug naar overzicht
    exit;
} else {
    echo "Geen ID opgegeven."; // foutmelding
}
?>
