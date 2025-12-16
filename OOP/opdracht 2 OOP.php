<?php
class Auto {
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

$nieuweAuto = new Auto();

$nieuweAuto->merk = "Volkswagen";
$nieuweAuto->kleur = "rood";
$nieuweAuto->type = "Golf";
$nieuweAuto->uitvoering = "station";
$nieuweAuto->brandstof = "benzine";

echo "Merk: " . $nieuweAuto->merk . "<br>";
echo "Kleur: " . $nieuweAuto->kleur . "<br>";
echo "Type: " . $nieuweAuto->type . "<br>";
echo "Uitvoering: " . $nieuweAuto->uitvoering . "<br>";
echo "Brandstof: " . $nieuweAuto->brandstof . "<br>";
?>
