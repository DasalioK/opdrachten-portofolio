<?php

function telGroteGetallen($array) {
    $som = 0;
    foreach ($array as $getal) {
        if ($getal > 10) {
            $som += $getal;
        }
    }
    return $som;
}

$array = [11,11,5,2,12,6,7,8,1,10,9];

echo telGroteGetallen([10,20,20]) . "<br>";  
echo telGroteGetallen([9,10,11]) . "<br>";   
echo telGroteGetallen($array) . "<br>";      

?>
