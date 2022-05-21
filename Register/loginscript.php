<?php  
require('../includes/db.php');
include('../includes/functions.php');
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
    // Assigning POST values to variables.
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];

    var_dump($_POST);
}    
/*

$sql = "SELECT * FROM 'user_login` WHERE username='$username'";
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
            $sql .= " AND password = '" . md5($_POST["user_pass"]) . "'";
	}
        $result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			
			// Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["username"] = $user["username"];
                $_SESSION["level"] = $user["level"];

			if(!empty($_POST["remember"])) {
				setcookie ("user_login",$_SESSION["username"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["user_login"])) {
					setcookie ("user_login","");
				}
			}

            if ( $_SESSION["level"]==0) {
                //Header('Location:'.getBaseUrl().'/Home');
                } else{
                    //Header('Location:'.getBaseUrl().'/homeadmin.html');
                }  
                
                } else {
                //echo login_error_popup("Username or password seems to be incorrect!");
                }
                


*/
?>