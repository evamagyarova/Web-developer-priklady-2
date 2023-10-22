<?php
include "hlavicka.php";
echo "Dobrý deň, presný čas ako timestamp: ";
date_default_timezone_set("Europe/Bratislava");
$casova_peciatka = time();
$naformatovany_cas = date("H:i:s", $casova_peciatka); // Formát: hodiny:minúty:sekundy
echo $naformatovany_cas;
include "patka.php";
?>