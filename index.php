<?php session_start();?>
<!Doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Browse | Charity Source</title>
        <!-- Imported stylesheets and images below. -->
 <!--       <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <link rel="stylesheet" type="text/css" href="css/joshbrowse.css">
-->        
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <style type="text/css">
        .result{
            width: 500px;
            margin-top: 2em;
            margin-left: 2.5em;
            margin-bottom: 2em;
            border: none;
            cursor: pointer;
        }

        .result:hover{
            border: 1px solid #000;
            border-radius: 5px;
            box-shadow: 3px 3px 2px #888888;
        }
        </style>
    </head>
	<body> 
		<div class="wrapper">
            <!-- Imports generic header. -->
            <?php require_once('header.php');?>
                <div class="carouselWidth">
                    <!-- Bootstrap carousel -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                     <!--   <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>                    
                        </ol>
    -->
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="charity.php?charity=AmericanRedCross"><img src= "images/AmericanRedCross.png" >
                            </div>
                            <div class="item">
                                <a href="charity.php?charity=AmericanCancerSociety"><img src= "images/AmericanCancerSociety.png" >
                            </div>
                            <div class="item">
                                <a href="charity.php?charity=SalvationArmy"><img src= "images/SalvationArmy.png">
                            </div>
                        </div> <!--/.carousel-inner -->

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> 
                    </div> <!--/#myCarousel -->
                </div> <!--/.carouselWidth -->
            </div> <!--/.wrapper -->
			<div class="browseContent container">
				<div class="filters">
                    <!-- Textbox to search for charities. -->
                    <div class="search row"> 
					   <input placeholder="Search Charities..." type="text" id='resultSearch' class= 'col-sm-4 form-control'>
                        <!-- Below sets values for the dopdown, to sort by either Name or Most Popular. -->
                        <p class="sortText">
                            <select class="sort-options form-control">
                                <option value="title">By Name</option>
                                <option value="popularity">By Popularity</option>
                            </select>
                        </p>
                    </div>
                    <!-- Filter buttons below that consist of the filters available. -->
					<h3 class="inline">Show results for </h3>
                    <button class="filterOn filterButton btn inline" id="all">All</button>
				    <button class="filterButton btn inline" id="blood">Blood</button>
                    <button class="filterButton btn inline" id="cancer">Cancer</button>
                    <button class="filterButton btn inline" id="children">Children</button>
				    <button class="filterButton btn inline" id="clothes">Clothing</button>
                    <button class="filterButton btn inline" id="community">Community</button>
                    <button class="filterButton btn inline" id="food">Food</button>
                      <!-- Sidebar -->
           <!--         
                    <div id="sidebar-wrapper">
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand"><p>Refine Search</p></li>
                            <li><button class="filterOn filterButton" id="all">All</button></li>
                            <li><button class="filterButton" id="blood">Blood</button></li>
                            <li><button class="filterButton" id="cancer">Cancer</button></li>
                            <li><button class="filterButton" id="children">Children</button></li>
                            <li><button class="filterButton" id="clothes">Clothing</button></li>
                            <li><button class="filterButton" id="community">Community</button></li>
                            <li><button class="filterButton" id="food">Food</button></li>
                        </ul>
                    </div> 
                    -->             
				</div>
                <!-- The next couple chunks of code are all the charities available to search for, along with basic information about each charity. -->
				<div class="resultList" >
					<div class="result cancer" data-name="CancerSociety" data-popularity="3">
						<a href="charity.php?charity=AmericanCancerSociety">
						  <h3 class = "charityHead"><img src="images/AmericanCancerSociety.png" style="height: 100px; width: 100px;" />
                          American Cancer Society</h3>
                        </a>
                        <!-- These href's generate data on the fly, and construct one charity.php for the charity choosen.  Consistent thoughout each charity. -->
					</div>
                    
					<div class="result blood" data-name="AmericanRedCross" data-popularity="5">
						<a href="charity.php?charity=AmericanRedCross">
                            <h3 class = "charityHead"><img src="images/AmericanRedCross.png" style="height: 100px; width: 100px;" />
                            American Red Cross</h3>
                        </a>
					</div>
                    
					<div class="result clothes" data-name="SalvationArmy" data-popularity="1">
						<a href="charity.php?charity=SalvationArmy">
                            <h3 class = "charityHead"><img src="images/SalvationArmy.png" style="height: 100px; width: 100px;" />
                            Salvation Army</h3>
                        </a>
					</div>
                    
                    <div class="result community" data-name="UnitedWay" data-popularity="2">
						<a href="charity.php?charity=UnitedWay">
                            <h3 class = "charityHead"><img src="images/UnitedWay.png" style="height: 100px; width: 100px;" />
                            United Way</h3>
                        </a>
                    </div>
                    
                    <div class="result food" data-name="FeedingAmerica" data-popularity="4">
						<a href="charity.php?charity=FeedingAmerica">
                            <h3 class = "charityHead"><img src="images/2FeedingAmerica.png" style="height: 100px; width: 100px;" />
                            Feeding America</h3>
                        </a>
                    </div>
                    
                    <div class="result community" data-name="TaskForceforGlobalHealth" data-popularity="4">
						<a href="charity.php?charity=TaskForceforGlobalHealth">
                        <h3 class = "charityHead"><img src="images/2TaskForceforGlobalHealth.png" style="height: 100px; width: 100px;" />
                        Task Force for Global Health</h3></a>
                    </div>

                    <div class="result food" data-name="FoodforthePoor" data-popularity="4">
						<a href="charity.php?charity=FoodforthePoor">
                            <h3 class = "charityHead"><img src="images/2FoodforthePoor.png" style="height: 100px; width: 100px;" />
                            Food for the Poor</h3>
                        </a>
                    </div>
                    
                    <div class="result community" data-name="GoodwillIndustriesInternational" data-popularity="4">
						<a href="charity.php?charity=GoodwillIndustriesInternational">
                            <h3 class = "charityHead"><img src="images/2GoodwillIndustriesInternational.png" style="height: 100px; width: 100px;" />
                            Goodwill Industries International</h3>
                        </a>
                    </div>
                    
                    <div class="result community children" data-name="YMCAoftheUSA" data-popularity="4">
						<a href="charity.php?charity=YMCAoftheUSA">
                            <h3 class = "charityHead"><img src="images/2YMCAoftheUSA.png" style="height: 100px; width: 100px;" />
                            YMCA of the USA</h3>
                        </a>
                    </div>
                    
                    <div class="result community" data-name="WorldVision" data-popularity="4">
						<a href="charity.php?charity=WorldVision">
                            <h3 class = "charityHead"><img src="images/2WorldVision.png" style="height: 100px; width: 100px;" />
                            World Vision</h3>
                        </a>
                    </div>
                    
                    <div class="result community children" data-name="BoysandGirlsClubofAmerica" data-popularity="4">
						<a href="charity.php?charity=BoysandGirlsClubofAmerica">
                            <h3 class = "charityHead"><img src="images/2BoysandGirlsClubofAmerica.png" style="height: 100px; width: 100px;" />
                            Boys and Girls Club of America</h3>
                        </a>
                    </div>
                    
                    <div class="result community" data-name="CompassionInternational" data-popularity="4">
						<a href="charity.php?charity=CompassionInternational">
                            <h3 class = "charityHead"><img src="images/2CompassionInternational.png" style="height: 100px; width: 100px;" />
                            Compassion International</h3>
                        </a>
                    </div>
                    
                    <div class="result community" data-name="AmeriCaresFoundation" data-popularity="4">
						<a href="charity.php?charity=AmeriCaresFoundation">
                            <h3 class = "charityHead"><img src="images/2AmeriCaresFoundation.png" style="height: 100px; width: 100px;" />
                            AmeriCares Foundation</h3>
                        </a>
                    </div>
                    
                    <div class="result children" data-name="HabitatforHumanityInternational" data-popularity="4">
						<a href="charity.php?charity=HabitatforHumanityInternational">
                            <h3 class = "charityHead"><img src="images/2HabitatforHumanityInternational.png" style="height: 100px; width: 100px;" />
                            Habitat for Humanity International</h3>
                        </a>
                    </div>
                    
                    <div class="result community children" data-name="UNICEF" data-popularity="4">
						<a href="charity.php?charity=UNICEF">
                            <h3 class = "charityHead"><img src="images/2UNICEF.png" style="height: 100px; width: 100px;" />
                            UNICEF</h3>
                        </a>
                    </div>
                    
                    <div class="result blood" data-name="AmericanHeartAssociation" data-popularity="4">
						<a href="charity.php?charity=AmericanHeartAssociation">
                            <h3 class = "charityHead"><img src="images/2AmericanHeartAssociation.png" style="height: 100px; width: 100px;" />
                            American Heart Association</h3>
                        </a>
                    </div>
                    
                    <div class="result community food clothing" data-name="DirectRelief" data-popularity="4">
						<a href="charity.php?charity=DirectRelief">
                            <h3 class = "charityHead"><img src="images/2DirectRelief.png" style="height: 100px; width: 100px;" />
                            Direct Relief</h3>
                        </a>
                    </div>
                    
                    <div class="result children food" data-name="FeedtheChildren" data-popularity="4">
						<a href="charity.php?charity=FeedtheChildren">
                            <h3 class = "charityHead"><img src="images/2FeedtheChildren.png" style="height: 100px; width: 100px;" />
                            Feed the Children</h3>
                        </a>
                    </div>
				</div> <!--/.resultList -->
			</div> <!--/.browseContent -->
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
                        itemSelector: '.result',
                        sizer: $sizer
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
                    
                    $('#children').unbind().click(function(){
                        $(".filterOn").removeClass("filterOn");
                        $(this).addClass("filterOn");
                        $('#resultSearch').val("");
                        $('.resultList').shuffle('shuffle', function($el, shuffle){
                            return $el.hasClass('children');                      
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