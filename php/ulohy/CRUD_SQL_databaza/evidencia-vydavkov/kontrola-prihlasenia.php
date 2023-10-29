<?php
$lifetime = strtotime('+30 minutes', 0);
session_set_cookie_params($lifetime);
session_start();
//echo "pouzivatel_id: ".$_SESSION['pouzivatel_id'];
if (!isset($_SESSION['pouzivatel_id'])) {
    header('Location: prihlasenie.php'); // Automaticky presmeruje stranku na prihlasenie.php
    exit;
}