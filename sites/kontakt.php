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
if(!isset($TPL)){
    $TPL = new Template();
    $TPL->pageTitle = "Kontakt";
    $TPL->bannerTitle = "Kontakt";
    $TPL->contentBody = __FILE__;
    require_once("../layout.php");
    die();
}

?>

    <div class="row">
        <div class="col-md-12">
            <div id="map_canvas" class="span12"></div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6">
            <div id="hoursofopening" class="panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kontaktformular</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label class="sr-only" for="input_name">Ihr Name</label>
                            <input type="text" class="form-control input-sm" id="input_name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="input_mail">Ihre Mailadresse</label>
                            <input type="email" class="form-control input-sm" id="input_mail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="input_name">Ihre Nachricht</label>
                            <textarea id="input_message" class="form-control input-sm" rows="3" placeholder="Nachricht"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary narbar-btn">Senden</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kontakt</h3>
                </div>
                <div class="panel-body">
                    <i class="fa fa-map-marker circle"></i>Behmstraße 23, 13357 Berlin<br>
                    <i class="fa fa-phone circle"></i>(030) 49 301 316<br>
                    <i class="fa fa-envelope-o circle"></i>physiotherapie-gesundbrunnen@web.de<br>
                </div>
            </div>
        </div>
    </div>

