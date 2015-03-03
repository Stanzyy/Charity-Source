<?php
    header('Access-Control-Allow-Origin: *');
	$function = $_GET['action'];
    $function();

    function signUserIn(){
        //Start the user session
        session_start();

        //Get the user name and password from the passed in url
        $userName = $_GET['userName'];
        $password = $_GET['pword'];

        //Connect to the database and make the query
        $link = mysqli_connect("127.0.0.1","root","","gsarastestdb") or die("Error " . mysqli_error($link));
        $query = "SELECT * FROM `login` WHERE `Email` = '".$userName."' AND `Password` = '".$password."'";
        $result = mysqli_query($link, $query);

        //Populate session variables with the user information for potential later retrieval
        //No sense in not getting them and having to go across the wire later on for the same info
        while($row = mysqli_fetch_array($result)){
            $_SESSION["userNumber"] = $row["loginNum"];
            $_SESSION["userName"]   = $row["Email"];
            $_SESSION["password"]   = $row["Password"];
            $_SESSION["firstName"]  = $row["FirstName"];
            $_SESSION["lastName"]   = $row["LastName"];
        }

        //Set logged in to be true
        $_SESSION["loggedIn"] = true;
        echo "Logged In";
    }

    function signUserUp(){
        //Start the session
        session_start();

        //Get the fields that the user had to enter
        $userName = $_GET['userName'];
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $password = $_GET['pword'];
        $passwordCheck = $_GET['pwordCheck'];

        //Add the user to the database
        $link = mysqli_connect("127.0.0.1","root","","gsarastestdb") or die("Error " . mysqli_error($link));
        $query = "INSERT INTO `gsarastestdb`.`login` (`Email`, `Password`, `FirstName`, `LastName`) VALUES ('".$userName."', '".$password."', '".$firstName."', '".$lastName."')";
        $result = mysqli_query($link, $query);

        //Go and get the user number
        $query = "SELECT * FROM `login` WHERE `Email` = '".$userName."'";
        $result = mysqli_query($link, $query);

        //Populate session variables with the user information for potential later retrieval
        //No sense in not getting them and having to go across the wire later on for the same info
        while($row = mysqli_fetch_array($result)) { 
            $_SESSION["userNumber"] = $row["loginNum"];
            $_SESSION["userName"]   = $row["Email"];
            $_SESSION["password"]   = $row["Password"];
            $_SESSION["firstName"]  = $row["FirstName"];
            $_SESSION["lastName"]   = $row["LastName"];
        }
        $_SESSION["loggedIn"] = true;
        echo "Logged In";
    }

    function signOut(){
        //Start the session and null all of the session fields
        session_start();
        $_SESSION["loggedIn"]   = false;
        $_SESSION["userNumber"] = null;
        $_SESSION["userName"]   = null;
        $_SESSION["password"]   = null;
        $_SESSION["firstName"]  = null;
        $_SESSION["lastName"]   = null;
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