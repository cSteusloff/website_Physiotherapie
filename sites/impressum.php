<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 30.01.14
 * Time: 12:50
 */

require_once('../template.php');
if (!isset($TPL)) {
    $TPL = new Template();
    $TPL->pageTitle = "Impressum";
    $TPL->bannerTitle = "Impressum";
    $TPL->contentBody = __FILE__;
    require_once("../layout.php");
    die();
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Impressum</h3>
            </div>
            <div class="panel-body">
                ...folgt
            </div>
        </div>
    </div>
</div>
