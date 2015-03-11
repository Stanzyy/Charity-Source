<!-- list of php commands below.  Declaring variables, then generating data on the fly -->

<?php
    $link = mysqli_connect("127.0.0.1","root","","gsarastestdb")or die("Error" . mysqli_error($link));
    $CharityQueryName = $_GET['charity'];
    $query = "SELECT * FROM `charities` WHERE `QueryName` ='" . $CharityQueryName."'";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($result))
    {   //variable names for information in charitydb
        //associative array?
        $charityName =$row["CharityName"];
        $privateSupport =$row["PrivateSupport"];
        $totalRevenue =$row["TotalRevenue"];
        $fundraisingEfficiency =$row["FundraisingEfficiency"];
        $charitableCommitment =$row["CharitableCommitment"];
        $donorDependency =$row["DonorDependency"];
        $description =$row["Description"];
        $image =$row["Image"];
		$otherSupport =$totalRevenue - $privateSupport;
		$privatePercent =$english_format_number = number_format(($privateSupport/$totalRevenue) * 100, 2, '.', '');
		$otherPercent =$english_format_number = number_format(100 - $privatePercent, 2, '.', '');		
    }
?>

<!Doctype html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <title><?php echo $charityName ?> | Charity Source</title>
        <link rel="stylesheet" type="text/css" href="css/egetchellcss.css">
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body class='charityBody'>
        <div class="wrapper">
            <?php require_once('header.php');?> //includes generic header
            <div class="charityContent">
                <h2 class='charityh2'><?php echo $charityName ?></h2>
                <img style='float:left; height: 90px; width: 200px; margin-top: 5px;' 
                     src="images/2<?php echo $image ?>" alt="Charity's Logo"/>
                <div class="aboutCharity">
                    <p><?php echo $description ?></p>
                    <!-- Form below is for paypal button -->
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <?php 
                        if (isset($_POST['submit'])){
                            //echo "<script type='text/javascript'>alert('1');</script>";  //Test code
                        }
                    ?>

                </div>

                <div class="AboutCharityStatsAll">
                    <a href="#" class="aboutStatsSingle">
                        <h3>How Contributions Help</h3>
            <!-- Script below generates the pie chart, pulling data from the database to populate it -->
			<script>						
				window.onload = function () {
					var chart = new CanvasJS.Chart("chartContainer",
					{
						title:{
							text: "Financial Percentages",
							text: "Total Revenue = <?php echo $totalRevenue ?>" 
						},
								animationEnabled: true,
						legend:{
							verticalAlign: "center",
							horizontalAlign: "left",
							fontSize: 15,
							fontFamily: "Helvetica"        
						},
						theme: "theme2",
						data: [
						{        
							type: "pie",       
							indexLabelFontFamily: "Garamond",       
							indexLabelFontSize: 15,
							
							startAngle:-20,      
							showInLegend: true,
							toolTipContent:"{legendText} {y}%",
							dataPoints: [
								{  y: "<?php echo $privatePercent ?>", legendText:"Private Support", label: "<?php echo $privateSupport ?>" },
								{  y: "<?php echo $otherPercent ?>", legendText:"Other Support", label: "<?php echo $otherSupport ?>" }
							]
						}
						]
					});
					chart.render();
				}
				</script>	<!-- End of shuffleJS -->
					
				<script type="text/javascript" src="javascripts/canvasjs.min.js"></script> 
	                   <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                    </a>
					
                    <a href="#" class="aboutStatsSingle">
                        <h3><?php echo $charityName ?> Statistics</h3>
				<p> Total Revenue: <?php echo $totalRevenue ?></p>
				<p> Fundraising Efficiency: <?php echo $fundraisingEfficiency ?>%</p>
				<p> Charitiable Commitment: <?php echo $charitableCommitment ?>%</p>
				<p> Donor Dependency: <?php echo $donorDependency ?>%</p>				
                    </a>
					
                    <a href="#" class="aboutStatsSingle">
                        <h3>Current and Future Goals</h3>
                        	<p> 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
				<p> 2. Sed do eiusmod tempor incididunt ut labore et dolore magna </p>
				<p> 3. Ut enim ad minim veniam, quis nostrud exercitation </p>
                    </a>
                </div>
                <!-- Decided not to include this feature below. -->
                <!--<button class="summaryButton">View Full Summary</button>-->
            </div>
            <?php require_once('footer.php');?> <!-- Includes generic footer -->
        </div>
    </body>
</html>
