<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact | Charity Source</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <?php require_once("css.php");?>
        <style>
            
        </style>
    </head>
    <body>
        <div class = "wrapper">            
            <div class = "contactContent">
                <?php require_once('header.php');?> <!-- add the header to the page -->
                <div class="imgWrapper row text-center">
                    <h1 style="color: white">Talk To Us.</h1>
                    <p style="color: white">Our team will be happy to answer any questions or concerns you have. We look forward to your email.</p>
                    <div class="contactInfo">
                        <p style="color: white"><span>555 555 5555</span><em>or</em> <a class="link_email" href="mailto:charitysourcedevs@gmail.com?subject=Hi Charity Source - Contact via website">Email Us</a></p>
                    </div>
                </div> <!--/.imgWrapper -->
                <div class = "contactFormDiv" style="height: 300px;"> <!-- creates the input fields for the user to contact us -->
                <div class = "contactTitle">
                    <h1> Contact Us </h1>
                </div> <!--/.contactTitle -->
	                <form id="emailSubmitForm">
	                	<div class="control-group inline col-lg-6 col-height">
		                    <input class="form-control" required id="name" type="text" placeholder="Name">
		                    <input class="form-control contact-form-control" required id="email" type="email" placeholder="Email">
		                    <input class="form-control contact-form-control" required id="subject" type="text" Placeholder="Subject">
	                    </div> <!--/.control-group -->
	                    <div class="control-group inline col-lg-6 col-height">
	                    	<textarea class="form-control" required id="message" placeholder="Spill the Beans..."></textarea>
	                    </div> <!--/.control-group -->
	                    <button class="contact-button btn">Submit</button>
	                </form><!--/.emailSubmitForm -->
                </div> <!--/.contactFormDiv -->
                <div class="successDiv">
                	<p>Thank you for hitting us up. TTYL</p>
                </div> <!--/.successDiv -->
            </div> <!--/.contactContent -->
            <?php require_once('footer.php');?>
        </div> <!--/.wrapper -->
        
        <script type="text/javascript"> //script to email from form
			var contactJS = {
				init : function(){
					$("#emailSubmitForm").submit(function(e){
						e.preventDefault();
            			e.stopPropagation();
						contactJS.submitForm(); // call submitForm function when submit button is pressed
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
								contactJS.notify();
							},
							error: function(returnedData){
								alert(returnedData);
							}
						});
					}
				},

				messageHandler : function(){
					//do for each and find first blank, then shove span after input field
				},

				notify: function(){
					$('.contactFormDiv').slideToggle();
					$(".successDiv").slideToggle();
				}
			}

			$(function(){
				contactJS.init();
                console.log("init")
			});
		</script>
    </body>
</html>
<?php session_write_close(); ?>