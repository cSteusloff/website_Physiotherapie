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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
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
            <a class="navbar-brand" href=""><h2 id="physio"><span class="color_red">Physiotherapie</span><br> <span
                        class="color_black">am Gesundbrunnen-Center</span></h2></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">
                        <button id="loginbutton" type="button" class="btn btn-primary narbar-btn">Startseite</button>
                    </a></li>
                <li><a href="sites/therapie.php">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Therapie</button>
                    </a></li>
                <li><a href="sites/praxis.php">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Praxis</button>
                    </a></li>
                <li><a href="sites/kontakt.php">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Kontakt</button>
                    </a></li>
            </ul>
        </div>
    </div>

    <div id="banner">
        <h1 id="welcome">Willkommen!</h1>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6 pad-right-0">
            <img src="picture/praxis.png" class="img-responsive" alt="Praxis">
        </div>
        <div class="col-xs-12 col-md-6 pad-left-0">
            <img src="picture/empfang.png" class="img-responsive hidden-xs" alt="Praxis">
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-1 hidden-xs"></div>
        <div class="col-lg-3 col-xs-12">
            <div id="hoursofopening" class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Öffnungszeiten</h3>
                </div>
                <div class="panel-body">
                    Montag - Freitag: 9:00 - 19:00 Uhr<br><br><br>
                    Hausbesuche nach Vereinbarung
                </div>
            </div>
        </div>
		
		<div class="col-lg-3">
			<img src="picture/sitzend2.png">
		</div>

        <div class="col-lg-4 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kontakt</h3>
                </div>
                <div class="panel-body">
                    <i class="fa fa-map-marker circle"></i>Behmstraße 23, 13357 Berlin<br><br><br>
                    <i class="fa fa-phone circle"></i>(030) 49 301 316<br><br><br>
                    <i class="fa fa-envelope-o circle"></i>physiotherapie-gesundbrunnen@web.de<br><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-1 hidden-xs"></div>
    </div>


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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>