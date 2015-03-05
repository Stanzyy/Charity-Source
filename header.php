<header>
    <div class="headerImage">
        <a href="index.php"><img src="images/logo.png" style="height: 100px; width: 300px;" /></a>
    </div><!--Comment to remove white space allowing for use of 100% of the width
 --><div class="rightSide">    
        <div class="headerLogin">
            <?php
                session_start();
                if(!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]){
                    $_SESSION["loggedIn"] = false;
                    $_SESSION["userName"] = null;
                    echo "<a href='signup.php'>Log In</a> | <a href='signup.php'>Sign Up</a>";
                }else{
                    echo "<a href='userPage.php?username=".$_SESSION['userName']."'><span id='uname'>Hi ".$_SESSION['firstName'] . "</span></a> | <p id='logout'>Log Out</p>";
                }   
                session_write_close();             
            ?>
        </div>
        <nav class="headerNav">
            <ul>
                <li><a href="browse.php">Browse</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!--<li><input class="inputBox" type="search" placeholder="Search..." /></li>-->
            </ul>
        </nav>
    </div>
</header>