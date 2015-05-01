<?php session_start();?>
<!Doctype html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <title>Browse | Charity Source</title>
        
        <!--Favicon links-->     
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        
        <!-- pulls in all our CSS -->
        <?php require_once("css.php");?>

    </head>
    <body> 
        <div class="wrapper">

            <!-- brings in the header thats on all our pagess -->
            <?php require_once('header.php');?>

            <div class="carouselWidth">

                <!-- Bootstrap carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        
                        <!--Carousel Item-->
                        <div class="item active">
                            <a href="charity.php?charity=AmericanRedCross"><img src= "images/AmericanRedCross.png" ></a>
                        </div>

                        <!--Carousel Item-->
                        <div class="item">
                            <a href="charity.php?charity=AmericanCancerSociety"><img src= "images/AmericanCancerSociety.png" ></a>
                        </div>

                        <!--Carousel Item-->
                        <div class="item">
                            <a href="charity.php?charity=SalvationArmy"><img src= "images/SalvationArmy.png"></a>
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

        <!--Content Container-->
        <div class="browseContent container">
            <div class="filters">

                <!-- Textbox to search for charities. -->
                <div class="search row"> 
                    <input placeholder="Search Charities..." type="text" id='resultSearch' class= 'col-sm-4 form-control'>
                    
                    <!--Set values for the dopdown, to sort by either Name or Most Popular. -->
                    <p class="sortText">
                        <select class="sort-options form-control">
                            <option value="title">By Name</option>
                            <option value="popularity">By Popularity</option>
                        </select>
                    </p>
                </div>

                <!--Buttons for avaliable filters-->
                <h3 class="inline">Show results for </h3>
                <button class="filterOn filterButton btn inline" id="all">All</button>
                <button class="filterButton btn inline" id="blood">Blood</button>
                <button class="filterButton btn inline" id="cancer">Cancer</button>
                <button class="filterButton btn inline" id="children">Children</button>
                <button class="filterButton btn inline" id="clothes">Clothing</button>
                <button class="filterButton btn inline" id="community">Community</button>
                <button class="filterButton btn inline" id="food">Food</button>             
            </div>

            <!--List of Charities that will be pulled into the shuffle.js grid system-->

            <div class="resultList" >
                <div class="result cancer" data-name="CancerSociety" data-popularity="3">
                    <a href="charity.php?charity=AmericanCancerSociety">
                        <h3 class = "charityHead"><img src="images/AmericanCancerSociety.png" style="height: 100px; width: 100px;" />American Cancer Society</h3>
                    </a>                    
                </div>

                <div class="result blood" data-name="AmericanRedCross" data-popularity="5">
                    <a href="charity.php?charity=AmericanRedCross">
                        <h3 class = "charityHead"><img src="images/AmericanRedCross.png" style="height: 100px; width: 100px;" />American Red Cross</h3>
                    </a>
                </div>

                <div class="result clothes" data-name="SalvationArmy" data-popularity="1">
                    <a href="charity.php?charity=SalvationArmy">
                        <h3 class = "charityHead"><img src="images/2SalvationArmy.png" style="height: 100px; width: 100px;" />Salvation Army</h3>
                    </a>
                </div>  

                <div class="result community" data-name="UnitedWay" data-popularity="2">
                    <a href="charity.php?charity=UnitedWay">
                        <h3 class = "charityHead"><img src="images/2UnitedWay.png" style="height: 100px; width: 100px;" />United Way</h3>
                    </a>
                </div>

                <div class="result food" data-name="FeedingAmerica" data-popularity="4">
                    <a href="charity.php?charity=FeedingAmerica">
                        <h3 class = "charityHead"><img src="images/2FeedingAmerica.png" style="height: 100px; width: 100px;" />Feeding America</h3>
                    </a>
                </div>

                <div class="result community" data-name="TaskForceforGlobalHealth" data-popularity="4">
                    <a href="charity.php?charity=TaskForceforGlobalHealth">
                        <h3 class = "charityHead"><img src="images/2TaskForceforGlobalHealth.png" style="height: 100px; width: 100px;" />Task Force for Global Health</h3>
                    </a>
                </div>

                <div class="result food" data-name="FoodforthePoor" data-popularity="4">
                    <a href="charity.php?charity=FoodforthePoor">
                        <h3 class = "charityHead"><img src="images/2FoodforthePoor.png" style="height: 100px; width: 100px;" />Food for the Poor</h3>
                    </a>
                </div>

                <div class="result community" data-name="GoodwillIndustriesInternational" data-popularity="4">
                    <a href="charity.php?charity=GoodwillIndustriesInternational">
                        <h3 class = "charityHead"><img src="images/2GoodwillIndustriesInternational.png" style="height: 100px; width: 100px;" />Goodwill Industries International</h3>
                    </a>
                </div>

                <div class="result community children" data-name="YMCAoftheUSA" data-popularity="4">
                    <a href="charity.php?charity=YMCAoftheUSA">
                        <h3 class = "charityHead"><img src="images/2YMCAoftheUSA.png" style="height: 100px; width: 100px;" />YMCA of the USA</h3>
                    </a>
                </div>

                <div class="result community" data-name="WorldVision" data-popularity="4">
                    <a href="charity.php?charity=WorldVision">
                        <h3 class = "charityHead"><img src="images/2WorldVision.png" style="height: 100px; width: 100px;" />World Vision</h3>
                    </a>
                </div>

                <div class="result community children" data-name="BoysandGirlsClubofAmerica" data-popularity="4">
                    <a href="charity.php?charity=BoysandGirlsClubofAmerica">
                        <h3 class = "charityHead"><img src="images/2BoysandGirlsClubofAmerica.png" style="height: 100px; width: 100px;" />Boys and Girls Club of America</h3>
                    </a>
                </div>

                <div class="result community" data-name="CompassionInternational" data-popularity="4">
                    <a href="charity.php?charity=CompassionInternational">
                        <h3 class = "charityHead"><img src="images/2CompassionInternational.png" style="height: 100px; width: 100px;" />Compassion International</h3>
                    </a>
                </div>

                <div class="result community" data-name="AmeriCaresFoundation" data-popularity="4">
                    <a href="charity.php?charity=AmeriCaresFoundation">
                        <h3 class = "charityHead"><img src="images/2AmeriCaresFoundation.png" style="height: 100px; width: 100px;" />AmeriCares Foundation</h3>
                    </a>
                </div>

                <div class="result children" data-name="HabitatforHumanityInternational" data-popularity="4">
                    <a href="charity.php?charity=HabitatforHumanityInternational">
                        <h3 class = "charityHead"><img src="images/2HabitatforHumanityInternational.png" style="height: 100px; width: 100px;" />Habitat for Humanity International</h3>
                    </a>
                </div>

                <div class="result community children" data-name="UNICEF" data-popularity="4">
                    <a href="charity.php?charity=UNICEF">
                        <h3 class = "charityHead"><img src="images/2UNICEF.png" style="height: 100px; width: 100px;" />UNICEF</h3>
                    </a>
                </div>

                <div class="result blood" data-name="AmericanHeartAssociation" data-popularity="4">
                    <a href="charity.php?charity=AmericanHeartAssociation">
                        <h3 class = "charityHead"><img src="images/2AmericanHeartAssociation.png" style="height: 100px; width: 100px;" />American Heart Association</h3>
                    </a>
                </div>

                <div class="result community food clothing" data-name="DirectRelief" data-popularity="4">
                    <a href="charity.php?charity=DirectRelief">
                        <h3 class = "charityHead"><img src="images/2DirectRelief.png" style="height: 100px; width: 100px;" />Direct Relief</h3>
                    </a>
                </div>

                <div class="result children food" data-name="FeedtheChildren" data-popularity="4">
                    <a href="charity.php?charity=FeedtheChildren">
                        <h3 class = "charityHead"><img src="images/2FeedtheChildren.png" style="height: 100px; width: 100px;" />Feed the Children</h3>
                    </a>
                </div>                
            </div> <!--/.resultList -->
        </div> <!--/.browseContent -->
        
        <!-- pulls in our footer thats on every page -->
        <?php require_once('footer.php');?>
    
        <!--Grab the js libraries we need to run the shuffle grid-->

        <!--Link to modernizr, shuffle requires modernizr to run.
        http://modernizr.com/ -->
        <script src="javascripts/modernizr.js"></script>

        <!--Link to shuffle.js which powers our browse page.
        http://vestride.github.io/Shuffle/-->
        <script src="javascripts/jquery.shuffle.js"></script>
        
        <script src="javascripts/browse.js"></script>
    </body>
</html>
<?php session_write_close(); ?>