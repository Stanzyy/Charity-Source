<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Testing</title>
    </head>
    <body>
        <button id="theButton">Click Me</button>
        <?php require_once('paragraph.php'); ?> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            var testJS = {
                init: function(){
                    $('#theButton').unbind().click(function(){
                        testJS.callAjax();
                    });
                },
                
                callAjax: function(){
                    $.ajax({
						type: "POST",
						url: "/testing/functions.php?action=func1",
						success: function(data){
							var text = "<p>" + data + "</p>";
                            $('body').append(text);
						},
						error: function(){
							alert("Failed");
						}
					});
                }
            }
            
            $(function(){
                testJS.init();
            });
        </script>
    </body>
</html>