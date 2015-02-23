<?php
	header('Access-Control-Allow-Origin: *');
	$function = $_GET['method'];
	$name = $_GET['name'];
	$email = $_GET['email'];
	$subject = $_GET['subject'];
	$message = $_GET['message'];
	$function($name, $email, $subject, $message);


	function submit($name, $email, $subject, $message){
		$ToEmail = 'charitysourcedevs@gmail.com'; 
    	$EmailSubject = 'Site contact form - ' . $subject; 
    	$mailheader = "From: \r\n" . $name; 
    	$mailheader .= "Reply-To: \r\n" . $email; 
    	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    	$MESSAGE_BODY = "Name: " . $name . "\r\n"; 
    	$MESSAGE_BODY .= "Email: " . $email . "\r\n"; 
    	$MESSAGE_BODY .= "Comment: " . $message . "\r\n"; 
    	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 	
        echo "Success!";
	}
?>