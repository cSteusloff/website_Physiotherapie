<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 28.01.14
 * Time: 22:04
 */

?>
<!DOCTYPE html>
<html>
	<head>
		<title>jQuery mobil | HTMLworld</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
        <link rel="stylesheet" href="mobil.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <meta charset="utf-8">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	</head>
	<body>
        <div data-role="page" id="home">
            <div data-role="header" id="header" style="padding-left: 5px">
<!--                <a href="#menupanel" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false" data-corners="true" title="Menu"></a>-->
                Physiotherapie<br>am Gesundbrunnen-Center
            </div>
            <div data-role="content">
                <img src="../picture/praxis.png" style="border-radius: 10px; box-shadow: 0px 0px 10px #808090; max-width: 320px;">
                <div >
                    <ul data-role="listview">
                        <li role="heading">Menu</li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                        <li><a href="../index.php">zur Desktopansicht</a></li>
                    </ul>
                    <h3>Öffnungszeiten</h3>
                    Montag - Mittwoch: 9:00-12:00 Uhr & 13:00 - 16:00 Uhr<br>
                    Donnerstag: geschlossen<br>
                    Freitag: 9:00-12:00 Uhr<br>
                    Samstag, Sonntag: geschlossen<br>
                </div>
                <div >
                    <h3>Kontakt</h3>
                    <i class="fa fa-map-marker icon"></i>Behmstraße 23, 13357 Berlin<br>
                    <i class="fa fa-phone icon"></i>+49 30 49301316<br>
                    <i class="fa fa-envelope-o icon"></i>info@physiotherapie-gesundbrunnen.de<br>
                </div>
            </div>
            <div data-role="panel" data-display="overlay" data-position="left" id="menupanel">
                <ul data-role="listview">
                    <li role="heading">Menu</li>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="../index.php">zur Desktopansicht</a></li>
                </ul>
            </div>




            <div data-role="footer">
                <h5>Footer</h5>
            </div>
        </div>
    </body>
</html>