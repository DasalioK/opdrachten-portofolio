<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuwe te laat melding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #343a40; color: white; } /* donkere achtergrond en witte tekst */
        label { color: white; } /* labelkleur */
    </style>
</head>
<body class="container mt-5">

    <h2>Nieuwe te laat melding toevoegen</h2>

    <form action="create.php" method="POST"> <!-- formulier voor nieuwe melding -->
        <div class="mb-3">
            <label for="student_naam">Naam student</label>
            <input type="text" name="student_naam" id="student_naam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="klas">Klas</label>
            <input type="text" name="klas" id="klas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="minuten_te_laat">Minuten te laat</label>
            <input type="number" name="minuten_te_laat" id="minuten_te_laat" class="form-control" required min="0">
        </div>
        <div class="mb-3">
            <label for="reden">Reden te laat</label>
            <textarea name="reden" id="reden" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Opslaan</button> <!-- opslaan knop -->
        <a href="index.php" class="btn btn-secondary">Annuleren</a> <!-- annuleren knop -->
    </form>

</body>
</html>
