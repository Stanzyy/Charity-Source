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
        <style type="text/css">
        	.aboutCenter{
				width: 945px;
				margin: 0px auto;
				text-align: center;
				height: 20em;
				background-color: #fefefe;
			}

			.aboutItem{
				margin-top: 1em;
				margin-bottom: 2em;
				clear: both;
				border-bottom: 1px solid #231F20;
			}

			.aboutItem p{
				text-align: left;
				display: inline-block;
				margin-bottom: 4em;
				vertical-align: top;
				margin-top: 5.6em;
				margin-left: 2em;	
				letter-spacing: 1px;
				line-height: 1.5em;
			}

			.title{
				float: left;
				margin-bottom: -2em;
			}
        </style>
	</head>
	<body>
		<div class="wrapper container">
			<?php require_once('header.php');?>
				<div class="aboutCenter" id="aboutCenter">
					<div class="aboutItem">
						<h2 class="title">About Us</h2>
						<p>Charity Source will provide a fast, efficient way for users to donate to and support their 
                        favorite charities throughout the United States. The main goal is to remove the ambiguity of what
                        charities do with the donations they receive. It will also be an easy way to donate to a good cause
                        that will leave people feeling comfortable knowing where their contributions are going.</p>
					</div>
					<div class="aboutItem">
						<h2 class="title">What We're About</h2>
						<p>Our team at Charity Source is dedicated to providing a safe and user friendly environment in which
                        people can donate to good causes and feel great about it!</p>
					</div>
					<div class="aboutItem">
						<h2 class="title">Future Plans</h2>
						<p>Nouria Energy Corporation is a fuel distributor supplying gasoline and diesel to over 125 service stations. We operate 83 convenience stores with fuel; 
						some locations also consist of quick serve restaurants such as Dunkin Donuts, McDonald’s and Subway. We also take pride in our Lil Mart brand locations in 
						Maine. Our corporate headquarters are situated in Worcester, Massachusetts with an international support center in Lebanon.</p>
					</div>
				</div>					
			</div>
            <?php require_once('footer.php');?> 
		</div>
	</body>
</html>
<?php session_write_close();?>