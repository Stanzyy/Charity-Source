<?php    
    header('Access-Control-Allow-Origin: *');
	$function = $_GET['action'];
    $function();

    function signUserIn(){
        $userName = $_GET['userName'];
        $passWord = $_GET['pword'];
        echo "signed In"; 
    }

    function signUserUp(){
        $userName = $_GET['userName'];
        $password = $_GET['pword'];
        $passwordCheck = $_GET['pwordCheck'];
        echo "Signed Up";
    }

    function signOut(){
        $username = null;
        setcookie('userName', $username);
    }

	function submit(){
        $name = $_GET['name'];
	    $email = $_GET['email'];
	    $subject = $_GET['subject'];
	    $message = $_GET['message'];
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