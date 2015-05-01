<?php     
    //Start a session, is used to render the header.
    session_start();

    //Connect to the database to get what we need to display the page
    $link = mysqli_connect("127.0.0.1","root","","gsarastestdb")or die("Error" . mysqli_error($link));
    
    //GET request to get the name of the charity to pull data from in database
    $CharityQueryName = $_GET['charity'];
    $query = "SELECT * FROM `charities` WHERE `QueryName` ='" . $CharityQueryName."'";
    $result = mysqli_query($link, $query);

    //Read in the results from the query
    while($row = mysqli_fetch_array($result))
    {   
        //variable names for information in charitydb        
        $charityName           = $row["CharityName"];
        $privateSupport        = $row["PrivateSupport"];
        $totalRevenue          = $row["TotalRevenue"];
        $fundraisingEfficiency = $row["FundraisingEfficiency"];
        $charitableCommitment  = $row["CharitableCommitment"];
        $donorDependency       = $row["DonorDependency"];
        $description           = $row["Description"];  
        $image                 = $row["Image"];

        $otherSupport          = $totalRevenue - $privateSupport;
        $privatePercent        = $english_format_number = number_format(($privateSupport/$totalRevenue) * 100, 2, '.', '');
        $otherPercent          = $english_format_number = number_format(100 - $privatePercent, 2, '.', '');		
    }
?>

