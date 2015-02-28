var headerJS = {
    //Set up any event handlers that are needed for the header.
    init: function(){
        $("#logout").click(function(){
            headerJS.signOut(); 
        });
    },
    
    //Function that when called will make an ajax call to log the user out.
    //On successful logout, the page that the user is currently on will be refreshed.
    signOut: function(){
        $.ajax({
            type: "GET",
            url: "functions.php",
            data: {
                action: "signOut"
            },
            success: function(returnedData){
                alert(returnedData);
                location.reload();
            },
            error: function(returnedData){
                alert("There was an error with your request, please try again.");
            }
        });
    }
}

$(function(){
    //On ready, call function to create any event handlers we need.
    headerJS.init();
})