<?php

function begroeting($naam) {
    // Huidig uur ophalen als getal (0-23)
    $uur = date("H");
    
    // Voor testen kun je tijdelijk een vaste waarde gebruiken, bijvoorbeeld:
    // $uur = 16;  // haal de commentaar weg om te testen
    
    if ($uur < 12) {
        $boodschap = "Goedemorgen";
    } elseif ($uur >= 12 && $uur < 18) {
        $boodschap = "Goedemiddag";
    } else {
        $boodschap = "Goedenavond";
    }
    
    // Combineer boodschap met naam
    $resultaat = $boodschap . " " . $naam;
    return $resultaat;
}

// Testcases (je kunt het uur aanpassen binnen de functie om te testen)
echo begroeting("Vasco") . "<br>";
echo begroeting("Jesse") . "<br>";
echo begroeting("Nadir") . "<br>";

?>
