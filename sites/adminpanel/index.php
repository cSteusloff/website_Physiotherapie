<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 30.01.14
 * Time: 12:50
 */

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

<?php
if (isset($_GET["s"]) && $_GET["s"] = 1) {
    ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="notification alert alert-success">
                <i class="fa fa-bell-o fa-2x pull-left"></i><b>Erfolgreich gespeichert</b><i
                    class="fa fa-bell-o fa-2x pull-right"></i>
            </div>
        </div>
    </div>
<?php
} elseif(isset($_GET["s"]) && $_GET["s"] = 0) {
    ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="notification alert alert-warning">
                <i class="fa fa-bell-o fa-2x pull-left"></i><b>Interner Abarbeitungsfehler</b><i
                    class="fa fa-bell-o fa-2x pull-right"></i>
            </div>
        </div>
    </div>
<?php
}
?>



<div class="row">
    <div class="col-xs-12">
        <div id="hoursofopening" class="panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Metadaten anpassen</h3>
            </div>
            <div class="panel-body">
                <form role="form" action="db-process.php" method="post">
                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="street">Adresse</label>

                        <div class="controls">
                            <input id="street" name="street" type="text" placeholder="Straße und Hausnummer"
                                   value="<?= $metaData->getStreet() ?>"
                                   class="form-control" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="zip">PLZ</label>

                        <div class="controls">
                            <input id="zip" name="zip" type="text" maxlength="5" placeholder="PLZ"
                                   value="<?= $metaData->getZip() ?>"
                                   class="form-control" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="city">Stadt</label>

                        <div class="controls">
                            <input id="city" name="city" type="text" placeholder="Stadt"
                                   value="<?= $metaData->getCity() ?>"
                                   class="form-control" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="phone">Telefon</label>

                        <div class="controls">
                            <input id="phone" name="phone" type="text" placeholder="Telefon"
                                   value="<?= $metaData->getPhone() ?>"
                                   class="form-control input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="fax">Fax</label>

                        <div class="controls">
                            <input id="fax" name="fax" type="text" placeholder="Fax"
                                   value="<?= $metaData->getFax() ?>"
                                   class="form-control input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="mail">E-Mail</label>

                        <div class="controls">
                            <input id="mail" name="mail" type="text" placeholder="E-Mail"
                                   value="<?= $metaData->getMail() ?>"
                                   class="form-control input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label top" for="message">Meldung</label>

                        <div class="controls">
                            <input id="hint" name="message" type="text" placeholder=""
                                   value="<?= $metaData->getMessage() ?>"
                                   class="form-control input-xlarge">

                            <p class="help-block">Text erscheint auf der Startseite</p>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="control-group">
                        <label class="control-label" for="message">Meldung anzeigen</label>

                        <div class="controls">
                            <label class="radio" for="message-0">
                                <input type="radio" name="showMessage" id="message-0"
                                       value="1"
                                    <?= ($metaData->getShowMessage() == 1) ? 'checked="checked"' : '' ?>
                                       required="required">
                                anzeigen
                            </label>
                            <label class="radio" for="message-1">
                                <input type="radio" name="showMessage" id="message-1"
                                       value="0"
                                       <?= ($metaData->getShowMessage() == 0) ? 'checked="checked"' : '' ?>required="required">
                                ausblenden
                            </label>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="control-group">
                        <label class="control-label top" for="businessHours">Öffnungszeiten</label>

                        <div class="controls">
                            <textarea id="businessHours" name="businessHours"
                                      class="form-control" rows="5"><?= $metaData->getHours() ?></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label" for="submit"></label>

                        <div class="controls">
                            <button id="submit" name="submit" name="submit" class="btn btn-primary">Ändern</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
