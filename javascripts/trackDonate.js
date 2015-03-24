var trackDonate = {
    init: function(){
        //Handler for clicking paypal button.
        $("#paypalButton").click(function(){
            trackDonate.track();
        });
    },
    
    track: function(){
        alert("button was clicked");
        $.ajax({
            type: "GET",
            url: "functions.php",
            data: {
                action: "trackDonation"
            },
            success: function(returnedData){
                alert(returnedData);
                //window.location.replace("http://localhost/charity-source");
            },
            error: function(returnedData){
                alert("There was an error with your request, please try again.");
            }
        });
    }
        
        
}

$(function(){
    trackDonate.init();
});