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

require_once('../template.php');
if (!isset($TPL)) {
    $TPL = new Template();
    $TPL->pageTitle = "Praxis";
    $TPL->bannerTitle = "Praxis";
    $TPL->contentBody = __FILE__;
    require_once("../layout.php");
    die();
}
?>


<div class="row">
    <div class="col-xs-12 col-sm-4">
        <img src="../picture/praxis.png" class="img-responsive" alt="Praxis">
    </div>
    <div class="col-xs-4 pad-0">
        <img src="../picture/empfang.png" class="img-responsive hidden-xs" alt="Praxis">
    </div>
    <div class="col-xs-4">
        <img src="../picture/praxis.png" class="img-responsive hidden-xs" alt="Praxis">
    </div>
</div>

<div class="row">
    <div class="col-md-10">
        <div class="panel-primary">
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
    <div class="col-md-2">
        <img src="/picture/sitzend1.png" class="hidden-sm hidden-xs">
    </div>
</div>
