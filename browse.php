<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Charity Source | Browse</title>
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type="text/css" href="css/joshbrowse.css">
	</head>
    <!--
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
    -->

    
    
	<body> 
		<div class="wrapper">
            <?php require_once('header.php');?>
			<div class="browseContent">
				<div class="filters">
					<p>Search for a Charity Here:<input type="text" id='resultSearch'></p>
                    <select class="sort-options">
                        <option value="">Default</option>
                        <option value="title">Name</option>
                        <option value="popularity">Most Popular</option>
                    </select>
					<h3>Available Charities</h3>
					
						<button id="blood">Filter for Blood</button>
                        <button id="cancer">Filter for Cancer</button>
						<button id="clothes">Filter for Clothes</button>
                        <button id="all">Filter for All</button>
					
				</div>
				<div class="resultList">
					<div class="result cancer" data-name="CancerSociety" data-popularity="3">
						<a href="#"><img src="images/AmericanCancerSociety.png" style="height: 75px; width: 75px;" /></a>
						<h3 class = "charityHead">American Cancer Society</h3>
                        <p class="charityDescription1"></p>
                            <p> This is the charity information for charity 1</p>
						<a href="charity.php">Go!</a>
					</div>
					<div class="result blood" data-name="RedCross" data-popularity="5">
						<a href="#"><img src="images/AmericanRedCross.jpg" style="height:75px; width:75px;" /></a>
                        <h3 class = "charityHead">American Red Cross</h3>
						<p class="charityDescription2"></p>
                            <p>This is the charity information for charity 2</p>
						<a href="charity.php">Go!</a>
					</div>
					<div class="result clothes" data-name="SalvationArmy" data-popularity="1">
						<a href="#"><img src="images/SalvationArmy.png" style="height:75px; width:75px;" /></a>
                        <h3 class = "charityHead">Salvation Army</h3>
						<p class="charityDescription3"></p>
                            <p> This is the charity information for charity 3</p>
						<a href="charity.php">Go!</a>
					</div>
                    <div class="result" data-name="UnitedWay" data-popularity="2">
						<a href="#"><img src="images/UnitedWay.png" style="height:75px; width:75px;" /></a>
                        <h3 class = "charityHead">United Way</h3>
						<p class="charityDescription4"></p>
                            <p> This is the charity information for charity 4</p>
						<a href="charity.php">Go!</a>
                    </div>
					<!--<button id="moreResults">More -></button> -->
				</div>
			</div>
			<?php require_once('footer.php');?>
		</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="javascripts/modernizr.js"></script>
        <script src="javascripts/jquery.shuffle.js"></script>
        <script>
            var galleryJS = 
            {
                Init : function()
                {
                    galleryJS.SetGrid();
                    galleryJS.SetFilter();
                    galleryJS.SetSort();
                    galleryJS.SetSearch();
                }, //end of init : function()
                
                SetGrid : function(){
                    var $grid = $('.resultList'),
                        $sizer = $grid.find('.shuffle__sizer');
                    
                    $grid.shuffle({
                        itemSelector: '.result'
                    });
                },
                
                SetFilter: function(){
                    $('#all').unbind().click(function(){
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el;
                        });
                    });
                    
                    $('#blood').unbind().click(function(){
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('blood');                      
                        });
                    });
                    
                    $('#cancer').unbind().click(function(){
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('cancer');                      
                        });
                    });
                
                    $('#clothes').unbind().click(function(){
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('clothes');                      
                        });
                    });
                }, //end of setFilter function
                
                SetSort : function(){
                    $('.sort-options').on('change', function() {
                        var sort = this.value,
                            opts = {};
                        if(sort === 'title'){
                            opts = {
                                by: function($el){
                                    return $el.data('name')
                                } //end of by: function

                            };//end of opts
                        } else if(sort === 'popularity'){
                            opts = {
                                by: function($el){
                                    return $el.data('popularity')
                                }
                            
                            };
                        
                        }
                     $('.resultList').shuffle('sort', opts);

                    });
                }, //end of setsort function
                
                SetSearch : function(){
                    $('#resultSearch').on('keyup change', function(){
                        var val = this.value.toLowerCase();
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            if(shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('group')) === -1){
                                return false;
                            } //end of if
                            var text = $.trim($el.find('.charityHead').text() ).toLowerCase();
                            return text.indexOf(val) !== -1;
                        });
                    });
            
                }//end of set search
            }//end of var galleryJS
                
            $(function(){
                
                galleryJS.Init();
                
            }) //end of function() function
            
        </script>
	</body>
</html>