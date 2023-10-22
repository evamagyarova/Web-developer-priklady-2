<?php
/*
Úloha č.1: Príklad na prácu s premennými
Vypíšte na stránku nasledujúci text:
Študent Jozef Mrkvička sa narodil 03.04.2000, z maturitnej skúšky má známku 1.5 a od septembra 2022 nastúpi do nového zamestnania ako PHP programátor.
V Bratislave dňa 18.06.2022
Poznámka: Dátum narodenia, známku a rok + aktuálny dátum nastavte tak, aby sa dali meniť v zdrojovom kóde (t.j. cez premenné).
Bonusová úloha: Naformátujte text farebne a “tučne” podľa vzoru.
*/
//setlocale(LC_ALL, null);
setlocale(LC_ALL, 'sk_SK.utf8'); // Nastavte lokalizáciu na slovenčinu s UTF-8 kódovaním
//var_dump(setlocale(LC_ALL, 'sk_SK'));

$datum_narodenia = "03.04.2000"; // AltGr + ô reprezentuje $
$znamka = 1.5;
//$znamka = str_replace('.', ',', $znamka); // Nahradi desatinnu bodku za ciarku, apostrof ' vlozite cez AltGr + P
$od_kedy = "septembra 2022";

echo "<span style='color: darkred;'>Študent Jozef Mrkvička sa narodil </span><span style='color: red; font-weight: bold;'>".$datum_narodenia."</span>";
echo "<span style='color: orange;'>, z maturitnej skúšky má známku </span>".$znamka;
echo " a od ".$od_kedy;
echo " nastúpi do nového zamestnania ako PHP programátor.";
echo "<br>V Bratislave dňa ".date("d.m.Y");


echo "<br>Študent Jozef Mrkvička sa narodil ".$datum_narodenia.", z maturitnej skúšky má známku ".$znamka." a od ".$od_kedy." nastúpi do nového zamestnania ako PHP programátor.<br>V Bratislave dňa ".date("d.m.Y");

