<!--<p>Vyberte si:</p>-->
<!--<a href="?id=0">úvod</a>-->
<!--<a href="?id=1">O farme</a>-->
<!--<a href="?id=2">Aktuality</a>-->
<!--<a href="?id=3">Možnosť prenájmu</a>-->
<!--<a href="?id=4">Výrobky</a>-->
<!--<a href="?id=5">Napísali o nás</a>-->
<!--<a href="?id=6">Fotogaléria</a>-->
<!--<a href="?id=7">Kontaktujte nás</a>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vyberte si</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: purple;
            display: flex;
            justify-content: stretch;
            align-items: center;
            padding: 10px;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .bar {
            width: 30px;
            height: 3px;
            background-color: white;
            margin: 3px 0;
            transition: 0.4s;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            display: flex;
        }

        .menu li {
            padding: 10px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        @media screen and (max-width: 600px) {
            .menu ul {
                display: none;
            }

            .menu.active ul {
                display: flex;
                flex-direction: column;
                background-color: purple;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                padding: 10px;
            }

            .menu-toggle {
                display: flex;
            }

            .menu-toggle.active .bar:nth-child(1) {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .menu-toggle.active .bar:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active .bar:nth-child(3) {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }
    </style>

</head>
<body>
<div class="header">
    <div class="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
<!--        <div class="bar"></div>-->
<!--        <div class="bar"></div>-->
<!--        <div class="bar"></div>-->
<!--        <div class="bar"></div>-->
<!--        <div class="bar"></div>-->
    </div>
    <nav class="menu">
        <ul>
            <li><a href="?id=0">Úvod</a></li>
            <li><a href="?id=1">O farme</a></li>
            <li><a href="?id=2">Aktuality</a></li>
            <li><a href="?id=3">Možnosť prenájmu</a></li>
            <li><a href="?id=4">Výrobky</a></li>
            <li><a href="?id=5">Napísali o nás</a></li>
            <li><a href="?id=6">Fotogaléria</a></li>
            <li><a href="?id=7">Kontakujte nás</a></li>
        </ul>
    </nav>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.querySelector(".menu-toggle");
        const menu = document.querySelector(".menu");

        menuToggle.addEventListener("click", function () {
            menu.classList.toggle("active");
            menuToggle.classList.toggle("active");
        });
    });
</script>
</body>
</html>