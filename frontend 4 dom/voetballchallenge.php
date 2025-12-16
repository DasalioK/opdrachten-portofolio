<?php

// Uitslagen van wedstrijden
$uitslagen = [
    ['thuis' => 'Feyenoord', 'uit' => 'FC Twente', 'uitslag'=> [1,2] ],
    ['thuis' => 'AZ', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,3] ],
    ['thuis' => 'PEC Zwolle', 'uit' => 'PSV', 'uitslag'=> [1,2] ],
    ['thuis' => 'Heracles Almelo', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,3] ],
    ['thuis' => 'sc Heerenveen', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [3,1] ],
    ['thuis' => 'FC Groningen', 'uit' => 'SC Cambuur', 'uitslag'=> [2,3] ],
    ['thuis' => 'Vitesse', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
    ['thuis' => 'Willem I', 'uit' => 'FC Utrecht', 'uitslag'=> [3,0] ],
    ['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,1] ],
];

// Tabel met uitslagen weergeven
echo "<table border=1><tr><th>Thuis</th><th>Uit</th><th>Thuis Score</th><th>Uit Score</th></tr>";
foreach ($uitslagen as $u) {
    echo "<tr><td>{$u['thuis']}</td><td>{$u['uit']}</td><td>{$u['uitslag'][0]}</td><td>{$u['uitslag'][1]}</td></tr>";
}
echo "</table>";

// Initieer arrays voor punten en gespeelde wedstrijden
$punten = $gespeeld = [];
foreach ($uitslagen as $u) {
    $punten[$u['thuis']] = $punten[$u['uit']] = 0;
    $gespeeld[$u['thuis']] = $gespeeld[$u['uit']] = 0;
}

// Bereken punten en aantal gespeelde wedstrijden
foreach ($uitslagen as $u) {
    $thuis = $u['thuis'];
    $uit = $u['uit'];
    $gespeeld[$thuis]++; $gespeeld[$uit]++;
    
    if ($u['uitslag'][0] > $u['uitslag'][1]) {
        $punten[$thuis] += 3;
    } elseif ($u['uitslag'][0] < $u['uitslag'][1]) {
        $punten[$uit] += 3;
    } else {
        $punten[$thuis]++; $punten[$uit]++;
    }
}

// Tabel met competitie stand weergeven
echo "<table border=1><tr><th>Club</th><th>Punten</th><th>Gespeeld</th></tr>";
foreach ($punten as $club => $score) {
    echo "<tr><td>$club</td><td>$score</td><td>{$gespeeld[$club]}</td></tr>";
}
echo "</table>";

?>
