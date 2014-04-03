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
    $TPL->pageTitle = "Kontakt";
    $TPL->bannerTitle = "Kontakt";
    $TPL->contentBody = __FILE__;
    require_once("../layout.php");
    die();
}

?>

<div class="row">
    <div class="col-xs-12">
        <div id="map_canvas" class="span12"></div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-5 col-xs-12">
        <div id="hoursofopening" class="panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Kontaktformular</h3>
            </div>
            <div class="panel-body">
                <form role="form" id="contactForm">
                    <div id="success"></div>
                    <div class="form-group">
                        <label class="sr-only" for="input_name">Ihr Name</label>
                        <input type="text" class="form-control input-sm" id="input_name" name="input_name" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="input_mail">Ihre Mailadresse</label>
                        <input type="email" class="form-control input-sm" id="input_mail" name="input_mail" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="input_message">Ihre Nachricht</label>
                        <textarea id="input_message" name="input_message" class="form-control input-sm" rows="3"
                                  placeholder="Nachricht" required=""></textarea>
                    </div>

                    <img id="captcha" src="/captcha/securimage/securimage_show.php" alt="CAPTCHA Image" />
                    <a href="#" onclick="document.getElementById('captcha').src = '/captcha/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-primary narbar-btn">Anderes Bild anzeigen</a>
                    <div class="form-group">
                        <label class="sr-only" for="captcha_code">Bitte geben Sie den angezeigten Code ein.</label>
                        <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Bitte geben Sie den angezeigten Code ein." required="">
                    </div>

                    <button type="submit" class="btn btn-primary narbar-btn">Senden</button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-2 col-xs-12" style="text-align: center">
        <img src="/picture/stehendArmeUnten.png" class="hidden-sm hidden-xs">
    </div>
    <div class="col-md-5 col-xs-12">
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

