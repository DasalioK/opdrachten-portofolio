<?php
class product {
    public $merk;
    public $kleur;
    public $type;
    public $prijs;
}

$product = new Product();

$dweil = new product();
$dweil->merk = "hema";
$dweil->prijs = 10;
$dweil->type = "lang";
$dweil->kleur = "rood";

$stofzuiger = new product();
$stofzuiger->merk = "aegon";
$stofzuiger->prijs = 50;
$stofzuiger->type = "gfs505";
$stofzuiger->kleur = "grijs";

echo "Merk: " . $stofzuiger->merk . "<br>";
echo "Prijs: " . $stofzuiger->prijs . "<br>";
echo "Type: " . $stofzuiger->type . "<br>";
echo "Kleur: " . $stofzuiger->kleur . "<br>";

echo "Merk: " . $dweil->merk . "<br>";
echo "Prijs: " . $dweil->prijs . "<br>";
echo "Type: " . $dweil->type . "<br>";
echo "Kleur: " . $dweil->kleur . "<br>";
?>
