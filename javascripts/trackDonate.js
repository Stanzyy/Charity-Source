var trackDonate = {
    init: function(){
        //Handler for clicking paypal button.
        $("#paypalButton").click(function(){
            trackDonate.track(); //call track function below
        });
    },
    
    track: function(){
        //ajax call to update database with new donation
        $.ajax({ 
            type: "GET",
            url: "functions.php",
            data: {
                action: "trackDonation",
                charity: document.title.toString()
            },
            success: function(returnedData){
                
            },
            error: function(returnedData){
                alert("There was an error with your request, please try again.");
            }
        });
    }
        
        
}


$(function(){
    //On ready, call function to create any event handlers we need.
    trackDonate.init();
});