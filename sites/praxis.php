<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 30.01.14
 * Time: 12:50
 */

// Bootstrap 3.0 -> mobile first

// responsive images
// <img src="..." class="img-responsive" alt="Responsive image">

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--    mobile Device like native app  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
</head>
<body>


<div class="container-fluid">
    <div class="header navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php"><h2 id="physio"><span class="maincolor">Physiotherapie</span><br> <span
                        class="grey_font">am Gesundbrunnen-Center</span></h2></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Startseite</button>
                    </a></li>
                <li><a href="therapie.php">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Therapie</button>
                    </a></li>
                <li><a href="praxis.php">
                        <button id="loginbutton" type="button" class="btn btn-primary narbar-btn">Praxis</button>
                    </a></li>
                <li><a href="kontakt.php">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Kontakt</button>
                    </a></li>
            </ul>
        </div>
    </div>

    <div id="banner">
        <h1 class="bannertitle">Praxis</h1>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-4 pad-right-0">
            <img src="../picture/praxis.png" class="img-responsive" alt="Praxis">
        </div>
        <div class="col-xs-4 pad-0">
            <img src="../picture/empfang.png" class="img-responsive hidden-xs" alt="Praxis">
        </div>
        <div class="col-xs-4 pad-left-0">
            <img src="../picture/praxis.png" class="img-responsive hidden-xs" alt="Praxis">
        </div>
    </div>
    <div class="col-lg-1 hidden-xs"></div>
    <br>
    <div class="row">
        <div class="col-lg-1 hidden-xs"></div>
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Unsere Räumlichkeiten</h3>
                </div>
                <div class="panel-body">
                    Als qualifiziertes Team erfahrener Physiotherapeuten heißen wir Sie in unseren modernen und
                    individuell gestalteten Praxisräumen willkommen.<br><br>
                    Unsere Praxiseinrichtung ist nach dem aktuellsten technischen Stand der Physiotherapie
                    eingerichtet. Das Ambiente der Therapieräume vermittelt Ruhe und verhilft Ihnen zu einer
                    entspannten Behandlung. <br><br>
                    Um gemeinsam mit Ihnen die bestmöglichen Erfolge zu erreichen, Ihre Beschwerden zu heilen
                    oder zu lindern, sind unsere Behandlungen individuell auf den Patienten abgestimmt.<br><br>
                    Sollten Sie nicht über die notwendige Mobilität verfügen, bieten wir Behandlungen auch gern
                    im Rahmen von Hausbesuchen an. Sie benötigen dazu lediglich eine ärztliche Verordnung für
                    Hausbesuche.

                </div>
            </div>
        </div>
        <div class="col-sm-1 hidden-xs"></div>
		<div class="col-xs-4 col-sm-2">
			<img src="../picture/sitzend1.png">
		</div>
    </div>
</div>

<br><br>
<footer>
    <ul id="info">
        <li>Physiotherapie am Gesundbrunnen-Center</li>
        <li>Behmstraße 23, 13357 Berlin</li>
        <li>Tel. 030 49 301 316</li>
    </ul>
    <ul id="copyright">
        <li>&copy; 2014</li>
        <li><a href="http://submit-ev.de">submit e.V.</a></li>
        <li><a href="#">Impressum</a></li>
        <li>Kontakt</li>
    </ul>
</footer>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>