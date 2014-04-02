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
require_once('../../template.php');
if (!isset($TPL)) {
    $TPL = new Template();
    $TPL->pageTitle = "Admin";
    $TPL->bannerTitle = "Adminbereich";
    $TPL->contentBody = __FILE__;
    require_once("../../layout.php");
    die();
}

?>
<div class="row">
    <div class="col-xs-12">
        <div id="hoursofopening" class="panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Metadaten anpassen</h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="adress">Adresse</label>

                        <div class="controls">
                            <input id="adress" name="adress" type="text" placeholder="Behmstraße 23, 13357 Berlin"
                                   class="form-control" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="phone">Telefon</label>

                        <div class="controls">
                            <input id="phone" name="phone" type="text" placeholder="(030) 49 301 316"
                                   class="form-control input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="mail">E-Mail</label>

                        <div class="controls">
                            <input id="mail" name="mail" type="text" placeholder="physiotherapie-gesundbrunnen@web.de"
                                   class="form-control input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="hint">Meldung</label>

                        <div class="controls">
                            <input id="hint" name="hint" type="text" placeholder="" class="form-control input-xlarge"
                                   required="">

                            <p class="help-block">Text erscheint auf der Startseite</p>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="control-group">
                        <label class="control-label top" for="businessHours">Öffnungszeiten</label>

                        <div class="controls">
                            <textarea id="businessHours" name="businessHours" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label" for="submit"></label>

                        <div class="controls">
                            <button id="submit" name="submit" class="btn btn-primary">Ändern</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
