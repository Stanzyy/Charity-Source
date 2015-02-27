<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Charity Source | Browse</title>
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type= "text/css" href="css/josh.css">
	</head>
    <?php       
        #username and password in a var#
        ################################
        $username = "gsaras";
        $password = "20Bacon!Eggs15";
        $dbname = "gsarastestdb";


        #array of queries#
        ##################
        $queries = array( 
        1 => "SELECT * FROM `Charities`" , 
        2 => "SELECT CharityName FROM Charities" , 
        3 => "SELECT CharityName,PrivateSupport FROM Charities" , 
        4 => "SELECT CharityName,TotalRevenue FROM Charities" , 
        5 => "SELECT CharityName,DonorDependency FROM Charities" 
        ) ; 
        $queryno = 1 ; 
        if ( isset( $_GET['queryno'] ) ) 
        { 
            $queryno = intval( $_GET['queryno'] ) ; 
        } 
        $sql = $queries[$queryno] ; 
    
        #Connect to MySQL database#
        ###########################
        $db = new mysqli( "localhost", $username, $password, $dbname ) ; 
        if ( $db->connect_errno > 0 ) 
        { 
            die( '<p>Unable to connect to database [' . $db->connect_error . ']</p>' ) ; 
        } 
        else 
        { 
            echo "<p>Connected to MySQL using database <b>{$dbname}</b>.</p>" ; 
        } 
    
        #retrieve data from db#
        #######################
        echo "<p>Running query:&nbsp; <strong>$sql</strong></p>" ; 
        if ( ! $result = $db->query( $sql ) ) 
        { 
            die( '<p>There was an error running the query [' . $db->error . ']</p>' ) ; 
        } 


        #display data#
        ##############

        if ( mysqli_num_rows( $result ) == 0 ) 
        { 
            echo "No matching records were found." ; 
        } 
        else 
        { 
            echo "<ol>"; 
            while ( $row = $result->fetch_assoc() ) 
            { 
                switch ( $queryno ) 
                { 
                    case 1 : 
                    echo "<li>{$row['CharityName']} {$row['PrivateSupport']} {$row['TotalRevenue']} {$row['FundraisingEfficiency']} 
                    {$row['CharitableCommitment']} {$row['DonorDependency']} </li>" ; 
                    break ; 
                    
                    case 2 : 
                    echo "<li>{$row['CharityName']}</li>" ; 
                    break ;
                    
                    case 3 : 
                    echo "<li>{$row['CharityName']} {$row['PrivateSupport']} <li>";
                    break;
                    
                    case 4 :
                    echo "<li>{$row['CharityName']} {$row['TotalRevenue']} <li>";
                    break;
                    
                    case 5:
                    echo "<li>{$row['CharityName']} {$row['DonorDependency']} <li>";
                    break;
                }
            }
            echo "</ol>";
    ?>

    
    
	<body> 
		<div class="wrapper">
            <?php require_once('header.php');?>
			<div class="browseContent">
				<div class="filters">
					<p>Search for a Charity Here:<input ng-model="search1" type="text"></p>
					<h3>Available Charities</h3>
					<ul>
						<li>Filter 1</li>
						<li>Filter 2</li>
						<li>Filter 3</li>
						<li>Filter 4</li>
					</ul>
				</div>
				<div class="resultList">
					<div class="result">
						<a href="#"><img src="images/charity1.png" style="height: 75px; width: 75px;" /></a>
						<p class="charityDescription"></p>
                            <p> This is the charity information for charity 1</p>
						<a href="#">Go!</a>
					</div>
					<div class="result">
						<a href="#"><img src="images/charity2.png" style="height:75px; width:75px;" /></a>
						<p class="charityDescription"></p>
                            <p>This is the charity information for charity 2</p>
						<a href="#">Go!</a>
					</div>
					<div class="result">
						<a href="#"><img src="images/charity3.png" style="height:75px; width:75px;" /></a>
						<p class="charityDescription"></p>
                            <p> This is the charity information for charity 3</p>
						<a href="#">Go!</a>
					</div>
                    <div class="result">
						<a href="#"><img src="images/charity4.png" style="height:75px; width:75px;" /></a>
						<p class="charityDescription"></p>
                            <p> This is the charity information for charity 4</p>
						<a href="#">Go!</a>
                    </div>
					<button id="moreResults">More -></button>
				</div>
			</div>
			<?php require_once('footer.php');?>
		</div>
	</body>
</html>