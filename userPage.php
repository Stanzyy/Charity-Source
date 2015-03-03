<?php
    session_start();
    $link = mysqli_connect("127.0.0.1","root","","gsarastestdb")or die("Error" . mysqli_error($link));
    $query = "SELECT * FROM `donations` WHERE `loginNum` = '".$_SESSION["userNumber"]."'";

    $result = mysqli_query($link, $query);
    if($result->num_rows === 0)
    {
        $hasDonated = false;

    }else{
        $hasDonated = true;
    }
    session_write_close();
?>

<!DOCTYPE html>
<html lang="en">
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
            <div class='userStatsAll'>
            <?php
                if(!$hasDonated){
                    echo "<h3>Make a donation to see how you compare to other users.
                          <a href='browse.php'>View Charities</a></p>";
                }else{
                    echo "<div class='userStatsSingle'>
                            <h4>How Much You Have Donated</h4>
                          </div>
                          <div class='userStatsSingle'>
                            <h4>How Much You Have Donated Compared to Others</h4>
                          </div>
                          <div class='userStatsSingle'>
                            <h4>Charities You Have Donated To</h4>
                          </div>";
                };
            ?>
            </div>
            <div class='charityStatsAll'>
            <?php
                if(!$hasDonated){
                    echo "<h3>As you donate more, we will be able to suggest charities to donate to.
                          <a href='browse.php'>View Charities</a></p>";
                }else{
                    echo "<h3 id='h3charity'>Charities Similar to Those You Have Donated To</h3>
                          <a href='#' class='charityStatsSingle'>
                            <h4><span>About Charity X -</span> Chart of Percentages</h4>
                            <p>first charity</p>
                          </a>
                          <a href='#'' class='charityStatsSingle'>
                            <h4><span>About Charity X -</span> Comparison</h4>
                            <p>second charity</p>
                          </a>
                          <a href='#' class='charityStatsSingle'>
                            <h4><span>About Charity X -</span> Goals</h4>
                            <p> third charity </p>
                          </a>";
                };
            ?>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>
