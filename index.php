<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Charity Source | Home</title>
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type= "text/css" href="css/josh.css">
        <script type="text/javascript" src="/assets/script/canvasjs.min.js"></script> 
	</head>
	<body>
		<div class="wrapper">
			<header>
                <?php require_once('header.php');?>
			</header>
			<div class="homePageContent">
				<h3>Top Charities</h3>
				<div class="charityContainer"><a href="#"><img src= "images/charity1.png"> Link to charity</a></div>
				<div class="charityContainer"><a href="#"><img src= "images/charity2.png"> Link to charity</a></div>
				<div class="charityContainer"><a href="#"><img src = "images/charity3.png"> Link to charity</a></div>
				<div class="infographics"></div>
                    <!--http://canvasjs.com/html5-javascript-pie-chart/-->
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
				<div class="charityGoals">
					<div class="slides"></div>
                        
					<button>Help them out!</button>
				</div>  
			</div>
			<footer></footer>
		</div>
	</body>
</html>