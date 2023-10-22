<?php
// TODO Vytvorte funkcie aj pre odcitanie, nasobenie a delenie s tym, ze vysledky zobrazi (farebne odlisene)
function scitaj($cis1, $cis2) {
    return $cis1 + $cis2;
}
function odcitaj($cis1, $cis2) {
    return $cis1 - $cis2;
}

function nasob($cis1, $cis2) {
    return $cis1 * $cis2;
}

function vydel($cis1, $cis2) {
    return $cis1 / $cis2;
}


$cislo1 = 2.3;
$cislo2 = 3;
$sucet = scitaj($cislo1, $cislo2);
$odcitaj = odcitaj($cislo1, $cislo2);
$nasob = nasob($cislo1, $cislo2);
$vydel = vydel($cislo1, $cislo2);
//echo "Výsledok sčítania hodnôt ".$cislo1." a ".$cislo2."  je: ".$sucet;
//echo "<br><span style='color: blue'>Výsledok sčítania hodnôt $cislo1 a $cislo2 je: $sucet</span>";
echo "<br><span style='color: blue'>Výsledok sčítania hodnôt $cislo1 a $cislo2 je: ".scitaj($cislo1, $cislo2)."</span>";
echo "<br><span style='color: orange'>Výsledok odčítania hodnôt $cislo1 a $cislo2 je: $odcitaj</span>";
echo "<br><span style='color: green'>Výsledok násobenia hodnôt $cislo1 a $cislo2 je: $nasob</span>";
echo "<br><span style='color: red'>Výsledok delenia hodnôt $cislo1 a $cislo2 je: $vydel</span>";

