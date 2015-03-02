<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Charity Source | Home</title>
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type="text/css" href="css/joshindex.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.4.1/canvas.min.js"></script> 
	</head>
	<body>
		<div class="wrapper">
            <?php require_once('header.php');?>
			<div class="homePageContent">
				<h3>Top Charities</h3>
                <div class="images">
				    <div class="charity1">
                        <a href="charity.php"><img src= "images/AmericanRedCross.jpg" style="height: 100px; width: 100px;"> Link to charity</a>
                    </div>
                
				    <div class="charity2">
                        <a href="charity.php"><img src= "images/AmericanCancerSociety.png" style="height: 100px; width: 100px;"> Link to charity</a>
                    </div>
                
				    <div class="charity3">
                        <a href="charity.php"><img src= "images/SalvationArmy.png" style="height: 100px; width: 100px;"> Link to charity</a>
                    </div>
                </div>
				<div class="infographics">
                    <p>These are the graphs for charity X</p>
                    
                    <script type="text/javascript">
                        window.onload = function () 
                        {
	                       var chart = new CanvasJS.Chart("chartContainer",
	                       {
		                     title:
                             {
			                   text: "Charity Facts"
		                     },
                             animationEnabled: true,
		                     legend:
                             {
			                   verticalAlign: "center",
			                   horizontalAlign: "left",
			                   fontSize: 14,
			                   fontFamily: "Helvetica"        
		                     },
		                     theme: "theme2",
		                     data: 
                             [
		                     {        
			                   type: "pie",       
                               indexLabelFontFamily: "Garamond",       
			                   indexLabelFontSize: 20,
			                   indexLabel: "{label} {y}%",
			                   startAngle:-20,      
			                   showInLegend: true,
			                   toolTipContent:"{legendText} {y}%",
			                   dataPoints: 
                               [
				                 {  y: 83.24, legendText:"Google", label: "Google" },
				                 {  y: 8.16, legendText:"Yahoo!", label: "Yahoo!" },
				                 {  y: 4.67, legendText:"Bing", label: "Bing" },
				                 {  y: 1.67, legendText:"Baidu" , label: "Baidu"},       
				                 {  y: 0.98, legendText:"Others" , label: "Others"}
			
                               ]
		                   }
		                   ]
	                     });
	                   chart.render();
                    }
                </script>
                
                </div>
				<div class="charityGoals">
					<div class="slides">
                        <p>These are the goals for X charity</p>
                    </div>
                    <div class="button">    
					   <button>Donate Here!</button>
                    </div>    
				</div>
			</div>
			<?php require_once('footer.php');?>
		</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="javascripts/header.js"></script>
	</body>
</html>