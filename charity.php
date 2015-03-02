<?php
    $link = mysqli_connect("127.0.0.1","root","","gsarastestdb")or die("Error" . mysqli_error($link));
    $CharityQueryName = $_GET['charity'];
    $query = "SELECT * FROM `charities` WHERE `QueryName` ='" . $CharityQueryName."'";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($result))
    {
        $charityName =$row["CharityName"];
        $privateSupport =$row["PrivateSupport"];
        $totalRevenue =$row["TotalRevenue"];
        $fundraisingEfficiency =$row["FundraisingEfficiency"];
        $charitableCommitment =$row["CharitableCommitment"];
        $donorDependency =$row["DonorDependency"];
        $description =$row["Description"];
        $image =$row["Image"];
    }
?>

<!Doctype html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <title>Charity Source | Charity X</title>
        <link rel="stylesheet" type="text/css" href="css/egetchellcss.css">
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
    </head>
    <body class='charityBody'>
        <div class="wrapper">
            <?php require_once('header.php');?>
            <div class="charityContent">
                <h2 class='charityh2'><?php echo $charityName ?></h2>
                <img style='float:left; height: 90px; width: 200px; margin-top: 5px;' 
                     src="images/<?php echo $image ?>" alt="Charity's Logo"/>
                <div class="aboutCharity">
                    <p><?php echo $description ?></p>
                    <!--    <a href="#">Donate Now!</a>  -->
                    <button>Donate Now!</button>
                </div>

                <div class="AboutCharityStatsAll">

                    <a href="#" class="aboutStatsSingle">
                        <h3>How Contributions Help</h3>
                        <script type="text/javascript" src="javascripts/charityCharts.js"></script>
                        <script type="text/javascript" src="javascripts/canvasjs.min.js"></script> 
                        <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                    </a> 

                    <a href="#" class="aboutStatsSingle">
                        <h3>Compared to Other Charities</h3>
                        
                        
						<!-- content in "dbName" just a test to pull data from database -->
						<div id="dbName">						            
							<!-- http://html.net/tutorials/php/lesson20.php> -->                 
							<?php
								// Connect to database server
								mysql_connect("localhost", "egetchell", "paco");

								// Check connection
								if (mysqli_connect_errno())
								{
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								// Select database
								mysql_select_db("charity") or die(mysql_error());

								// SQL query
								$strSQL = "SELECT * FROM charities";
                                
								// Execute the query (the recordset $rs contains the result)
								$rs = mysql_query($strSQL);
								// Loop the recordset $rs
								// Each row will be made into an array ($row) using mysql_fetch_array
								while($row = mysql_fetch_array($rs)) {
									// Write the value of the column FirstName (which is now in the array $row)
									echo $row['CharityName'] . "<br />";
								}
								// Close the database connection
								mysql_close();
							?>
						</div>                

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    </a>

                    <a href="#" class="aboutStatsSingle">
                        <h3>Future Goals</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    </a>                   

                </div>
                <button class="summaryButton">View Full Summary</button>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>
