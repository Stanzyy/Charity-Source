var signinJS = {
    //Set up any event handlers that are needed for the signin/signu page.
    init: function(){
        $("#signinForm").submit(function(e){
            e.preventDefault();
            e.stopPropagation();

            signinJS.signin();
        });
        
        //Handler for clicking signup.
        $("#signupForm").submit(function(e){
            e.preventDefault();
            e.stopPropagation();

            signinJS.signup();
        });
    },
                
    //Signin Function
    signin: function(){
        //Make sure the error notification is NOT showing.
        $("#signinErrorContainer").css("visibility", "hidden");
        
        //Get the users information
        var userName = $("#userName").val();
        var pword = $("#existingPassword").val();
        
        //If all is well with the inputs, we make an ajax request to log the user in.
        //On success we reload the page. May be changed to bring to profile or back 
        //home.
        $.ajax({
            type: "GET",
            url: "functions.php",
            data: {
                action: "signUserIn",
                userName: userName,
                pword: pword
            },
            success: function(returnedData){
                //alert(returnedData);
                window.location.replace("http://localhost/charity-source");
            },
            error: function(returnedData){
                alert("There was an error with your request, please try again.");
            }
        });
    },
                    
    //Signup function
    signup: function(){
        //Make sure the error notification is NOT showing.
        $("#signupErrorConatiner").css("visibility", "hidden");
        
        //Get the users information
        var userName = $("#newUser").val();
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var pword = $("#newPassword").val();
        var pwordCheck = $("#newPasswordCheck").val();

        //Validate, check that fields are not blank, that they did (hopefully)
        //enter a real email address, and that their password and password check match. 
        //If any of these fail, we focus on the earliest input box where we found an
        //error and display the error message. Then terminate the rest of the function,
        //no reason to go on.
                        
        if(pword !== pwordCheck){
            $("#newPassword").focus();
            $("#signupError").empty().append("Passwords do not match up.");
            $("#signupErrorConatiner").css("visibility", "visible");
            return;
        }
               
        //If all is well with the inputs, we make an ajax request to sign the user up.
        //On success, we bring up a modal popup which asks the user if they would like
        //to go to their profile or continue browsing the site.
        $.ajax({
            type: "GET",
            url: "functions.php",
            data: {
                action: "signUserUp",
                userName: userName,
                firstName: firstName,
                lastName: lastName,
                pword: pword,
                pwordCheck: pwordCheck
            },
            success: function(returnedData){
                //alert(returnedData);
                //Trigger the pop up by simulating a link click.
                $("#popup")[0].click();
            },
            error: function(returnedData){
                alert("There was an error with your request, please try again.");
            }
        });             
    }
}

//On ready, call function to create any event handlers we need.
$(function(){
    signinJS.init();
});
            