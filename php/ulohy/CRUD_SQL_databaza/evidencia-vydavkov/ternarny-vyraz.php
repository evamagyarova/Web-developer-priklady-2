<?php

$vek = 15;

if ($vek >= 18) {
    echo "Máš 18 a viac!";
} else {
    echo "Si dieťa!";
}

// Ternarny vyraz
echo "<br>";
echo "Spôsob porovnania hodnot môžeme urobiť aj cez ternárny výraz:";
echo "<br>";
echo $vek>=18?"Máš 18 a viac!":"Si dieťa";

echo "<br>";
$kategoria = "PHM";
echo $kategoria == "Potraviny" ? "selected": "";