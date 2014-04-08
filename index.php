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

require_once('template.php');
if (!isset($TPL)) {
    $TPL = new Template();
    $TPL->pageTitle = "Startseite";
    $TPL->bannerTitle = "Willkommen";
    $TPL->contentBody = __FILE__;
    require_once("layout.php");
    die();
}
?>


<?if($metaData->getShowMessage() == 1){?>
    <div class="row">
        <div class="col-xs-12">
            <div class="notification alert alert-warning">
                <i class="fa fa-bell-o fa-2x pull-left"></i><b><?=$metaData->getMessage()?></b><i class="fa fa-bell-o fa-2x pull-right"></i>
            </div>
        </div>
    </div>
<?}?>


<div class="row">
    <div class="col-xs-12 col-md-6">
        <img src="picture/praxis.png" class="img-responsive" alt="Praxis">
    </div>
    <div class="col-xs-12 col-md-6">
        <img src="picture/empfang.png" class="img-responsive hidden-xs hidden-sm pull-right" alt="Praxis">
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-4 col-xs-12">
        <div>
            <div class="panel-heading">
                <h3 class="panel-title">Öffnungszeiten</h3>
            </div>
            <div class="panel-body">
                <?=$metaData->getHoursHtml()?>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-xs-12" style="text-align: center">
        <img src="picture/PhysiotherapieGesundbrunnenFigure01.png">
    </div>

    <div class="col-md-4 col-xs-12">
            <div>
                <div class="panel-heading">
                    <h3 class="panel-title">Kontakt</h3>
                </div>
                <div class="panel-body">
                    <i class="fa fa-map-marker circle"></i><?=$metaData->getAddress()?><br>
                    <i class="fa fa-phone circle"></i><?=$metaData->getPhone()?><br>
                    <i class="fa fa-envelope-o circle"></i><?=$metaData->getMail()?><br>
                </div>
            </div>
    </div>
</div>
