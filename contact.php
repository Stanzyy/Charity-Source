<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact | Charity Source</title>
		<meta charset="UTF-8" />

		<!--Favicon links-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">

		<!-- pulls in all our CSS -->
		<?php require_once("css.php");?>

	</head>
	<body>
		<div class = "wrapper">            
			<div class = "contactContent">

				<!-- brings in the header thats on all our pagess -->
				<?php require_once('header.php');?>

				<div class="imgWrapper row text-center">
					<h1 style="color: white">Talk To Us.</h1>
					<p style="color: white">Our team will be happy to answer any questions or concerns you have. We look forward to your email.</p>
					<div class="contactInfo">
						<p style="color: white"><span>555 555 5555</span><em>or</em> <a class="link_email" href="mailto:charitysourcedevs@gmail.com?subject=Hi Charity Source - Contact via website">Email Us</a></p>
					</div>
				</div>

				<!-- creates the input fields for the user to contact us -->
				<div class = "contactFormDiv" style="height: 300px;">

					<div class = "contactTitle">
						<h1>Contact Us</h1>
					</div>

					<!--Email Submit Form-->
					<form id="emailSubmitForm">
						
						<div class="control-group inline col-lg-6 col-height">
							<input class="form-control" required id="name" type="text" placeholder="Name">
							<input class="form-control contact-form-control" required id="email" type="email" placeholder="Email">
							<input class="form-control contact-form-control" required id="subject" type="text" Placeholder="Subject">
						</div>

						<div class="control-group inline col-lg-6 col-height">
							<textarea class="form-control" required id="message" placeholder="Message..."></textarea>
						</div>

						<button class="contact-button btn">Submit</button>
					</form>

				</div> <!--/.contactFormDiv -->

				<div class="successDiv">
					<h1 class="contact-thanks">Thank you for sending us a message. We will take a look at it and get back to you as soon as we can.</h1>
				</div>

			</div><!--/.contactContent -->
			
			<!-- pulls in our footer thats on every page -->
			<?php require_once('footer.php');?>

		</div> <!--/.wrapper -->

		<!--Script to email from form-->
		<script type="text/javascript">
			//Contact namespace
			var contactJS = {
				init : function(){
					//Set up a listener for the form submission
					$("#emailSubmitForm").submit(function(e){
						//Stop the form from doing its default submission so we can handle it ourselves
						e.preventDefault();
						e.stopPropagation();

						//Call the form submit function
						contactJS.submitForm();
					});
				},

				submitForm : function(){
					//Get each value from the form
					var name    = $("#name").val(); 
					var email   = $("#email").val();
					var subject = $("#subject").val();
					var message = $("#message").val();
					
					//Ajax call to request for the server to send the email
					$.ajax({
						type: "GET",
						url: "functions.php",
						data: {
							action: "submit",
							name    : name,
							email   : email,
							subject : subject,
							message : message
						},
						success: function(returnedData){
							contactJS.notify();
						},
						error: function(returnedData){
							alert(returnedData);
						}
					});
				},
				notify: function(){
					//Hide the original form, then show a thank you text block
					$('.contactFormDiv').slideToggle();
					$(".successDiv").slideToggle();
				}
			}

			//On document ready
			$(function(){
				contactJS.init();
			});
		</script>
	</body>
</html>
<?php session_write_close(); ?>