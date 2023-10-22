<h1>Kontaktujte nás</h1>

<?php
if (isset($_POST["Odoslany"])) {
    $vase_meno = $_POST["meno"];
    echo "<p><b>Ďakujeme, že ste nám napísali. Odpovieme do 24 hodín. Zhrnutie formulára posielame nižšie. </b></p>";
    echo "<br>Vaše meno je: " . $vase_meno;

    $vas_email = $_POST["email"];
    echo "<br>Váš e-mail, na ktOrý vám zašleme odpoveď, je: " . $vas_email;

    $vas_telefon = $_POST["phone"];
    echo "<br>Váš telefón je: " . $vas_telefon;

    $statna_prislusnost = $_POST["slovensko"];
    $statna_prislusnost_text = ($statna_prislusnost === "ano") ? "Áno" : "Nie"; //tu som si pomohla AI
    echo "<br> Ste občanom Slovenskej republiky? " . $statna_prislusnost_text;

    $vasa_sprava = $_POST["sprava"];
    echo "<br> Vaša správa pre nás je: " . $vasa_sprava;
}

else{
?>

<form action="#" method="POST" id="kontakt-formular">
    <label for="meno">Vaše meno:</label>
    <input type="text" name="meno" id="meno"><br>
    <label for="email">Váš e-mail:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="phone">Vaše telefónne číslo:</label>
    <input type="tel" name="phone" id="phone"><br>
    <label for="slovensko">Ste občanom Slovenskej republiky?</label>
    <input type="radio" name="slovensko" value="ano" id="slovensko"> Áno
    <input type="radio" name="slovensko" value="nie" id="slovensko"> Nie
    <br>
    <label for="sprava">Zanechajte nám vašu otázku alebo správu tu:</label>
    <textarea cols="100" rows="20" name="sprava" id="sprava"></textarea>
    <br>
    <input type="submit" value="Odoslať" name="Odoslany">
</form>
<?php
}
?>


