<?php session_start();?>
<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
        <title>About | Charity Source</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <?php require_once("css.php");?>
	</head>
	<body>
		<div class="wrapper container">
			<?php require_once('header.php');?>
				<div class="imgWrapper row text-center">
                    <img class="headingImg"src="images/workPicture.png" alt="Charity's Logo"/>
                </div> <!--/.imgWrapper -->
				<div class="aboutCenter" id="aboutCenter">
					<div class="aboutItem">
						<h2 class="title">About Us</h2>
						<p>Charity Source will provide a fast, efficient way for users to donate to and support their 
                        favorite charities throughout the United States. The main goal is to remove the ambiguity of what
                        charities do with the donations they receive. It will also be an easy way to donate to a good cause
                        that will leave people feeling comfortable knowing where their contributions are going.</p>
					</div> <!--/. aboutItem -->
					<div class="aboutItem">
						<h2 class="title">What We're About</h2>
						<p>Our team at Charity Source is dedicated to providing a safe and user friendly environment in which
                        people can donate to good causes and feel great about it! We want to inspire users to search for good
                        causes and give support where they know that every dollar they donate is making a difference.</p>
					</div> <!--/. aboutItem -->
					<div class="aboutItem">
						<h2 class="title">Future Plans</h2>
						<p>The future for Charity Source includes a lot of new features and partnerships with charities. Our team is in the process
                        of developing a forum for our users to get in touch with other friendly folks or the charities themselves in order to join in 
                        their events. Once we partner up with charities they will provide content to their pages to include future goals to show donators
                        where their money is going.</p>
					</div> <!--/. aboutItem -->
				</div> <!--/. aboutCenter -->				
			</div> <!--/.wrapper -->
            <?php require_once('footer.php');?> 
	</body>
</html>
<?php session_write_close();?>