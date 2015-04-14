<header>
    <div class="headerImage">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
    </div>
    <!-- Comment to remove white space allowing for use of 100% of the width -->
    <div class="rightSide">    
        
    
        <!-- Fixed navbar -->
        
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">                
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png" style="height: 100px; max-width: 100%;" /></a>
                
       <!-- Changes size of logo dynamically, not working quite right yet -->         
      <!--          <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.png" style="max-width: 100%; height: auto;" /></a>
                
                -->
                
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">                     
                <li><a href="index.php">Browse</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><div class="headerLogin">
                    <?php
                        if(!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]){
                            $_SESSION["loggedIn"] = false;
                            $_SESSION["userName"] = null;
                            echo "<li> <a href='signup.php' style='color:white'>Log In</a></li>
                            <li><a href='signup.php' style='color:white'>Sign Up</a></li>";
                        }else{
                            echo "<li><a href='userPage.php?username=".$_SESSION['userName']."'><span id='uname' style='color:white'>Hi ".$_SESSION['firstName'] . "</span></a></li>  <li style='cursor:pointer;'><a id='logout' style='color:white'>Log Out</a></li>";
                        }            
                    ?>
                    </div></li>
                  
                  
                  
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    
            <!-- Old navbar -->
    <!--    <nav class="headerNav">
            <ul>
                <li><a href="browse.php">Browse</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!--<li><input class="inputBox" type="search" placeholder="Search..." /></li>
            </ul>
        </nav> 
-->
    </div>
</header>