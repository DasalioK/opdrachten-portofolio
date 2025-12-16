<?php

// Klasse voor de weg met afstand
class Weg {
    public $afstand;

    // Stel de afstand in, minimale waarde is 1
    public function setProperties($afstand) {
        $this->afstand = max($afstand, 1);
    }
}

// Algemene klasse voor voertuigen
class Voertuig {
    protected $speed; // Beschermde eigenschap voor de snelheid van het voertuig, alleen toegankelijk binnen deze klasse en afgeleide klassen.
    protected $tirePressure;// Beschermde eigenschap voor de bandenspanning van het voertuig, alleen toegankelijk binnen deze klasse en afgeleide klassen.

    // Stel snelheid en bandenspanning in, beide minimaal 1
    public function setProperties($speed, $tirePressure) {
        $this->speed = max($speed, 1);
        $this->tirePressure = max($tirePressure, 1);
    }

    // Bereken de reistijd op basis van afstand en snelheid
    public function travelTime($distance) {
        $adjustedSpeed = max($this->speed * ($this->tirePressure / 100), 1);
        return round(($distance / $adjustedSpeed) * 60, 2);  // Tijd in minuten
    }
}

// Fiets is een specifiek type voertuig
class Fiets extends Voertuig {

    // Stel snelheid en bandenspanning in
    public function setProperties($speed, $tirePressure) {
        parent::setProperties($speed, $tirePressure); // Roept de `setProperties` methode van de ouderklasse (`Voertuig`) aan
    }

    // Bereken reistijd voor de fiets
    public function travelTime($distance) {
        return parent::travelTime($distance); // Roept `travelTime` aan van de ouderklasse (`Voertuig`)
    }
}

// Scooter is een voertuig met extra vertraging
class Scooter extends Voertuig {
    private $delay;

    // Stel snelheid en bandenspanning in
    public function setProperties($speed, $tirePressure) {
        parent::setProperties($speed, $tirePressure); // Roept de `setProperties` methode van de ouderklasse (`Voertuig`) aan
    }

    // Stel de vertraging in
    public function setDelay($delay) {
        $this->delay = max($delay, 0);
    }

    // Bereken reistijd inclusief vertraging
    public function travelTime($distance) {
        return parent::travelTime($distance) + $this->delay; // Roept `travelTime` aan van de ouderklasse (`Voertuig`) en voegt de vertraging (`$delay`) toe
    }
}

// Verkrijg waarden uit het formulier of stel standaardwaarden in
$afstand = isset($_POST['weg_afstand']) ? $_POST['weg_afstand'] : 30;
$snelheid_fiets = isset($_POST['snelheid_fiets']) ? $_POST['snelheid_fiets'] : 20;
$bandenspanning_fiets = isset($_POST['bandenspanning_fiets']) ? $_POST['bandenspanning_fiets'] : 50;
$snelheid_scooter = isset($_POST['snelheid_brommer']) ? $_POST['snelheid_brommer'] : 30;
$bandenspanning_scooter = isset($_POST['bandenspanning_brommer']) ? $_POST['bandenspanning_brommer'] : 100;
$vertraging = isset($_POST['vertraging']) ? $_POST['vertraging'] : 0;

// Maak objecten aan en stel de eigenschappen in
$weg = new Weg();
$weg->setProperties($afstand);

$fiets = new Fiets();
$fiets->setProperties($snelheid_fiets, $bandenspanning_fiets);

$scooter = new Scooter();
$scooter->setProperties($snelheid_scooter, $bandenspanning_scooter);
$scooter->setDelay($vertraging);

// Bereken reistijden voor beide voertuigen
$reistijd_fiets = $fiets->travelTime($weg->afstand);
$reistijd_scooter = $scooter->travelTime($weg->afstand);

// Advies op basis van snelste reistijd
$advies = ($reistijd_fiets < $reistijd_scooter) ? "Je kunt het beste met de fiets gaan." : "Je kunt het beste met de scooter gaan.";

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reisadvies</title>
    <style>
        body { background-color: black; color: white; font-family: Arial, sans-serif; }
        h3 { color: red; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid red; }
        th { background-color: red; color: black; }
        td { background-color: black; color: white; padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h3>Reisadvies</h3>
    <table>
        <tr><th>Parameter</th><th>Waarde</th></tr>
        <tr><td>Afstand</td><td><?= htmlspecialchars($weg->afstand) ?></td></tr>
        <tr><td>Vertraging</td><td><?= htmlspecialchars($vertraging) ?></td></tr>
        <tr><td>Ssnelheid fiets</td><td><?= htmlspecialchars($snelheid_fiets) ?></td></tr>
        <tr><td>Snelheid scooter</td><td><?= htmlspecialchars($snelheid_scooter) ?></td></tr>
        <tr><td>Bandenspanning fiets</td><td><?= htmlspecialchars($bandenspanning_fiets) ?></td></tr>
        <tr><td>Bandenspanning scooter</td><td><?= htmlspecialchars($bandenspanning_scooter) ?></td></tr>
        <tr><td>Reistijd fiets</td><td><?= $reistijd_fiets ?> minuten</td></tr>
        <tr><td>Reistijd scooter</td><td><?= $reistijd_scooter ?> minuten</td></tr>
        <tr><td>Advies</td><td><?= $advies ?></td></tr>
    </table>
</body>
</html>