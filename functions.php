<?php
    header('Access-Control-Allow-Origin: *');
	$function = $_GET['action'];
    $function();

    function signUserIn(){
        $userName = $_GET['userName'];
        $password = $_GET['pword'];
        $link = mysqli_connect("127.0.0.1","root","","gsarastestdb") or die("Error " . mysqli_error($link));
        $query = "SELECT * FROM `login` WHERE `Email` = '".$userName."' AND `Password` = '".$password."'";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result)) { 
            $UNAME = $row["FirstName"]; 
        } 
        session_start();
        $_SESSION["loggedIn"] = true;
        $_SESSION["userName"] = $UNAME;
        echo $UNAME;
    }

    function signUserUp(){
        $userName = $_GET['userName'];
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $password = $_GET['pword'];
        $passwordCheck = $_GET['pwordCheck'];
        $link = mysqli_connect("127.0.0.1","root","","gsarastestdb") or die("Error " . mysqli_error($link));
        $query = "INSERT INTO `gsarastestdb`.`login` (`Email`, `Password`, `FirstName`, `LastName`) VALUES ('".$userName."', '".$password."', '".$firstName."', '".$lastName."')";
        $result = mysqli_query($link, $query);
        session_start();
        $_SESSION["loggedIn"] = true;
        $_SESSION["userName"] = $firstName;
        echo "Suceeess";
    }

    function signOut(){
        session_start();
        $_SESSION["loggedIn"] = false;
        $_SESSION["userName"] = null;
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