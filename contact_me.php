<?php
require_once 'define.inc.php';

function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
}

// Absender
// Empfänger
// Titel
// Nachrichttext
// HTML ?
function sendMail($sender,$receiver,$subject,$message,$html=true){
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $header .= 'From: '. $sender . "\r\n";

    $msg = "<html>
			<head>
				<title>{$subject}</title>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			</head>
			<body>";
    $msg .= $message;
    $msg .= "</body></html>";

    return mail($receiver, '=?UTF-8?B?'.base64_encode($subject).'?=', $msg, $header);
}

if (empty($_POST['input_name']) ||
    empty($_POST['input_mail']) ||
    empty($_POST['input_message']) ||
    !filter_var($_POST['input_mail'], FILTER_VALIDATE_EMAIL)
) {
    die("Füllen Sie bitte das Formular aus!");
}

include_once 'captcha/securimage/securimage.php';
$securimage = new Securimage();
if (!$securimage->check($_POST['captcha_code'])) {
    errorResponse('Invalid Security Code');
}

$contact_name = $_POST['input_name'];
$contact_mail = $_POST['input_mail'];
$contact_message = nl2br($_POST['input_message']);
$receiver = MAIL_RECEIVER;
$contact_subject = "[Physiotherapie] Nachricht über Kontaktformular von ".$contact_name;


$answer=sendMail($contact_mail,$receiver, $contact_subject, $contact_message);

if ($answer) {
    return true;
} else {
    return false;
}