<!Doctype html>
<html lang='en'>

    <head>
        <meta charset='utf-8' />
        <title><?php echo $charityName ?> | Charity Source</title>
		
        <!--Favicon links-->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- pulls in all our css -->
        <?php require_once("css.php");?> 
		
    </head>

    <body class='charityBody'>
        <div class="wrapper">
            <?php require_once('header.php');?> 
            <div class="charityContent">
                <?php echo $charityName ?>
                
                <!-- charity image -->
                <div class="imgWrapper row text-center">
                    <img class="charityImg"src="images/2<?php echo $image ?>" alt="Charity's Logo"/>
                </div>

                <div class="AboutCharityStatsAll container">
                    <div class="row">
                        
                        <div class="aboutStatsSingle padHere col-xs-6 .col-md-4">
                            <!-- The description of the charity will be pulled from the database -->
                            <h3>About</h3>
                            <p><?php echo $description ?></p>
                        </div>

                        <div class="aboutStatsSingle col-xs-6 .col-md-4">
                            <h3>How Contributions Help</h3>
                            
                            <!-- Link to canvasJS which was used to create the pie charts -->	
                            <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                        
                        </div> <!--/.aboutStatsSingle -->
                    </div> <!--./row -->

                    <div class="row">
                        <div class="aboutStatsSingle padHere col-xs-6 .col-md-4">
                            <!-- Simply echo the php variables and the appropriate charity variables will be displayed -->
                            <h3><?php echo $charityName ?> Statistics</h3>
                            <p>Total Revenue: <?php echo $totalRevenue ?> million <span class="moreInfo" id="aboutRevenue">?</span></p>
                            <p>Fundraising Efficiency: <?php echo $fundraisingEfficiency ?>% <span class="moreInfo" id="aboutEfficiency">?</span></p>
                            <p>Charitiable Commitment: <?php echo $charitableCommitment ?>% <span class="moreInfo" id="aboutCommitment">?</span></p>
                            <p>Donor Dependency: <?php echo $donorDependency ?>% <span class="moreInfo" id="aboutDependency">?</span></p>				
                        </div>
                        
                        <!-- Dummy future goals. Later, goals will be added to the database and will be pulled and displayed in the same manner as the variables in the class above-->                        
                        <div class="aboutStatsSingle col-xs-6 .col-md-4">
                            <h3>Current and Future Goals</h3>
                            <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                            <p>2. Sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <p>3. Ut enim ad minim veniam, quis nostrud exercitation </p>
                        </div>
                    </div><!--/.row -->
                </div><!--/.AboutCharityStatsAll -->

                <!-- below is the code copy and pasted from Paypal to create the button -->
                <div class="paypal">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" id="paypalButton" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div><!--/.paypal -->
            </div><!--/.charityContent -->

            <!-- Includes generic footer -->
            <?php require_once('footer.php');?>
        </div>

        <!--Bootstrap Modals for the different categories of information we have on the charity page.  
            Triggered by clicking the question marks at the end of the descriptor value-->
        
        <!-- Revenue Modal-->
        <div class="modal fade" id="revenueModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">About Revenue</h4>
                    </div>
                    <div class="modal-body">
                        <p>Total revenue is the income that a company recieves from its normal business activities, usually from the sales of goods and services to customers.</p>
                    </div>
                    <div class="modal-footer">
                        <p class="gotIt">Got it</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Button that when clicked will open the corresponding description modal-->
        <button type="button" id="Revenue" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#revenueModal" style="display:none">Revenue Modal</button>

        <!-- Efficiency Modal -->
        <div class="modal fade" id="efficiencyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">About Fundraising Efficiency</h4>
                    </div>
                    <div class="modal-body">
                        <p>The amount spent to raise $1 in charitable contributions. To calculate a charity's fundraising efficiency, we divide its fundraising expenses by the total contributions it receives.  This important statistic shows the amount of contributions left after subtracting the cost of getting them.</p>
                    </div>
                    <div class="modal-footer">
                        <p class="gotIt">Got it</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Button that when clicked will open the corresponding description modal-->
        <button type="button" id="Efficiency" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#efficiencyModal" style="display:none">Efficiency Modal</button>

        <!-- Commitment Modal -->
        <div class="modal fade" id="commitmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">About Charitable Commitment</h4>
                    </div>
                    <div class="modal-body">
                        <p>This calculates how much of total expense went directly to the charitable purpose (which is also known as program support or program expense) as opposed to management, certain overhead and fundraising.</p>
                    </div>
                    <div class="modal-footer">
                        <p class="gotIt">Got it</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Button that when clicked will open the corresponding description modal-->
        <button type="button" id="Commitment" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#commitmentModal" style="display:none">Commitment Modal</button>

        <!-- Dependency Modal -->
        <div class="modal fade" id="dependencyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">About Donar Dependency</h4>
                    </div>
                    <div class="modal-body">
                        <p>This volatile statistic measures how badly a nonprofit needed your contribution to break even. We subtract the annual surplus or deficit from gifts, then divide this figure by the gifts. The higher the percentage, the more the charity, well, needed the charity. A ratio of 100% means the nonprofit spent all the gifts but didn’t run a deficit. A result above 100% means the nonprofit ran a deficit. </p>
                    </div>
                    <div class="modal-footer">
                        <p class="gotIt">Got it</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Button that when clicked will open the corresponding description modal-->
        <button type="button" id="Dependency" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#dependencyModal" style="display:none">Commitment Modal</button>

        <!-- Link for tracking donations to the charity -->
        <script src="javascripts/trackDonate.js"></script>

        <!--Link to canas.js which runs the pie charts.
        http://canvasjs.com/-->
        <script type="text/javascript" src="javascripts/canvasjs.min.js"></script> 
        
        <script type="text/javascript">
            //Charity page namespace. Kept in here because it uses php for the pie chart
            var charityPageJS = {
                init: function(){
                    //Set up listener for clicking the '?' which means the user wants more information on the category
                    $(".moreInfo").click(function(){
                        //Get the id
                        var btn = $(this).attr("id");
                        //Add a clicked class
                        $(this).addClass("clicked");
                        //Remove the word about from the id, select that id, then click the div. This simulates a button click which will open the modal
                        $("#" + btn.replace("about",''))[0].click();
                    });

                    //Listener for closing the modal
                    $(".gotIt").click(function(){
                        //Get the id of the opened modal
                        var btn = $(".clicked").attr("id");
                        //Remove the clicked class
                        $(".clicked").removeClass("clicked");
                        //Click the button for closing the modal
                        $("#" + btn.replace("about",''))[0].click();
                    });
                }
            }

            //Wait for the document to load
            $(function(){
                charityPageJS.init();
                // Create a new chart 
                var chart = new CanvasJS.Chart("chartContainer",
                {
                    // Cret the title of the chart and include the charity's total revenue
                    title:{                    
                        text: "Total Revenue = $<?php echo $totalRevenue ?>" 
                    },
                    
                    // Enabling the animation causes the chart to appear with an animation
                    animationEnabled: true,
                    
                    // Set the legend's position and font
                    legend:{
                        verticalAlign: "center",
                        horizontalAlign: "left",
                        fontSize: 15,
                        fontFamily: "Helvetica"        
                    },
                    // Setting the theme controls the colors of the chart
                    theme: "theme2",
                    
                    // Set the type of chart, font, text, and include the data of the chart
                    data: [
                    {        
                        type: "pie",       
                        indexLabelFontFamily: "Garamond",       
                        indexLabelFontSize: 15,
                        startAngle:-20,      
                        showInLegend: true,
                        toolTipContent:"{legendText} {y}%",
                        
                        // Used php to include the data so it is dynamically displayed depending on what charity is being showed
                        dataPoints: [
                            {  y: "<?php echo $privatePercent ?>", legendText:"Private Support", label: "$<?php echo $privateSupport ?>" },
                            {  y: "<?php echo $otherPercent ?>", legendText:"Other Support", label: "$<?php echo $otherSupport ?>" }
                        ]
                    }
                    ]
                });
                
                // Displays the chart
                chart.render();
            });
        </script>
    </body>
</html>