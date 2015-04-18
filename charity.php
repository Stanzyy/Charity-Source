<!-- list of php commands below.  Declaring variables, then generating data on the fly -->
<?php session_start();?>
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
		// Three variables below will be added to the database at a later date so that 
		//		it won't have to do math everytime the user navigates to a new charity page
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
		<!-- Two links to style sheets used --> 
    <!--    <link rel="stylesheet" type="text/css" href="css/egetchellcss.css">
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
	-->	<!-- Links to favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<!-- jQuery link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <style type="text/css">
            .moreInfo{
                text-decoration: underline;
                color: blue;
                cursor: pointer;
            }

            .gotIt{
                cursor: pointer;
            }
        </style>
    </head>
    <body class='charityBody'>
        <div class="wrapper">
            <?php require_once('header.php');?> 
            <div class="charityContent">
             <!--   <h2 class='charityh2'><?php echo $charityName ?></h2> -->
                <div class="imgWrapper row text-center">
                    <img class="charityImg"src="images/2<?php echo $image ?>" alt="Charity's Logo"/>
                </div> <!--/.imgWrapper -->
                <div class="AboutCharityStatsAll container">
                    <div class="row">
                        <div class="aboutStatsSingle padHere col-xs-6 .col-md-4">
                            <!-- The description of the charity will be pulled from the database -->
                             <h3>About</h3>
                            <p><?php echo $description ?></p>
                            <!-- Form below is for paypal button -->
                                               
                        </div> <!-- End of aboutCharity div -->
                
                
                        <div class="aboutStatsSingle col-xs-6 .col-md-4">
                            <h3>How Contributions Help</h3>

                            <!-- Script below generates the pie chart, 
                                pulling data from the database to populate it -->
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

                            <!-- Link to canvasJS which was used to create the pie charts -->	
                            <script type="text/javascript" src="javascripts/canvasjs.min.js"></script> 
                           <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                        </div> <!--/.aboutStatsSingle -->
					</div> <!--./row -->
                    <div class="row">
                        <div class="aboutStatsSingle padHere col-xs-6 .col-md-4">
                            <!-- Simply echo the php variables and the 
                                    appropriate charity variables will be displayed -->
                            <h3><?php echo $charityName ?> Statistics</h3>
                            <p> Total Revenue: <?php echo $totalRevenue ?> million <span class="moreInfo" id="aboutRevenue">?</span></p>
                            <p> Fundraising Efficiency: <?php echo $fundraisingEfficiency ?>% <span class="moreInfo" id="aboutEfficiency">?</span></p>
                            <p> Charitiable Commitment: <?php echo $charitableCommitment ?>% <span class="moreInfo" id="aboutCommitment">?</span></p>
                            <p> Donor Dependency: <?php echo $donorDependency ?>% <span class="moreInfo" id="aboutDependency">?</span></p>				
                        </div>

                        <!-- Dummy future goals. Later, goals will be added to the database and will be
                                pulled and displayed in the same manner as the variables
                                in the class above-->
                        <div class="aboutStatsSingle col-xs-6 .col-md-4">
                            <h3>Current and Future Goals</h3>
                            <p> 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                            <p> 2. Sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <p> 3. Ut enim ad minim veniam, quis nostrud exercitation </p>
                        </div><!--/.aboutStatsSingle -->
                    </div> <!--/.row -->
                </div> <!--/.AboutCharityStatsAll -->
                <div class="paypal">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" id="paypalButton" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form> <!-- End of PayPal form --> 
                </div><!--/.paypal -->
                    
                <!-- Decided not to include this feature below. -->
                <!--<button class="summaryButton">View Full Summary</button>-->                
            </div> <!--/.charityContent -->
            <?php require_once('footer.php');?> <!-- Includes generic footer -->
        </div>

        <!-- Revenue Modal -->
        <div class="modal fade" id="revenueModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">About Revenue</h4>
              </div>
              <div class="modal-body">
                <p>This is the description about Revenue</p>
              </div>
              <div class="modal-footer">
                <p class="gotIt">Got it</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" id="Revenue" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#revenueModal" style="display:none">
        Revenue Modal
        </button>

        <!-- Efficiency Modal -->
        <div class="modal fade" id="efficiencyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">About Efficiency</h4>
              </div>
              <div class="modal-body">
                <p>This is the description about Efficiency</p>
              </div>
              <div class="modal-footer">
                <p class="gotIt">Got it</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" id="Efficiency" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#efficiencyModal" style="display:none">
        Efficiency Modal
        </button>

        <!-- Commitment Modal -->
        <div class="modal fade" id="commitmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">About Commitment</h4>
              </div>
              <div class="modal-body">
                <p>This is the description about Commitment</p>
              </div>
              <div class="modal-footer">
                <p class="gotIt">Got it</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" id="Commitment" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#commitmentModal" style="display:none">
        Commitment Modal
        </button>

        </div><!--/.wrapper -->

		<!-- Link for tracking donations to the charity -->
        <script src="javascripts/trackDonate.js"></script>
        <script type="text/javascript">
            var charityPageJS = {
                init: function(){
                    $(".moreInfo").click(function(){
                        var btn = $(this).attr("id");
                        $(this).addClass("clicked");
                        $("#" + btn.replace("about",''))[0].click();
                    });

                    $(".gotIt").click(function(){
                        var btn = $(".clicked").attr("id");
                        $(".clicked").removeClass("clicked");
                        $("#" + btn.replace("about",''))[0].click();
                    });
                }
            }

            $(function(){
                charityPageJS.init();
            })
        </script>
    </body> <!-- End of charityBody div -->
</html>
