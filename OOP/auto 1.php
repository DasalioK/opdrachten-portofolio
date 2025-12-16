<?php
class auto {
   
 
public $merk;
public $kleur;
public $type;
public $uitvoering;
public $brandstof;
 
}
 
$nieuweAuto = new auto();
$nogeenandereauto = new auto();
 
class motor {
 
    public $merk;
    public $kleur;
    public $type;
}
 
$nieuweMotor = new motor();
$nogeenandereMotor = new motor();
 
$nieuweAuto->merk = "Toyota";
$nogeenandereMotor->merk = "Yamaha";  
echo $nieuweAuto->merk;
echo "<br>";
echo $nogeenandereMotor->merk;
?>
 
 