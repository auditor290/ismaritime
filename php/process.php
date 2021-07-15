<?php

$to = "sales@powerenarge.com";

$subject = "Request quote from Power Enarge Website";
$message = "Name: " . $_POST['name'];
$message .= "<br>Telephone: " . $_POST['telephone'];
$message .= "<br>Job Type: " . $_POST['jobtype'];
$message .= "<br>Description: " . $_POST['description'];

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: " . $_POST['fullname'] . " <" . $_POST['email'] . ">". "\r\n";

if( mail($to, $subject, $message, $headers) ) {
	echo "ok";
} else {
	echo "error";
}