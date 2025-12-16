<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Tijd met automatische refresh</title>
    <meta http-equiv="refresh" content="10">
</head>
<body>

<h2>De huidige tijd is:</h2>
<p style="font-size: 24px; font-weight: bold;">
    <?php
    echo date("H:i");
    ?>
</p>

<p>Deze pagina ververst zichzelf automatisch elke 10 seconden.</p>

</body>
</html>
