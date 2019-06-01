<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$message = $_POST['message'];
	
	$filter = str_replace("-","","$message");
	
	$to = 'info@textbookblitz.com';
	$email_subject = 'New Book Quote Request';
	$email_body = 
	"\n Name: $name
	\n Email: $email
	\n City: $city
	\n Province: $province
	\n message: \n \n $filter";
	$header = "From: " . $email . "\r\n";
	
        mail($to,$email_subject,$email_body,$header);

?>