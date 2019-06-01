<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$to = 'info@textbookblitz.com';
	$email_subject = 'New Contact Message';
	$email_body = 
	"\n Name: $name
	\n Email: $email
	\n Phone: $phone
	\n message: $message \n \n";
	$header = "From: " . $email . "\r\n";
	
	mail($to,$email_subject,$email_body,$header);
?>

