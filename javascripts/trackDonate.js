var trackDonate = {
    init: function(){
        //Handler for clicking paypal button.
        $("#paypalButton").click(function(){
            trackDonate.track(); //call track function below
        });
    },
    
    track: function(){
        //alert("button was clicked");
        $.ajax({ //ajax call to update database with new donation
            type: "GET",
            url: "functions.php",
            data: {
                action: "trackDonation"
            },
            success: function(returnedData){
                alert(returnedData);
            },
            error: function(returnedData){
                alert("There was an error with your request, please try again.");
            }
        });
    }
        
        
}

$(function(){ //initialize trackDonate variable
    trackDonate.init();
});