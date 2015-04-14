<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sign Up | Charity Source</title>
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
     
        <div class="wrapper">
            <div class="content">
                <!--Include the header-->
                <?php require_once('header.php');?>
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
                </div>                
            </div>
            <!--Include the footer-->
            <?php require_once('footer.php');?>
        </div>
        <!--This is a no JS modal popup box from http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/
            div is hidden on page load, and then is displayed as a modal popup once a user creates an account.
        -->
        <a href="#openModal" id="popup"></a>
        <div id="openModal" class="modalDialog">
	        <div>
		        <a href="#close" title="Close" class="close">X</a>
		        <h2>Thank you for signing up</h2>
		        <p>Your profile is now ready for use.</p>
                <p>Continue to profile?</p>
		        
	        </div>
        </div>
           <!-- Button trigger modal -->
    
    <button type="button" id="bstrp-modal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display:none">
      Welcome Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thank you for signing up!</h4>
          </div>
          <div class="modal-body">
            <p>Would you like to view your profile?</p>
          </div>
          <div class="modal-footer">
            <a href="index.php">No Thanks</a>
            <a href="userPage.php">Sure!</a>
          </div>
        </div>
      </div>
    </div>
        <!--Script includes-->
        <script src="javascripts/signup.js"></script>
    </body>
</html>