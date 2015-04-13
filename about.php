<?php session_start();?>
<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
  <!--      <link rel="stylesheet" type="text/css" href="css/nick.css">
		<link rel="stylesheet" type="text/css" href="css/gsarascss.css">
-->
        <title>About | Charity Source</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="wrapper container">
			<div class="aboutContent"> <!-- aboutContent div containing all the content on the about page -->
				<?php require_once('header.php');?>
                <h3>About Us</h3>
				<div class="aboutDescription">
                    <!-- description about charity source as a whole -->
                    <p>Charity Source will provide a fast, efficient way for users to donate to and support their 
                        favorite charities throughout the United States. The main goal is to remove the ambiguity of what
                        charities do with the donations they receive. It will also be an easy way to donate to a good cause
                        that will leave people feeling comfortable knowing where their contributions are going. 
                    </p>
                </div>
				<h3>What We're About</h3>
				<div class="aboutDescription">
                    <!-- description about charity source team -->
                    <p>Our team at Charity Source is dedicated to providing a safe and user friendly environment in which
                        people can donate to good causes and feel great about it!                 
                    </p>
                </div>
				<h3>Meet the Team</h3>
                <div class="teamMembers row">
                <!-- images of each team member -->
				<div class="person col-sm-3 col-md-3">
					<img src="images/greg.png" />
					<p>Gregory Saras</p>
				</div>
				<div class="person col-sm-3 col-md-3">
					<img src="images/eric.jpg" />
					<p>Eric Getchell</p>
				</div>
				<div class="person col-sm-3 col-md-3">
					<img src="images/josh.png" />
					<p>Josh Blanchette</p>
				</div>
				<div class="person col-sm-3 col-md-3">
                    <!-- div renamed to personBelow because this one pic needs to be below all others so special css for it -->
					<img src="images/nick.png" />
					<p>Nicolas Stanzione</p>
				</div>
                </div>
			</div>
            <?php require_once('footer.php');?> 
		</div>
	</body>
</html>
<?php session_write_close();?>