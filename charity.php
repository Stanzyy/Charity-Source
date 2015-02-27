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
                <h2 class='charityh2'>Charity Name</h2>
                <img style='float:left; height: 90px; width: 200px; margin-top: 5px;' 
                     src="images/catsleeping.jpg" alt="Charity's Logo"/>
                <div class="aboutCharity">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore 
                        magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                    <!--    <a href="#">Donate Now!</a>  -->
                    <button>Donate Now!</button>
                </div>

                <div class="AboutCharityStatsAll">

                    <a href="#" class="aboutStatsSingle">
                        <h3><span>About Charity X -</span> Chart of Percentages</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    </a> 

                    <a href="#" class="aboutStatsSingle">
                        <h3><span>About Charity X -</span> Comparison</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    </a>

                    <a href="#" class="aboutStatsSingle">
                        <h3><span>About Charity X -</span> Goals</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    </a>                   

                </div>
                <button class="summaryButton">View Full Summary</button>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>
