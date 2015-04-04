<?php
    //Allow traffic from anywhere
    header('Access-Control-Allow-Origin: *');

    //All ajax requests have an action variable which is the name of the function we want to be called.
    //Take that function, place it in a variable and then call it. Saves us from having to write a switch statement
	$function = $_GET['action'];
    $function();

    //Function to sign the user in.
    function signUserIn(){
        //Try to perform the signin
        try{
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
                $_SESSION["amountDonated"]   = $row["amountDonated"];
            }

            //Set logged in to be true
            $_SESSION["loggedIn"] = true;
            echo "Logged In";
        }
        //Something went wrong, log the error and return that there was an error
        catch(Exception $ex){
            $myfile = fopen("log.txt", "w");
            fwrite($myfile, $ex->getMessage());
            fclose($myfile);
            echo "error";
        }
    }

    //Function to sign a user up
    function signUserUp(){
        try{
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
            session_write_close();
            echo "Logged In";
        }
        //Something went wrong, log the error and return that there was an error
        catch(Exception $ex){
            $myfile = fopen("log.txt", "w");
            fwrite($myfile, $ex->getMessage());
            fclose($myfile);
            echo "error";
        }
    }

    //Function to update a user profile
    function editProfile(){
        //Try to update the users profile
        try{
            //Start the session
            session_start();

            //Get what we need for updating the information
            $userId = $_GET['userId'];
            $userName = $_GET['userName'];
            $firstName = $_GET['firstName'];
            $lastName = $_GET['lastName'];
            $password = $_GET['password'];
            $passwordCheck = $_GET['passwordCheck'];

            //House Cleaning
            if($passwordCheck == ""){
                $password = $_SESSION["password"];
            }

            //Connect to and update the database
            $link = mysqli_connect("127.0.0.1","root","","gsarastestdb") or die("Error " . mysqli_error($link));
            $query = "UPDATE `login` SET `loginNum`= '".$userId."',`Email`= '".$userName."',`Password`='".$password."',`FirstName`='".$firstName."',`LastName`='".$lastName."' WHERE `loginNum`= '".$userId."'";
            $result = mysqli_query($link, $query);

            //update the session
            $_SESSION["userName"]   = $userName;
            $_SESSION["password"]   = $password;
            $_SESSION["firstName"]  = $firstName;
            $_SESSION["lastName"]   = $lastName;
            session_write_close();
            echo "Success";
        }
        //Something went wrong, log the error and return that there was an error
        catch(Exception $ex){
            $myfile = fopen("log.txt", "w");
            fwrite($myfile, $ex->getMessage());
            fclose($myfile);
            echo "error";
        }
    }

    //Function to sign a user out
    function signOut(){
        //Try to sign the user out
        try{
            //Start the session and null all of the session fields
            session_start();
            $_SESSION["loggedIn"]   = false;
            $_SESSION["userNumber"] = null;
            $_SESSION["userName"]   = null;
            $_SESSION["password"]   = null;
            $_SESSION["firstName"]  = null;
            $_SESSION["lastName"]   = null;
            session_write_close();
        }
        //Something went wrong, log the error and return that there was an error
        catch(Exception $ex){
            $myfile = fopen("log.txt", "w");
            fwrite($myfile, $ex->getMessage());
            fclose($myfile);
            echo "error";
        }
    }

    //Function to send an email to our Charity Source email address.
	function submit(){
        //Try to send a contact email
        try{
            //Get the email fields passed in
            $name = $_GET['name'];
	        $email = $_GET['email'];
	        $subject = $_GET['subject'];
	        $message = $_GET['message'];

            //Build the to email, subject, header, and body
		    $ToEmail = 'charitysourcedevs@gmail.com'; 
    	    $EmailSubject = 'Site contact form - ' . $subject; 
    	    $mailheader = "From: \r\n" . $name; 
    	    $mailheader .= "Reply-To: \r\n" . $email; 
    	    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    	    $MESSAGE_BODY = "Name: " . $name . "\r\n"; 
    	    $MESSAGE_BODY .= "Email: " . $email . "\r\n"; 
    	    $MESSAGE_BODY .= "Comment: " . $message . "\r\n"; 

            //Send the email
            mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 	
            echo "Success!";
        }
        //Something went wrong, log the error and return that there was an error
        catch(Exception $ex){
            $myfile = fopen("log.txt", "w");
            fwrite($myfile, $ex->getMessage());
            fclose($myfile);
            echo "error";
        }
	}

    //Function to track donation amounts.
    function trackDonation(){
        //Try to track donations
        try{
            //connect to database
            $link = mysqli_connect("127.0.0.1","root","","gsarastestdb") or die("Error " . mysqli_error($link));
            
            //open the current session on the site
            session_start();
            
            //Check if the donator is currently logged into the site.
            if(!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]){
                //not logged in
                $query = "SELECT * FROM `login` WHERE `Email` = 'anon@gmail.com'";
            }else{
                //logged in
                $query = "SELECT * FROM `login` WHERE `Email` = '".$_SESSION["userName"]."'";
            }   
            
            $result = mysqli_query($link, $query); //get the results of the query from the database
            while($row = mysqli_fetch_array($result)){ //grab the user email and the amount they have donated
                $amount = $row["amountDonated"];
                $user = $row["Email"];
                $loginNum = $row["loginNum"];
                        
            }
            $amount = $amount + 10; //increment donation amount
            $sql = "UPDATE login SET amountDonated ='".$amount."' WHERE Email='".$user."'";
            // update the database with the new amount donated
            if ($link->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $link->error;
            }
            $title = $_GET['charity'];
            $charity = explode("|", $title);
            $query = "SELECT * FROM `charities` WHERE `CharityName` ='" . $charity[0] ."'";
            $result = mysqli_query($link, $query);
            if ($result && $result->num_rows > 0) {
                echo 'Charity Found'; 
                while($row = mysqli_fetch_array($result))
                {   //variable names for information in charitydb
                    //associative array?
                    $charityName =$row["CharityName"];
                    $totalDonated = $row["TotalDonated"];

                }
                $totalDonated = $totalDonated + 10; //increment donation amount
                $sql = "UPDATE charities SET TotalDonated ='".$totalDonated."' WHERE CharityName='".$charityName."'";
                if ($link->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $link->error;
                }
                $ten = 10;
                $sql = "INSERT INTO `gsarastestdb`.`donations` (`loginNum`, `DonatedTo`, `AmountDonated`) VALUES ('".$loginNum."', '".$charityName."', '".$ten."')";
                if ($link->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $link->error;
                }
            } else {
                echo 'Charity NOT Found';
            }
            
            session_write_close(); //close the session
            $link->close();
        }
        //Something went wrong, log the error and return that there was an error
        catch(Exception $ex){
            $myfile = fopen("log.txt", "w");
            fwrite($myfile, $ex->getMessage());
            fclose($myfile);
            echo "error";
        }        
    }