<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Sign Up | Charity Source</title>

		<!--Favicon links-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">

		<!-- pulls in all our CSS -->
		<?php require_once("css.php");?>

	</head>
	<body>
		<div class="wrapper">
			
			<!-- brings in the header thats on all our pagess -->
			<?php require_once('header.php');?>

			<div class="imgWrapper row text-center">
				<img class="headingImg"src="images/logoLg.png" alt="Charity's Logo"/>
			</div> <!--/.imgWrapper -->

			<div class="content" style="height: 400px; margin-top: 5em;">

				<!--The signin form-->
				<div id="leftForm">
					
					<div class="formHead">
						<h3>Sign In</h3>
						<span id="signinErrorContainer"><p id="signInError" style="color:red;">Invalid Username/Password</p></span>
					</div>

					<form id="signinForm">
						<div class="inputField"><input required class="form-control" id="userName" type="email" placeholder="Email"></div>
						<div class="inputField"><input required class="form-control" id="existingPassword" type="password" placeholder="Password"></div>
						<div class="inputField buttonHolder"><button class="btn" id="signInButton" type="submit">Submit</button></div>
					</form>
				</div><!--Comment to remove the blank space between the divs. This allows for the use of 100% width instead of 99%

					Signup Form			
			--><div id="rightForm">
					<div class="formHead">
						<h3>Sign Up</h3>
						<span id="signupErrorConatiner"><p id="signupError">Error Space</p></span>
					</div>

					<form id="signupForm">
						<div class="inputField"><input required class="form-control" id="firstName" type="test" placeholder="First Name"></div>
						<div class="inputField"><input required class="form-control" id="lastName" type="text" placeholder="Last Name"></div>
						<div class="inputField"><input required class="form-control" id="newUser" type="email" placeholder="Email"></div>
						<div class="inputField"><input required class="form-control" id="newPassword" type="password" placeholder="Password"></div>
						<div class="inputField"><input required class="form-control" id="newPasswordCheck" type="password" placeholder="Confirm Password"></div>
						<div class="inputField buttonHolder"><button class="btn" id="signUpButton" type="submit">Submit</button></div>
					</form>
				</div><!--/#rightForm -->             
			</div> <!--/.content -->

			<!-- pulls in our footer thats on every page -->
			<?php require_once('footer.php');?>

		</div> <!--/.wrapper -->
		
		<!-- Button to trigger modal. Hidden and will be triggered when a user signes up to the site via javascript -->
		<button type="button" id="bstrp-modal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display:none">Welcome Modal</button>
		
		<!--Bootstrap Modal-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Thank you for signing up</h4>
					</div>

					<div class="modal-body">
						<p>Would you like to view your profile?</p>
					</div>

					<div class="modal-footer">
						<a href="index.php">No Thanks</a>
						<a href="userPage.php">Sure</a>
					</div>
				</div><!--/.modal-content-->
			</div><!--/.modal-dialog-->
		</div><!--/.modal-->

		<!--Page specific script includes-->
		<script src="javascripts/signup.js"></script>
	</body>
</html>
<!--Close the session-->
<?php session_write_close();?>