<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" type="text/css" href="css/egetchellcss.css">
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class ="wrapper">
            <?php require_once('header.php');?>       
            <div class="userStatsAll">
                <div class="userStatsSingle">
                    <h4>How Much You Have Donated</h4>
                </div>

                <div class="userStatsSingle">
                    <h4>How Much You Have Donated Compared to Others</h4>
                </div>

                <div class="userStatsSingle">
                    <h4>Charities You Have Donated To</h4>
                </div>
            </div>

            <div class="charityStatsAll">
                <h3 id="h3charity">Charities Similar to Those You Have Donated To</h3>

                <a href="#" class="charityStatsSingle">
                    <h4><span>About Charity X -</span> Chart of Percentages</h4>
                    <p>first charity</p>
                </a> 

                <a href="#" class="charityStatsSingle">
                    <h4><span>About Charity X -</span> Comparison</h4>
                    <p>second charity</p>
                </a>

                <a href="#" class="charityStatsSingle">
                    <h4><span>About Charity X -</span> Goals</h4>
                    <p> third charity </p>
                </a>                   

            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>
