<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 09.03.14
 * Time: 14:25
 */

require_once('define.inc.php');
require_once('databaseConnection.php');
require_once('Physiotherapie.php');
require_once('template.php');

$connection = new DatabaseConnection();
$metaData = new Physiotherapie($connection);


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo (isset($TPL->pageTitle)) ? $TPL->pageTitle : "" ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--    mobile Device like native app  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="picture/favicon.ico" type="image/x-icon">
    <link rel="icon" href="picture/favicon.ico" type="image/x-icon">
    <?php echo (isset($TPL->contentHead)) ? $TPL->contentHead : "" ?>

</head>
<body>


<div class="container-fluid">
    <div class="header navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo(WEB_HOME); ?>"><h2 id="physio"><span
                        class="red">Physiotherapie</span>
                    <br><span class="black">am Gesundbrunnen Center</span></h2></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                foreach (explode(";", WEB_LINKS) as $link) {
                    $url = basename($_SERVER["REQUEST_URI"]);
                    $bnt_type = "btn-link";
                    if ((empty($url) && $link == WEB_HOME) || ($link == $url)) {
                        // active link
                        $bnt_type = "btn-primary";
                    }
                    echo("<li><a href='{$link}'>");
                    echo("<button id='loginbutton' type='button' class='btn {$bnt_type}'>");
                    echo("{$link}</button>");
                    echo("</a></li>");
                }
                ?>
            </ul>
        </div>
    </div>

    <div id="banner">
        <h1 id="welcome"><?php echo (isset($TPL->bannerTitle)) ? $TPL->bannerTitle : "" ?></h1>
    </div>

    <div id="content">
    <?php
    if (isset($TPL->contentBody)) {
        include($TPL->contentBody);
    }
    ?>
    </div>
</div>
<footer>
    <ul id="info">
        <li>Physiotherapie am Gesundbrunnen Center</li>
        <li><?= $metaData->getAddress() ?></li>
        <li>Tel. <?= $metaData->getPhone() ?></li>
        <li>Fax <?= $metaData->getFax() ?></li>
    </ul>
    <ul id="copyright">
        <li>&copy; <?= date("Y") ?></li>
        <li><a href="http://submit-ev.de">submit e.V.</a></li>
        <li><a href="Impressum">Impressum</a></li>
        <li><a href="Kontakt">Kontakt</a></li>
    </ul>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="./js/mapControl.js"></script>
<script src="./js/jqBootstrapValidation.js"></script>
<script src="./js/contact_me.js"></script>
</body>
</html>
