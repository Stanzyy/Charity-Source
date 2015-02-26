<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact Charity Source</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/nick.css">
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        
    </head>
    <body>
        <div class = "wrapper">
            <div class = "contactContent">
                <?php require_once('header.php');?> <!-- add the header to the page -->
                <div class = "contactTitle">
                    <h1> Contact Us </h1>
                </div>
                <div class = "contactFormDiv"> <!-- creates the input fields for the user to contact us -->
                    <div class="inputField"><span class="inputTitle">Name: </span><input id="name" type="text"></div>
                        <div class="inputField"><span class="inputTitle">Email: </span><input id="email" type="email"></div>
                        <div class="inputField"><span class="inputTitle">Subject: </span><input id="subject" type="text"></div>
                        <div class="inputField"><span class="inputTitle">Message: </span><textarea id="message" cols="40" rows="5"></textarea>
                        </div>
                        <div class="inputField buttonHolder"><button id="submitButton">Submit</button></div>
                </div>
            </div>
            <?php require_once('footer.php');?>
        </div>
        <script type="text/javascript"> //script to email from form
			var contactJS = {
				init : function(){
					$("#submitButton").unbind().click(function(){
						contactJS.submitForm(); // call submitForm function when submit button is pressed
                        console.log("init called")
					});
				},

				submitForm : function(){
                    console.log("submit form called")
					var name = $("#name").val(); // get each value from form
					var email = $("#email").val();
					var subject = $("#subject").val();
					var message = $("#message").val();

					if(name == "" || email == "" || subject == "" || message == ""){ // make sure fields are not empty
						contactJS.messageHandler();
					}else{
						$.ajax({ // ajax call to get php function to send email
							type: "GET",
							url: "functions.php",
							data: {
                                action: "submit",
								name : name,
								email : email,
								subject : subject,
								message : message
							},
							success: function(returnedData){ // alert on success or failure
								alert(returnedData);
							},
							error: function(returnedData){
								alert(returnedData);
							}
						});
					}
				},

				messageHandler : function(){
					//do for each and find first blank, then shove span after input field
				}
			}

			$(function(){
				contactJS.init();
                console.log("init")
			});
		</script>
    </body>
</html>

