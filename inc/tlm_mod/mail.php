<?
$headers = 'From: m@tlm.su' . "\r\n" .
    'Reply-To: m@tlm.su' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo (mail("pipe@help.tlm.su", "Subject", "Message", $headers)) ? "send" : "fail";
