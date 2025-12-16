<?php

class Lamp {
    public $kleur = "wit";
    public $helderheid = "medium";
    private $isAan = false;

    public function setStatus($status) {
        $this->isAan = $status;
    }

    public function getStatus() {
        return $this->isAan ? "Aan" : "Uit";
    }
}

$woonkamerLamp = new Lamp();
$keukenLamp = new Lamp();

$woonkamerLamp->setStatus(false);
$keukenLamp->setStatus(true);

echo $woonkamerLamp->getStatus();
echo "<br>";
echo $keukenLamp->getStatus();

?>
