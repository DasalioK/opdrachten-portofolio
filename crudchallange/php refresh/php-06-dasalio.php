<?php

function onvoldoendes($array) {
    $result = [];
    foreach ($array as $cijfer) {
        if ($cijfer < 6) {
            $result[] = $cijfer;
        }
    }
    return $result;
}

$PHPCijfers = [4,5,4,5,6,6,5,8,7,6,4,8];

echo "<pre>";
print_r(onvoldoendes([6,6,7]));      
print_r(onvoldoendes([6,3,6,7]));    
print_r(onvoldoendes($PHPCijfers));  
echo "</pre>";

?>
