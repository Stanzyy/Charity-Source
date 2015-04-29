<?php session_start();?>
<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>The Team | Charity Source</title>

		<!--Favicon links-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		
		<!-- pulls in all our CSS -->
		<?php require_once("css.php");?>

	</head>
	<body>
		<div class="wrapper container">

			<!-- brings in the header thats on all our pagess -->
			<?php require_once('header.php');?>

			<div class="imgWrapper row text-center">
				<img class="headingImg"src="images/logoLg.png" alt="Charity's Logo"/>
			</div>
			
			<div class="sponsorCenter">
				
				<!--Bio section for Nick-->
				<div class="sponsorItem">
					<h2 class="title">Nicolas Stanzione</h2>
					<img src="images/nick.png" class="sponsorImg" />
					<p class="sponsorText">Welcome to Charity Source. I'm Nick Stanzione. I am currently a senior in my bachelors studies in Computer Science at the University of Massachusetts Lowell. After I graduate in May 2015 I will be pursuing my Masters in Computer Science at UML in the plus one masters program. I love camping, video games, cats, and football. Our team and I had a lot of fun putting this project together and I hope you enjoy it. Thanks for stopping by. </p>
				</div>

				<!--Bio section for Josh-->
				<div class="sponsorItem">
					<h2 class="title">Josh Blanchette</h2>
					<img src="images/josh.png" class="sponsorImg" />
					<p class="sponsorText">Hello everyone, my name is Joshua Blanchette, and I am a CS transfer student here at Umass Lowell. Before I attended Umass Lowell, I went to Middlesex Community College, where I got my Associates Degree in Computer Science. I know a couple of programming languages; Java being my strong point. I also am taking a C++ class here at UML. I really look forward to learning and expanding my little knowledge that I have of HTML and CSS. In my spare time, I love to play video games, snowmobile and spend time with family. We usually rent a cabin up in Pittsburgh, New Hampshire every winter and enjoy the snow for a while. In the summer I like to go boating and lounge in the sun.</p>
				</div>

				<!--Bio section for Eric-->
				<div class="sponsorItem">
					<h2 class="title">Eric Getchell</h2>
					<img src="images/eric.jpg" class="sponsorImg" />
					<p class="sponsorText">Hey there, my name is Eric Getchell. I am a senior at the University of Massachusetts - Lowell studying Criminal Justice with a minor in Computer Science. During my free time, I love playing music. I know how to play six instruments, but only really focus on the piano and the guitar. I have been playing the piano since I was five and the guitar since I was ten. I also love to play video games, my favorite games being Dark Souls, Half-Life, and The Elder Scrolls.</p>
				</div>

				<!--Bio section for Greg-->
				<div class="sponsorItem lastItem">
					<h2 class="title">Gregory Saras</h2>
					<img src="images/greg.png" class="sponsorImg" />
					<p class="sponsorText">Hi, my name is Gregory Saras and I am a developer here at Charity Source. I enjoy developing on ASP.NET which is where most of my experience lies. I also have spent a lot of time with HTML5, CSS3, and JavaScript/jQuery. In my free time you will find me trophy hunting in PlayStation games. Word from the wise never try to perfect Advanced Warfare, its miserable.</p>
				</div>

		</div> <!--/.sponsorCenter -->
		
		<!-- pulls in our footer thats on every page -->
		<?php require_once('footer.php');?>

		</div> <!--./wrapper -->
	</body>
</html>
<!--Close the session-->
<?php session_write_close();?>