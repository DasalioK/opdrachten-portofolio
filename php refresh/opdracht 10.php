<?php

function breekAf($maxLengte, $string) {
    if (strlen($string) <= $maxLengte) return $string;

    $woorden = str_word_count($string, 1);
    $output = "";

    foreach ($woorden as $woord) {
        $test = ($output === "") ? $woord : $output . " " . $woord;
        if (strlen($test) <= $maxLengte) {
            $output = $test;
        } else {
            break;
        }
    }

    return $output;
}

echo breekAf(32, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(18, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(19, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(20, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(11, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(24, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(3, "Deze student is erg goed in programmeren in PHP") . "<br>";
echo breekAf(200, "Deze student is erg goed in programmeren in PHP") . "<br>";

?>
