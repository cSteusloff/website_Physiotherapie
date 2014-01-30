<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 22.01.14
 * Time: 21:08
 */
?>
<!doctype html>
<html>
<head>
    <title>Physiotherapie am Gesundbrunnen-Center</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <meta charset="utf-8">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-scrollto.js" type="text/javascript"></script>
    <script>
        // old IE-Browser
        document.createElement("header");
        document.createElement("nav");
        document.createElement("section");
        document.createElement("footer");
    </script>
    <script>
        $(document).ready(function(){
            $(".togglecontent").hide();
            $(".toggle").click(function(){
                $(".togglecontent").toggle("slow","swing",function(){
                    $('#endofsite').ScrollTo({
                        duration: 1000,
                        easing: 'linear'
                    });
                });
            });
        });
    </script>
</head>
<body>

<div id="wrapper_site">
    <header>
        <h2><span class="maincolor">Physiotherapie</span><br>
            am Gesundbrunnen-Center
        </h2>
    </header>

    <nav>
        <ul class="nav_container">
            <li><a href="" class="button">Startseite</a></li>
            <li><a href="" class="button">Therapie</a></li>
            <li><a href="" class="button">Praxis</a></li>
            <li><a href="" class="button">Kontakt</a></li>
        </ul>
    </nav>
<section>
    <div id="banner">
        <h1>Willkommen</h1>
    </div>
    <div id="picture">
        <img src="picture/praxis.png" width="50%"><img src="picture/empfang.png" width="50%">
    </div>
    <div id="content">
        <div id="opening">
            <h3>Öffnungszeiten</h3>
            Montag - Mittwoch: 9:00-12:00 Uhr & 13:00 - 16:00 Uhr<br>
            Donnerstag: geschlossen<br>
            Freitag: 9:00-12:00 Uhr<br>
            Samstag, Sonntag: geschlossen<br>
        </div>
        <div id="contact">
            <h3>Kontakt</h3>
            <i class="fa fa-map-marker icon"></i>Behmstraße 23, 13357 Berlin<br>
            <i class="fa fa-phone icon"></i>+49 30 49301316<br>
            <i class="fa fa-envelope-o icon"></i>info@physiotherapie-gesundbrunnen.de<br>
        </div>
    </div>
</section>
<footer>
    <ul id="info">
        <li>Physiotherapie am Gesundbrunnen-Center</li>
        <li>Behmstraße 23, 13357 Berlin</li>
        <li>Rita Seidler & Andrea Klonz</li>
    </ul>
    <ul id="copyright">
        <li>&copy; 2014</li>
        <li><a href="http://submit-ev.de">submit e.V.</a></li>
        <li><a class="toggle">Impressum</a></li>
        <li>Kontakt</li>
    </ul>
    <div class="togglecontent">
        Physiotherapie am Gesundbrunnen-Center<br>
        Behmstraße 23<br>
        13357 Berlin<br>
        Tel.: +49 30 49301316<br>
        E-Mail: info@physiotherapie-gesundbrunnen.de<br>
        Web: http://www.physiotherapie-gesundbrunnen.de<br>
        Geschäftsführer : Rita Seidler & Andrea Klonz<br>
        Handelsregister :<br>
        Umsatzsteuer-Identifikationsnummer<br>
        Inhaltlich Verantwortlicher gemäß §10 Absatz 3 MDStV: Name (Anschrift s.o.)<br>
    </div>
    <span id="endofsite"></span>
</footer>
</div>
</body>
</html>

