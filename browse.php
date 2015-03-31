<?php session_start();?>
<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Browse | Charity Source</title>
        <!-- Imported stylesheets and images below. -->
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type="text/css" href="css/joshbrowse.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <style>
            <!-- Inline CSS below controls positioning the sort text, changes background of filters,
                 and controls the position and size of the filter buttons.  -->
            .filterButton{
                border: none;
                height: 3em;
                width: 5em;
                cursor: pointer;
            }
            
            .filterOn{
                background-color: #5A5D71;
            }
            
            .sortText{
                display: inline-block;
            }
        </style>
	</head>
    <!-- Below is code provided by Jesse.  We used it at first, then made our own sql code in the future. -->
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
            <!-- Imports generic header. -->
            <?php require_once('header.php');?>
			<div class="browseContent">
				<div class="filters">
                    <!-- Textbox to search for charities. -->
					<input placeholder="Search Charities..." type="text" id='resultSearch'>
                    <!-- Below sets values for the dopdown, to sort by either Name or Most Popular. -->
                    <p class="sortText">Sort by:</p>
                    <select class="sort-options">
                        <option value="title">Name</option>
                        <option value="popularity">Most Popular</option>
                    </select>
                    <!-- Filter buttons below that consist of the filters available. -->
					<h3>Filters</h3>
                        <button class="filterOn filterButton" id="all">All</button>
						<button class="filterButton" id="blood">Blood</button>
                        <button class="filterButton" id="cancer">Cancer</button>
						<button class="filterButton" id="clothes">Clothing</button>
                        <button class="filterButton" id="community">Community</button>
                        <button class="filterButton" id="food">Food</button>
				</div>
                <!-- The next couple chunks of code are all the charities available to search for, along with basic information about each charity. -->
				<div class="resultList">
					<div class="result cancer" data-name="CancerSociety" data-popularity="3">
						<a href="charity.php?charity=AmericanCancerSociety"><img src="images/AmericanCancerSociety.png" style="height: 100px; width: 100px;" /></a>
						<h3 class = "charityHead">American Cancer Society</h3>
                        <p class="charityDescription1"></p>
                            <p> This is the charity information for charity 1</p>
                        <!-- These href's generate data on the fly, and construct one charity.php for the charity choosen.  Consistent thoughout each charity. -->
						<a href="charity.php?charity=AmericanCancerSociety">Go!</a>
					</div>
					<div class="result blood" data-name="AmericanRedCross" data-popularity="5">
						<a href="charity.php?charity=AmericanRedCross"><img src="images/AmericanRedCross.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">American Red Cross</h3>
						<p class="charityDescription2"></p>
                            <p>This is the charity information for charity 2</p>
						<a href="charity.php?charity=AmericanRedCross">Go!</a>
					</div>
					<div class="result clothes" data-name="SalvationArmy" data-popularity="1">
						<a href="charity.php?charity=SalvationArmy"><img src="images/SalvationArmy.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">Salvation Army</h3>
						<p class="charityDescription3"></p>
                            <p> This is the charity information for charity 3</p>
						<a href="charity.php?charity=SalvationArmy">Go!</a>
					</div>
                    <div class="result community" data-name="UnitedWay" data-popularity="2">
						<a href="charity.php?charity=UnitedWay"><img src="images/UnitedWay.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">United Way</h3>
						<p class="charityDescription4"></p>
                            <p> This is the charity information for charity 4</p>
						<a href="charity.php?charity=UnitedWay">Go!</a>
                    </div>
                    
                    <div class="result food" data-name="FeedingAmerica" data-popularity="4">
						<a href="charity.php?charity=FeedingAmerica"><img src="images/2FeedingAmerica.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">Feeding America</h3>
						<p class="charityDescription5"></p>
                            <p> This is the charity information for charity 5</p>
						<a href="charity.php?charity=FeedingAmerica">Go!</a>
                    </div>
                    
                    <div class="result community" data-name="TaskForceforGlobalHealth" data-popularity="4">
						<a href="charity.php?charity=TaskForceforGlobalHealth"><img src="images/2TaskForceforGlobalHealth.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">Task Force for Global Health</h3>
						<p class="charityDescription6"></p>
                            <p> This is the charity information for charity 6</p>
						<a href="charity.php?charity=TaskForceforglobalHealth">Go!</a>
                    </div>

                    <div class="result food" data-name="FoodforthePoor" data-popularity="4">
						<a href="charity.php?charity=FoodforthePoor"><img src="images/2FoodforthePoor.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">Food for the Poor</h3>
						<p class="charityDescription7"></p>
                            <p> This is the charity information for charity 7</p>
						<a href="charity.php?charity=FoodforthePoor">Go!</a>
                    </div>
                    
                    <div class="result community" data-name="GoodwillIndustriesInternational" data-popularity="4">
						<a href="charity.php?charity=GoodwillIndustriesInternational"><img src="images/2GoodwillIndustriesInternational.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">Goodwill Industries International</h3>
						<p class="charityDescription8"></p>
                            <p> This is the charity information for charity 8</p>
						<a href="charity.php?charity=GoodwillIndustriesInternational">Go!</a>
                    </div>
                    
                    <div class="result community" data-name="YMCAoftheUSA" data-popularity="4">
						<a href="charity.php?charity=FoodforthePoor"><img src="images/2YMCAoftheUSA.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">YMCA of the USA</h3>
						<p class="charityDescription9"></p>
                            <p> This is the charity information for charity 9</p>
						<a href="charity.php?charity=YMCAoftheUSA">Go!</a>
                    </div>
                    
                    <div class="result community" data-name="WorldVision" data-popularity="4">
						<a href="charity.php?charity=WorldVision"><img src="images/2WorldVision.png" style="height: 100px; width: 100px;" /></a>
                        <h3 class = "charityHead">World Vision</h3>
						<p class="charityDescription10"></p>
                            <p> This is the charity information for charity 10</p>
						<a href="charity.php?charity=WorldVision">Go!</a>
                    </div>
                    
                    
                    <!-- ADD MORE CHARITIES BELOW!!!! -->
                    
                    
                    
					<!--<button id="moreResults">More -></button> -->
				</div>
			</div>
            <!-- Imports generic footer. -->
			<?php require_once('footer.php');?>
		</div>
        <!-- Import some JS libraries. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="javascripts/modernizr.js"></script>
        <script src="javascripts/jquery.shuffle.js"></script>
        <script>
            //The script below constructs shuffleJS.  It allows the fluid motions for charities when they are being searched for.
            
            var galleryJS = 
            {
                Init : function()
                {
                    //decleration of functions that are coded below.
                    
                    galleryJS.SetGrid();
                    galleryJS.SetFilter();
                    galleryJS.SetSort();
                    galleryJS.SetSearch();
                }, //end of init : function()
                
                //SetGrid function designs the invisible grid and places the charities accordingly.
                SetGrid : function(){
                    var $grid = $('.resultList'),
                        $sizer = $grid.find('.shuffle__sizer');
                    
                    $grid.shuffle({
                        itemSelector: '.result'
                    });
                },
                
                //SetFilter function applies all available filters, and when a filter is selected, the charities are shuffled accordingly.
                SetFilter: function(){
                    $('#all').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el;
                        });
                    });
                    
                    $('#blood').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('blood');                      
                        });
                    });
                    
                    $('#food').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('food');                      
                        });
                    });
                    
                    $('#community').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('community');                      
                        });
                    });
                    
                    $('#cancer').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('cancer');                      
                        });
                    });
                
                    $('#clothes').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('clothes');                      
                        });
                    });
                }, //end of setFilter function
                
                //SetSort function applies all available filters in the DROPDOWN, and when a filter is selected, the charities are shuffled accordingly.
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
                
                //SetSearch function applies all available filters in the SEARCH BOX, and when a filter is selected, the charities are shuffled accordingly.
                SetSearch : function(){
                    $('#resultSearch').on('keyup change', function(){
                        $(".filterOn").removeClass("filterOn");
                        $("#all").addClass("filterOn");
                        var val = this.value.toLowerCase();
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            if(shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1){
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
<?php session_write_close(); ?>