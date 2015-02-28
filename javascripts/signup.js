var signinJS = {
    //Set up any event handlers that are needed for the signin/signu page.
    init: function(){
        //Handler for clicking signin.
        $("#signInButton").click(function(){
            signinJS.signin();
        });
        
        //Handler for clicking signup.
        $("#signUpButton").click(function(){
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
        
        //Validate, check that fields are not blank and that they did (hopefully)
        //enter a real email address. If either of these fail, we focus on the earliest
        //input box where we found an error and display the error message. Then terminate
        //the rest of the function, no reason to go on.
        if(userName === "" || userName.indexOf('@') == -1){
            $("#userName").focus();    
            $("#signInError").empty().append("Please Enter Your Email");
            $("#signinErrorContainer").css("visibility", "visible");
            return;
        }
        
        if(pword === ""){
            $("#existingPassword").focus();
            $("#signInError").empty().append("Please Enter Your Password");
            $("#signinErrorContainer").css("visibility", "visible");
            return;
        }
        
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
                alert(returnedData);
                location.reload();
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
        if(firstName === ""){
            $("#firstName").focus();
            $("#signupError").empty().append("Please Enter Your First Name.");
            $("#signupErrorConatiner").css("visibility", "visible");
            return;
        }
                        
        if(lastName === ""){
            $("#lastName").focus();
            $("#signupError").empty().append("Please Enter Your Last Name.");
            $("#signupErrorConatiner").css("visibility", "visible");
            return;
        }
                        
        if(userName === "" || userName.indexOf('@') == -1){
            $("#newUser").focus();
            $("#signupError").empty().append("Please Enter a valid Email.");
            $("#signupErrorConatiner").css("visibility", "visible");
            return;
        }
                        
        if(pword === ""){
            $("#newPassword").focus();
            $("#signupError").empty().append("Please Enter a Password.");
            $("#signupErrorConatiner").css("visibility", "visible");
            return;
        }
                        
        if(pwordCheck === ""){
            $("#newPasswordCheck").focus();
            $("#signupError").empty().append("Please re-enter your Password.");
            $("#signupErrorConatiner").css("visibility", "visible");
            return;
        }
                        
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
                alert(returnedData);
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
            