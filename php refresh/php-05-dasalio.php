<?php

function netEuro($bedrag) {
    $result = '€ ' . number_format($bedrag, 2, '.', '');
    return $result;
}

echo netEuro(12) . "<br>";
echo netEuro(12.5) . "<br>";
echo netEuro(12.6666) . "<br>";

?>
