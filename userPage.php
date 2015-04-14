<!-- Connect to the database -->
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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile | Charity Source</title>
        <!-- Links to style sheets -->
        <link rel="stylesheet" type="text/css" href="css/egetchellcss.css">
        <link rel="stylesheet" type="text/css" href="css/gsarascss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            #editLink, #saveLink, #cancelLink{
                cursor: pointer;
                text-decoration: underline;
            }

            .displayHolder, .editHolder, .display, .editHolder{
                display: inline-block;
            }
        </style>
        <!-- Links to favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class ="wrapper">
            <!-- Include the header to this page -->
            <?php require_once('header.php');?>
            <div class="profile">
                <!-- Displays user information -->
                <div class="viewProfileInfo">
                    <?php
                        echo "<div class='profileItemHolder'><p class='displayHolder'>User Name:</p><p class='display' id='userNameDisplay'>".$_SESSION["userName"]."</p></div>".
                             "<div class='profileItemHolder'><p class='displayHolder'>First Name:</p><p class='display' id='firstNameDisplay'>".$_SESSION["firstName"]."</p></div>".
                             "<div class='profileItemHolder'><p class='displayHolder'>Last Name:</p><p class='display' id='lastNameDisplay'>".$_SESSION["lastName"]."</p></div>";
                    ?>
                    <p id="editLink">Edit</p>
                </div>
                <!-- Add the ability to edit user profile -->
                <div hidden class="editProfileInfo">
                    <?php
                        echo "<div class='profileItemHolder'><p class='editHolder'>User Name:</p><input class='editDisplay form-control' data-uid=".$_SESSION["userNumber"]." id='userName' type='text' value='".$_SESSION["userName"]."' /></div>".
                             "<div class='profileItemHolder'><p class='editHolder'>First Name:</p><input class='editDisplay form-control' id='firstName' type='text' value='".$_SESSION["firstName"]."' /></div>".
                             "<div class='profileItemHolder'><p class='editHolder'>Last Name:</p><input class='editDisplay form-control' id='lastName' type='text' value='".$_SESSION["lastName"]."' /></div>".
                             "<div class='profileItemHolder'><p class='editHolder'>Password:</p><input class='editDisplay form-control' id='password' type='password' placeholder='New Password' /></div>".
                             "<div class='profileItemHolder'><p class='editHolder'>Confirm Password:</p><input class='editDisplay form-control' id='passwordCheck' type='password' placeholder='Confirm Password Change' /></div>";
                    ?>
                    <p id="saveLink">Save</p>
                    <p id="cancelLink">Cancel</p>
                </div>
            </div> <!-- End of profile div -->
            <!-- As the users donate, their donation statistics will be viewable -->
            <div class='userStatsAll'>
            <?php
                if(!$hasDonated){
                    echo "<h3>Make a donation to see how you compare to other users.
                          <a href='index.php'>View Charities</a></p>";
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
            </div> <!-- End userStatsAll div -->
            <div class='charityStatsAll'>
            <?php
                if(!$hasDonated){
                    echo "<h3>As you donate more, we will be able to suggest charities to donate to.
                          <a href='index.php'>View Charities</a></p>";
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
            </div> <!-- End charityStatsAll div -->
            <!-- Includes the footer for the page -->
            <?php require_once('footer.php');?>
        </div> <!-- end of wrapper div -->
        <!-- JavaScript for creating and setting the user's information -->
        <script type="text/javascript">
            var userPageJS = {
                init: function(){
                    $('#editLink').unbind().click(function(){
                        $('.editProfileInfo, .viewProfileInfo').toggle();
                    });

                    $('#saveLink').unbind().click(function(){
                        var userNumber    = $("#userName").data("uid");
                        var userName      = $("#userName").val();
                        var firstName     = $("#firstName").val();
                        var lastName      = $("#lastName").val();
                        var password      = $("#password").val();
                        var passwordCheck = $("#passwordCheck").val();

                        if(passwordCheck.length > 0){
                          //Do something to confirm password change.
                        }

                        $.ajax({
                            url: "functions.php",
                            type: "GET",
                            data: {
                                action: "editProfile",
                                userId: userNumber,
                                userName: userName,
                                firstName: firstName,
                                lastName: lastName,
                                password: password,
                                passwordCheck: passwordCheck
                            },
                            success: function(returnedData){
                              $("#uname").empty().append(firstName);
                              $("#userNameDisplay").empty().append(userName);
                              $("#firstNameDisplay").empty().append(firstName);
                              $("#lastNameDisplay").empty().append(lastName);
                              $('.editProfileInfo, .viewProfileInfo').toggle();
                            },
                            error: function(returnedData){
                              alert("There was an error with your request.");
                            }
                        });
                    });

                    $("#cancelLink").unbind().click(function(){
                      $('.editProfileInfo, .viewProfileInfo').toggle();
                    });
                }
            }

            $(function(){
                userPageJS.init();
            });
        </script>
    </body>
</html>
<?php session_write_close();?>
