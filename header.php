<header>
    <div class="headerImage">
        <a href="#"><img src="images/fakeLogo.png" style="height: 100px; width: 300px;" /></a>
    </div><!--Comment to remove white space allowing for use of 100% of the width
 --><div class="rightSide">    
        <div class="headerLogin">
            <?php
                if(!isset($_COOKIE['userName'])){
                    $username = null;
                    setcookie('userName', $username);
                    echo "<a href='#'>Log In</a> | <a href='#'>Sign Up</a>";
                }else{
                    echo "<a href='#'>Hi " . $_COOKIE['userName'] . "</a> | <p id='logout'>Log Out</p>";
                }                
            ?>
        </div>
        <nav class="headerNav">
            <ul>
                <li><a href="#">Browse</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><input class="inputBox" type="search" placeholder="Search..." /></li>
            </ul>
        </nav>
    </div>
</header>