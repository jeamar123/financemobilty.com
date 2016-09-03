<?php
if($_POST){
	$from = "jeamar1234@gmail.com"

	$headers .= "MIME-Version: 1.0 \r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1  \r\n"; 
	$headers .= "From: ".$from;

    $message = $_POST['data'];
//send email
    $sent = mail("jeamar1234@gmail.com", "Email form", $message, $headers);
    if ($sent){
	  echo 'sent';
	}
}
?>