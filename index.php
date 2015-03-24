<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Home | Charity Source</title>
        <!-- Imports stylesheets and icons -->
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type="text/css" href="css/joshindex.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"> 
	</head>
	<body>
		<div class="wrapper">
            <!-- Imports generic header. -->
            <?php require_once('header.php');?>
			<div class="homePageContent">
                <!-- Below lists the top three charities.  We will eventually sort them based on real popularity, but for now its hardcoded -->
				<h3>Top Charities</h3>
                <div class="images">
				    <div class="charity1">
                        <a href="charity.php?charity=AmericanRedCross"><img src= "images/AmericanRedCross.png" style="height: 100px; width: 100px;"> Link to charity</a>
                    </div>
                
				    <div class="charity2">
                        <a href="charity.php?charity=AmericanCancerSociety"><img src= "images/AmericanCancerSociety.png" style="height: 100px; width: 100px;"> Link to charity</a>
                    </div>
                
				    <div class="charity3">
                        <a href="charity.php?charity=SalvationArmy"><img src= "images/SalvationArmy.png" style="height: 100px; width: 100px;"> Link to charity</a>
                    </div>
                </div>
                <!-- Below are graphs and charts for the top charity in our database.  More of this in the future. -->
                <div class="boxes">
				<div class="infographics">
                    <p>These are the graphs for charity X</p>
                    </div>
					<div class="slides">
                        <p>These are the goals for X charity</p>
                    </div>
                </div>
                    <div class="button">    
					    <!-- Form below is for paypal button -->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>    
			</div>
            <!-- Import generic footer. -->
			<?php require_once('footer.php');?>
		</div>
        <!-- Import JS library -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.4.1/canvas.min.js"></script>
        <script type="text/javascript">
                        //Broken JS for graphs on the most popular charity.  In the making.
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
	</body>
</html>