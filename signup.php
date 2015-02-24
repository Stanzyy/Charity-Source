<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sign Up | Charity Source</title>
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <?php require_once('header.php');?>
                <!--Won't be using the proper form tags here since we are dealing with passwords. For the sake of this project, setting up secure connections with certificates is not a priority, so we will be going around built in form security which will not allow the submission of passwords over a non-secure connection. -->
                <div id="leftForm">
                    <h3>Sign In</h3>
                    <div class="inputField"><input class="inputBox" id="userName" type="email" placeholder="Email"></div>
					<div class="inputField"><input class="inputBox" id="existingPassword" type="password" placeholder="Password"></div>
                    <div class="inputField buttonHolder"><button class="submitButton" id="signInButton" type="submit">Submit</button></div>			    
                </div><!--
             --><div id="rightForm">                    
                    <h3>Sign Up</h3>
                    <div class="inputField"><input class="inputBox" id="newUser" type="email" placeholder="Email"></div>
                    <div class="inputField"><input class="inputBox" id="newPassword" type="password" placeholder="Password"></div>
                    <div class="inputField"><input class="inputBox" id="newPasswordCheck" type="password" placeholder="Confirm Password"></div>                       <div class="inputField buttonHolder"><button class="submitButton" id="signUpButton" type="submit">Submit</button></div>
                </div>                
            </div>
            <?php require_once('footer.php');?>            
        </div>
        <!--This is a no JS modal popup box from http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/ -->
        <a href="#openModal" id="popup"></a>
        <div id="openModal" class="modalDialog">
	        <div>
		        <a href="#close" title="Close" class="close">X</a>
		        <h2>Thank you for signing up</h2>
		        <p>Your profile is now ready for use.</p>
                <p>Continue to profile?</p>
		        <a href="index.html">No Thanks</a>
                <a href="#">Sure!</a>
	        </div>
        </div>
        <!--Script includes-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                signinJS.init();
            });
            
            var signinJS = {
                init: function(){
                    $("#signInButton").click(function(){
                        signinJS.signin();
                    });
                    
                    $("#signUpButton").click(function(){
                        signinJS.signup();
                    });
                    
                    $("#logout").click(function(){
                        signinJS.signOut(); 
                    });
                },
                
                signin: function(){
                    //sign user in
                    var userName = $("#userName").val();
                    var pword = $("#existingPassword").val();
                    
                    $.ajax({
				        type: "GET",
						url: "functions.php",
						data: {
                            action: "signUserIn",
							userName: userName,
							pword: pword
				        },
						success: function(returnedData){
				            alert(returnedData);
				        },
						error: function(returnedData){
				            alert("There was an error with your request, please try again.");
						}
					});
                },
                
                signup: function(){
                    //sign up user
                    var userName = $("#newUser").val();
                    var pword = $("#newPassword").val();
                    var pwordCheck = $("#newPasswordCheck").val();
                    
                    $.ajax({
				        type: "GET",
						url: "functions.php",
						data: {
                            action: "signUserUp",
						    userName: userName,
						    pword: pword,
				            pwordCheck: pwordCheck
				        },
						success: function(returnedData){
				            alert(returnedData);
                            $("#popup")[0].click();
						},
						error: function(returnedData){
						  alert("There was an error with your request, please try again.");
						}
				    });
                },
                
                signOut: function(){
                    $.ajax({
                        type: "POST",
                        url: "functions.php",
                        data: {
                            action: "signOut"
                        },
                        success: function(returnedData){
                            alert("Logged Out");
                            location.reload();
                        },
                        error: function(returnedData){
                            alert("There was an error with your request, please try again.");
                        }
                    });
                }
            }
        </script>
    </body>
</html>