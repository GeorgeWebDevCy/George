<?php  
require('../includes/db.php');
include('../includes/functions.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$encrypted_password = md5($_POST['user_pass']); // the daabase should store the password encrypted using MD5 for simplicity 
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and password='$encrypted_password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row=mysqli_fetch_row($result); 
$count = mysqli_num_rows($result);

if ($count == 1){

session_start();
                            
// Store data in session variables
$_SESSION["loggedin"] = true;
$_SESSION["userid"] = $row[0]; // added this to read user id
$_SESSION["username"] = $row[1];
$_SESSION["level"] = $row[6];

if ($row[6]==0) {

Header('Location:'.getBaseUrl();.'/Home');
} else{
Header('Location:'.getBaseUrl();.'/homeadmin.html');
}  

} else {
echo login_error_popup("Username or password seems to be incorrect!");
}
}
?>