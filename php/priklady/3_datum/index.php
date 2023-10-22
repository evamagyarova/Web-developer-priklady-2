<?php
include "hlavicka.php"; //namiesto include sa dá dať aj require, ale to tam vtedy musí byť, takto môže, ale pôjde to aj bez toho
echo "Dobrý deň, presný čas: ";
date_default_timezone_set("Europe/Bratislava");
// echo date("H:i:s"); //to isté ako echo date("H:i:s", 3_time());
echo date("F j, Y, g:i a");
include "patka.php";
?>

