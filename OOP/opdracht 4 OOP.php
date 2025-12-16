<?php
class Computer {
    public $merk;
    private $hdd_capacity;
    private $memory;

    public function setHddCapacity($capacity) {
        $this->hdd_capacity = $capacity;
    }

    public function getHddCapacity() {
        return $this->hdd_capacity;
    }

    public function setMemory($memory) {
        $this->memory = $memory;
    }

    public function getMemory() {
        return $this->memory;
    }
}

$computer1 = new Computer();
$computer1->merk = "Dell";
$computer1->setHddCapacity("1TB");
$computer1->setMemory("16GB");

$computer2 = new Computer();
$computer2->merk = "HP";
$computer2->setHddCapacity("500GB");
$computer2->setMemory("8GB");

echo "Merk: " . $computer1->merk . "<br>";
echo "HDD Capaciteit: " . $computer1->getHddCapacity() . "<br>";
echo "Geheugen: " . $computer1->getMemory() . "<br>";

echo "<br>";

echo "Merk: " . $computer2->merk . "<br>";
echo "HDD Capaciteit: " . $computer2->getHddCapacity() . "<br>";
echo "Geheugen: " . $computer2->getMemory() . "<br>";
?>
