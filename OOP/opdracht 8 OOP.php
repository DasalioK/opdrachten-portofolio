<?php
class Robot{
    private $naam;
    private $geluid;
    private $voortstuwing;
 
    public function setNaam($naam){
        $this->naam = $naam;
    }
 
    public function setGeluid($geluid){
        $this->geluid = $geluid;
    }
 
    public function setVoortstuwing($voortstuwing){
        $this->voortstuwing = $voortstuwing;
    }
 
    public function getNaam(){
        return $this->naam;
    }
 
    public function getGeluid(){
        return $this->geluid;
    }
 
    public function getVoortstuwing(){
        return $this->voortstuwing;
    }
}
 
$robo1 = new Robot();
$robo1->setNaam("Optimus");
$robo1->setGeluid("Beeep Boop");
$robo1->setVoortstuwing("lopend");
 
$robo2 = new Robot();
$robo2->setNaam("Megabot");
$robo2->setGeluid("Whirr Whizz");
$robo2->setVoortstuwing("vliegend");
 
echo $robo1->getNaam() . "<br>";
echo $robo1->getGeluid() . "<br>";
echo $robo1->getVoortstuwing() . "<br>";
echo "<br>";
echo $robo2->getNaam() . "<br>";
echo $robo2->getGeluid() . "<br>";
echo $robo2->getVoortstuwing() . "<br>";
?>
