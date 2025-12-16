<?php
class Scooter {
    public $kleur, $merk, $inhoudTank;

    public function checkTankStatus() {
        if ($this->inhoudTank == 0) {
            echo "De tank van de {$this->merk} scooter is leeg.<br>";
        } else {
            echo "De tank van de {$this->merk} scooter is niet leeg.<br>";
        }
    }
}

$piago = new Scooter();
$piago->merk = "piago";
$piago->kleur = "rood";
$piago->inhoudTank = 6;

$peugeot = new Scooter();
$peugeot->merk = "peugeot";
$peugeot->kleur = "zwart";
$peugeot->inhoudTank = 7;

$piago->checkTankStatus();
$peugeot->checkTankStatus();
?>
