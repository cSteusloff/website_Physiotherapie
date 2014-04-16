<?php

function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
}

function sendMail($receiver,$acceptor,$subject,$message,$html=true){
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $header .= 'From: '. $receiver . "\r\n";

    $msg = "<html>
			<head>
				<title>{$subject}</title>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			</head>
			<body>";
    $msg .= $message;
    $msg .= "</body></html>";

    return mail($acceptor, '=?UTF-8?B?'.base64_encode($subject).'?=', $msg, $header);
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

//TODO: Setzen der korrekten Mail-Adresse sowie Beschreibung in Mail
// create email body and send it
$to = 'kristin@sofortsurf.de';

// put your email
$email_subject = "Neue Nachricht von  $name über das Kontaktformular von webseite.com";
$email_body = "Sie haben eine neue Nachricht erhalten.<br><br>" .
    "Hier sind die Details:<br><br>".
    "Name:<p style='text-indent: 2.0em;'>$name</p><br>" .
    "Email:<p style='text-indent: 2.0em;'>$email_address</p><br>".
    "Nachricht:<br><p style='text-indent: 2.0em;'>$message</p><br><br><br><br>".
    "Diese Nachricht wurde über das Kontaktformular der Webseite xxxxxxx versendet.";

$answer=sendMail($email_address,$to, $email_subject, $email_body);

if ($answer) {
    echo "Mail send";
    return true;
} else {
    echo "Error";
    return false;
}