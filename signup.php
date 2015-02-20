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
                <div id="leftForm">
                    <h3>Sign In</h3>
                    <form id="existingUser">
                        <div class="inputField"><input class="inputBox" id="userName" type="email" placeholder="Email"></div>
					    <div class="inputField"><input class="inputBox" id="existingPassword" type="password" placeholder="Password"></div>
                        <div class="inputField buttonHolder"><button id="submitButton">Submit</button></div>
                    </form>					    
				</div><!--
             --><div id="rightForm">
				    <h3>Sign Up</h3>
                    <form id="newUser">
                        <div class="inputField"><input class="inputBox" id="userName" type="email" placeholder="Email"></div>
                        <div class="inputField"><input class="inputBox" id="newPassword" type="password" placeholder="Password"></div>
                        <div class="inputField"><input class="inputBox" id="newPasswordCheck" type="password" placeholder="Confirm Password"></div>         
                        <div class="inputField buttonHolder"><button id="submitButton">Submit</button></div>
                    </form>
                </div>                
            </div>
            <?php require_once('footer.php');?>
        </div>
        <script type="text/javascript"></script>
    </body>
</html>