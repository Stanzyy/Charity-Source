<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome | Charity Source</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/nick.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"> 
        
        <style>
            #goToHomeButton{
                border: none;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class ="wrapper">
            <div class ="headerImage">
                <!-- Insert some nice charity image like a big version on the logo -->
                <img src="images/logo.png" alt="Charity Source Logo" id ="landingLogo">
            </div>
            <div class="who">
                <p> Charity Source is the ultimate destination for anyone looking to donate
                to a good cause. Charity Source is a quick and simple way to donate to your favorite
                charity or find a new one to donate. We lay out the truth of each charity to ensure
                confidence in our users donations.</p>
            </div>
            <div class ="why">
                <p> Charity Source is extremely user friendly and dedicated to ensuring our users
                have a great donating experience. Our team is dedicated to keeping our users informed
                on where there money is going. Charity Source is the best place to get the facts about
                charities and make the best donating decisions.</p>
            </div>
            <div class ="checkUsOut">
                <form><input type="button" value="Check us out" id="goToHomeButton" onClick="window.location.href='index.php'"></form>
            </div>
        </div>
    </body>
</html>
