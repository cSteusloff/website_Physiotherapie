<?php
// check if fields passed are empty

function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
}

if (empty($_POST['input_name']) ||
    empty($_POST['input_mail']) ||
    empty($_POST['input_message']) ||
    !filter_var($_POST['input_mail'], FILTER_VALIDATE_EMAIL)
) {
    echo "No arguments Provided!";
    return false;
}
include_once 'captcha/securimage/securimage.php';
$securimage = new Securimage();
if (!$securimage->check($_POST['captcha_code'])) {
    errorResponse('Invalid Security Code');
}

$name = $_POST['input_name'];
$email_address = $_POST['input_mail'];
$message = $_POST['input_message'];

//TODO: Setzen der korrekten Adressen
// create email body and send it
$to = 'kristin@sofortsurf.de';
// put your email
$email_subject = "Neue Nachricht von  $name über das Kontaktformular von webseite.com";
$email_body = "Sie haben eine neue Nachricht erhalten. \n\n" .
    "Hier sind die Details: \n \nName: \t $name \n" .
    "Email: \t $email_address\nNachricht: \n$message \n\n\n\n".
    "Diese Nachricht wurde über das Kontaktformular der Webseite xxxxxxx versendet.";
$headers = "From: $email_address \n";
$headers .= "Reply-To: $email_address";

if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Mail send";
    return true;
} else {
    echo "Error";
    return false;
}