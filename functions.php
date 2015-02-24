<?php    
    header('Access-Control-Allow-Origin: *');
	$function = $_GET['action'];
    $function();



    function signUserIn(){
        $userName = $_GET['userName'];
        $passWord = $_GET['pword'];
        echo "signed In"; 
    }

    function signUserUp(){
        $userName = $_GET['userName'];
        $password = $_GET['pword'];
        $passwordCheck = $_GET['pwordCheck'];
        echo "Signed Up";
    }

    function signOut(){
        $username = null;
        setcookie('userName', $username);
    }
?>