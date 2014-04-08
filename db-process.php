<?php
/**
 * Project: website_Physiotherapie
 * User: Christian Steusloff
 * Date: 08.04.14
 * Time: 21:34
 */

require_once('define.inc.php');
require_once('databaseConnection.php');
require_once('Physiotherapie.php');

if(isset($_POST["submit"])){

    $connection = new DatabaseConnection();
    $metaData = new Physiotherapie($connection);

    $metaData->setStreet($_POST["street"]);
    $metaData->setZip($_POST["zip"]);
    $metaData->setCity($_POST["city"]);
    $metaData->setPhone($_POST["phone"]);
    $metaData->setMail($_POST["mail"]);
    $metaData->setMessage($_POST["message"]);
    $metaData->setHours($_POST["businessHours"]);

    $showMessage = (empty($_POST["message"]) ? 0 : $_POST["showMessage"]);
    $metaData->setShowMessage($showMessage);

    if($metaData->saveToDatabase()){
        header("Location: /admin?s=1");
    } else {
        header("Location: /admin?s=0");
    }


}