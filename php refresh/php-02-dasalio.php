<!DOCTYPE html>
<html>
<head>
    <title>Vermenigvuldiging</title>
</head>
<body>
    <h2>Twee getallen vermenigvuldigen</h2>
   
    <form method="get">
        <label for="getal1">Eerste getal:</label>
        <input type="number" id="getal1" name="getal1" required>
        <br><br>
       
        <label for="getal2">Tweede getal:</label>
        <input type="number" id="getal2" name="getal2" required>
        <br><br>
       
        <input type="submit" value="Bereken">
    </form>
 
    <?php
    $getal1 = $_GET['getal1'];
    $getal2 = $_GET['getal2'];
    $resultaat = $getal1 * $getal2;
   
    echo "<h3>" . $getal1 . " x " . $getal2 . " = " . $resultaat . "</h3>";
    ?>
   
</body>
</html>