<?php
// Verbind met de database via een extern bestand
require 'database-connectie-crud.php';
 
// Haal alle meldingen op uit de database, gesorteerd van nieuwste naar oudste (DESC = descending)
$stmt = $conn->query("SELECT * FROM te_laat_meldingen ORDER BY id DESC");
 
// Sla de resultaten op in een array zodat we ze in HTML kunnen tonen
$meldingen = $stmt->fetchAll();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Overzicht te laat meldingen</title>
 
    <!-- Voeg Bootstrap CSS toe voor styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <!-- Titel van de pagina -->
    <h1 class="mb-4">Te laat meldingen</h1>
 
    <!-- Knop om een nieuwe melding toe te voegen -->
    <a href="toevoegen.php" class="btn btn-success mb-3">Nieuwe melding toevoegen</a>
 
    <!-- Tabel om alle meldingen netjes te tonen -->
    <table class="table table-bordered table-striped">
        <tr class="table-dark">
            <th>ID</th>
            <th>Naam</th>
            <th>Klas</th>
            <th>Minuten te laat</th>
            <th>Reden</th>
            <th>Acties</th> <!-- Knoppen om melding aan te passen of te verwijderen -->
        </tr>
 
        <!-- Begin van de loop: voor elke melding een nieuwe rij in de tabel -->
        <?php foreach ($meldingen as $melding): ?>
        <tr>
            <!-- Toon de gegevens van elke melding -->
            <td><?= $melding['id'] ?></td>
            <td><?= $melding['student_naam'] ?></td>
            <td><?= $melding['klas'] ?></td>
            <td><?= $melding['minuten_te_laat'] ?></td>
            <td><?= $melding['reden'] ?></td>
            <td>
                <!-- Knop om de melding aan te passen -->
                <a href="update.php?id=<?= $melding['id'] ?>" class="btn btn-warning btn-sm">Aanpassen</a>
 
                <!-- Knop om de melding te verwijderen met bevestiging -->
                <a href="delete.php?id=<?= $melding['id'] ?>" class="btn btn-warning btn-sm"
                   onclick="return confirm('Weet je zeker dat je de melding wilt verwijderen?');">
                   Verwijderen
                </a>
            </td>
        </tr>
        <?php endforeach; ?> <!-- Einde van de loop -->
    </table>
</div>
 
<!-- Bootstrap JavaScript voor interactieve elementen (zoals modals of alerts) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>