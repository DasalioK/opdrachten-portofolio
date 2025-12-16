<?php
// Class Auto
class Auto {
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

// Eerste auto-object
$nieuwAuto = new Auto();
$nieuwAuto->merk = "Tesla";
$nieuwAuto->kleur = "Rood";
$nieuwAuto->type = "Model S";
$nieuwAuto->uitvoering = "Sedan";
$nieuwAuto->brandstof = "Elektrisch";

// Tweede auto-object
$nogEenAndereAuto = new Auto();
$nogEenAndereAuto->merk = "BMW";
$nogEenAndereAuto->kleur = "Blauw";
$nogEenAndereAuto->type = "X5";
$nogEenAndereAuto->uitvoering = "SUV";
$nogEenAndereAuto->brandstof = "Benzine";

// Auto's weergeven met de juiste syntax voor weergave
echo "Auto 1: " . $nieuwAuto->merk . ", " . $nieuwAuto->kleur . ", " . $nieuwAuto->type . ", " . $nieuwAuto->uitvoering . ", " . $nieuwAuto->brandstof . "<br>";
echo "Auto 2: " . $nogEenAndereAuto->merk . ", " . $nogEenAndereAuto->kleur . ", " . $nogEenAndereAuto->type . ", " . $nogEenAndereAuto->uitvoering . ", " . $nogEenAndereAuto->brandstof . "<br>";
?>
