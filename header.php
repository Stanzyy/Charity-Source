<header>
	<div class="headerImage">
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
	</div>
	<div class="rightSide">

		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">                
					
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png" style="height: 100px; max-width: 100%;" /></a>
				</div> <!--/.navbar-header -->

				<div id="navbar" class="navbar-collapse collapse">
					
					<!--Navigation links-->
					<ul class="nav navbar-nav navbar-right">                     
						<li><a href="index.php">Browse</a></li>
						<li><a href="home.php">About</a></li>
						<li><a href="about.php">The Team</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><div class="headerLogin">
						<!--Determines whether the user is logged in and displays either their name and logout or sign in/sign up accordingly.-->
						<?php
							//If the user is not logged in, shop sign up/sign in
							if(!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]){
								$_SESSION["loggedIn"] = false;
								$_SESSION["userName"] = null;
								echo "<li> <a href='signup.php' class='loginLink' style='background-color:red;'>Log In/Sign Up</a></li>"; 
							}
							//If the user is logged in, show their name and sign out
							else{
								echo "<li><a href='#'><span id='uname'>Hi ".$_SESSION['firstName'] . "</span></a></li>  <li style='cursor:pointer;'><a id='logout' style='background-color:red;'>Log Out</a></li>";
							}            
						?>
						</div><!-- /.headerLogin-->
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container -->
		</nav>
	</div><!--/.rightSide -->
</header>