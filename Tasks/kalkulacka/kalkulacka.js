/*TODO Vyriesit problem pri matematickych operaciach s desatinnymi cisla, ktore obsahuju desatinnu ciarku, zhodnotenie o 20.00*/
function scitaj() {
    var cislo1 = parseFloat(document.getElementById("cislo1").value);
    var cislo2 = parseFloat(document.getElementById("cislo2").value);
    var vysledok = cislo1 + cislo2;
    document.getElementById("vysledok").value = vysledok.toFixed(2);
}


function odcitaj() {
    var cislo1 = parseFloat(document.getElementById("cislo1").value);
    var cislo2 = parseFloat(document.getElementById("cislo2").value);
    var vysledok = cislo1 - cislo2;
    document.getElementById("vysledok").value = vysledok.toFixed(2);
}

function nasob() {
    var cislo1 = parseFloat(document.getElementById("cislo1").value);
    var cislo2 = parseFloat(document.getElementById("cislo2").value);
    var vysledok = cislo1 * cislo2;
    document.getElementById("vysledok").value = vysledok.toFixed(2);
}

function del() {
    var cislo1 = parseFloat(document.getElementById("cislo1").value);
    var cislo2 = parseFloat(document.getElementById("cislo2").value);
    var vysledok = cislo1 / cislo2;
    document.getElementById("vysledok").value = vysledok.toFixed(2);
}
