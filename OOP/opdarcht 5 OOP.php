<?php
class Dier {
    public $gewicht;
    public $kleur;   // verander naar public
    public $soort;   // verander naar public
    public $leeftijd;
}

class Leeuw extends Dier {
    public $manenGrootte;
    public $territorium;
}

class Hond extends Dier {
    public $ras;
    public $hondenPark;
}

$leeuw1 = new Leeuw();
$leeuw1->gewicht = "190kg";
$leeuw1->kleur = "Geel";
$leeuw1->soort = "Leeuw";
$leeuw1->leeftijd = "8 jaar";
$leeuw1->manenGrootte = "Groot";
$leeuw1->territorium = "Savanne";

$hond1 = new Hond();
$hond1->gewicht = "25kg";   
$hond1->kleur = "Bruin";
$hond1->soort = "Hond";
$hond1->leeftijd = "5 jaar";
$hond1->ras = "Labrador";
$hond1->hondenPark = "Centraal Park";

echo "Soort: " . $leeuw1->soort . "<br>";
echo "Kleur: " . $leeuw1->kleur . "<br>";
echo "Gewicht: " . $leeuw1->gewicht . "<br>";
echo "Leeftijd: " . $leeuw1->leeftijd . "<br>";
echo "Manen Grootte: " . $leeuw1->manenGrootte . "<br>";
echo "Territorium: " . $leeuw1->territorium . "<br>";

echo "<br>";

echo "Soort: " . $hond1->soort . "<br>";
echo "Kleur: " . $hond1->kleur . "<br>";
echo "Gewicht: " . $hond1->gewicht . "<br>";
echo "Leeftijd: " . $hond1->leeftijd . "<br>";
echo "Ras: " . $hond1->ras . "<br>";
echo "Hondenpark: " . $hond1->hondenPark . "<br>";
?>
