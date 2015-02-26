<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Charity Source Landing Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/nick.css">
    </head>
    <body>
        <div class ="wrapper">
            <div class ="headerImage">
                <!-- Insert some nice charity image like a big version on the logo -->
                <img src="images/fakeLogo.png" alt="Charity Source Logo" id ="landingLogo">
            </div>
            <div class="who"> <!-- paragraph about who we are -->
                <p> This is a paragraph about who we are </p>
            </div>
            <div class ="why"> <!-- paragraph about why you should use our site -->
                <p> this is a paragraph about why you should donate using our site </p>
            </div>
            <div class ="checkUsOut"> <!-- button that brings user to home page -->
                <form><input type="button" value="Check us out" id="goToHomeButton" onClick="window.location.href='home.html'"></form>
            </div>
        </div>
    </body>
</html>
