<?php
include "hlavicka.php";
include "menu.php";

if (isset($_GET["id"])) { // Testujeme, ci je nastavene id
    $id = $_GET["id"];
    if ($id == 1) {
        include "1_ofarme.php";
    }
    elseif ($id == 2) {
        include "2_aktuality.php";
    }
    elseif ($id == 3) {
        include "3_prenajom.php";
    }
    elseif ($id == 4) {
        include "4_vyrobky.php";
    }
    elseif ($id == 5) {
        include "5_napisalionas.php";
    }
    elseif ($id == 6) {
        include "6_fotogaleria.php";
    }
    elseif ($id == 7) {
        include "kontakt.php";
    }
    else {
        include "0_uvod.php";
    }
}
else { // Ak id NIE je nastavene, tak zobrazi 0_uvod.php
    include "0_uvod.php";
}
include "pata.php";
?>
