<?php

function kleineWoorden($string) {
    $woorden = explode(" ", $string);
    $teller = 0;
    foreach ($woorden as $woord) {
        if (strlen($woord) < 4) {
            $teller++;
        }
    }
    return $teller;
}

$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";

echo kleineWoorden("dit is een voorbeeld") . "<br>";  
echo kleineWoorden("a b c d") . "<br>";               
echo kleineWoorden("abcd") . "<br>";                   
echo kleineWoorden($string) . "<br>";                  

?>
