<?php session_start();?>
<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
  <!--      <link rel="stylesheet" type="text/css" href="css/nick.css">
		<link rel="stylesheet" type="text/css" href="css/gsarascss.css">
-->
        <title>The Team | Charity Source</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <style type="text/css">
			 .sponsorCenter{
				width: 945px;
				margin: 0px auto;
				text-align: center;
				height: 20em;
				background-color: #fefefe;
			}

			.sponsorItem{
				margin-top: 1em;
				margin-bottom: 3em;
				clear: both;
				border-bottom: 1px solid #231F20;
				padding-bottom: 1em;
			}

			.sponsorImg{
				height: 150px;
				margin-top: 4.8em;
				display: inline-block;
			}

			.sponsorText{
				width: 70%;
				text-align: left;
				display: inline-block;
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

			.lastItem{
				border-bottom: none;
			}
        </style>
	</head>
	<body>
		<div class="wrapper container">
			<?php require_once('header.php');?>
			<div class="sponsorCenter">
					<div class="sponsorItem">
						<h2 class="title">Nicolas Stanzione</h2>
						<img src="images/nick.png" class="sponsorImg" />
						<p class="sponsorText">Nouria Energy Corporation is a fuel distributor supplying gasoline and diesel to over 125 service stations. We operate 83 convenience stores with fuel; 
						some locations also consist of quick serve restaurants such as Dunkin Donuts, McDonald’s and Subway. We also take pride in our Lil Mart brand locations in 
						Maine. Our corporate headquarters are situated in Worcester, Massachusetts with an international support center in Lebanon.</p>
					</div>
					<div class="sponsorItem">
						<h2 class="title">Josh Blanchette</h2>
						<img src="images/josh.png" class="sponsorImg" />
						<p class="sponsorText">Nouria Energy Corporation is a fuel distributor supplying gasoline and diesel to over 125 service stations. We operate 83 convenience stores with fuel; 
						some locations also consist of quick serve restaurants such as Dunkin Donuts, McDonald’s and Subway. We also take pride in our Lil Mart brand locations in 
						Maine. Our corporate headquarters are situated in Worcester, Massachusetts with an international support center in Lebanon.</p>
					</div>
					<div class="sponsorItem">
						<h2 class="title">Eric Getchell</h2>
						<img src="images/eric.jpg" class="sponsorImg" />
						<p class="sponsorText">Nouria Energy Corporation is a fuel distributor supplying gasoline and diesel to over 125 service stations. We operate 83 convenience stores with fuel; 
						some locations also consist of quick serve restaurants such as Dunkin Donuts, McDonald’s and Subway. We also take pride in our Lil Mart brand locations in 
						Maine. Our corporate headquarters are situated in Worcester, Massachusetts with an international support center in Lebanon.</p>
					</div>
					<div class="sponsorItem lastItem">
						<h2 class="title">Gregory Saras</h2>
						<img src="images/greg.png" class="sponsorImg" />
						<p class="sponsorText">Nouria Energy Corporation is a fuel distributor supplying gasoline and diesel to over 125 service stations. We operate 83 convenience stores with fuel; 
						some locations also consist of quick serve restaurants such as Dunkin Donuts, McDonald’s and Subway. We also take pride in our Lil Mart brand locations in 
						Maine. Our corporate headquarters are situated in Worcester, Massachusetts with an international support center in Lebanon.</p>
					</div>
				</div>
            <?php require_once('footer.php');?> 
		</div>
	</body>
</html>
<?php session_write_close();?>