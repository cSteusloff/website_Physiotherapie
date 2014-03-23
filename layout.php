<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 09.03.14
 * Time: 14:25
 */

require_once('template.php');

$start = 'Startseite';
$links = array('Startseite','Therapie','Praxis','Kontakt');


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo (isset($TPL->pageTitle)) ? $TPL->pageTitle : ""?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--    mobile Device like native app  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <?php echo (isset($TPL->contentHead)) ? $TPL->contentHead : ""?>
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
            <a class="navbar-brand" href="<?php echo($start);?>"><h2 id="physio">	<span class="color_red">Physiotherapie</span><br> <span
                        class="color_black">am Gesundbrunnen-Center</span></h2></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    foreach($links as $link){
                        $url = basename($_SERVER["REQUEST_URI"]);
                        $bnt_type = "btn-link";
                        if((empty($url) && $link == $start) || ($link == $url)){
                            // activ link
                            $bnt_type = "btn-primary";
                        }
                        echo("<li><a href='{$link}'>");
                        echo("<button id='loginbutton' type='button' class='btn narbar-btn {$bnt_type}'>");
                        echo("{$link}</button>");
                        echo("</a></li>");
                    }
                ?>
            </ul>
        </div>
    </div>

    <div id="banner">
        <h1 id="welcome"><?php echo (isset($TPL->bannerTitle)) ? $TPL->bannerTitle : ""?></h1>
    </div>

    <?php
    if(isset($TPL->contentBody)){
        include($TPL->contentBody);
    }
    ?>

</div>
<footer>
    <ul id="info">
        <li>Physiotherapie am Gesundbrunnen Center</li>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="../js/mapControl.js"></script>
</body>
</html>
