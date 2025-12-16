<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Loops voorbeeld</title>
</head>
<body>

<h3>For loop:</h3>
<?php
for ($i = 1; $i <= 20; $i++) {
    echo '<span style="color: red; font-weight: bold;">' . $i . '</span>';
    if ($i < 20) {
        echo ' - ';
    }
}
?>

<h3>While loop:</h3>
<?php
$j = 1;
while ($j <= 20) {
    echo '<span style="color: red; font-weight: bold;">' . $j . '</span>';
    if ($j < 20) {
        echo ' - ';
    }
    $j++;
}
?>

</body>
</html>
