
<html>
<head>
		<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

<title>Login Form® </title>



</head>
<body>
<?php
    include('../nav.php');
    include('../search.php');
    ?>
<b>MetaShop Team: ®</b>
<h6>Welcome!</h6><br></br>
</br>
</br>


<div <div align="center">

<h3>LOGIN FORM®</h3>
</br>
</br>
</br>
</br>
</br>
    <form id="login-form" method="post" action="loginscript.php" >
        <table>
            <tr>
                <td><label for="user_id"><b><em>User Name:</em></b></label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass"><b><em>Password:</em></b></label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
            <tr>
                <td><input style="margin-left:00px;" type="submit" value="Login" /></td>
                <td><input style="margin-left:140px;" type="reset" value="Reset"/></td>
            </tr>
			<tr>
			<td><input style="margin-left:90px;" type="checkbox" name="rememberusername" id="rememberusername" value="1" /></td>
			<td><label style="margin-left:20px;" for="rememberusername"><em>Remember Me</em></label> </td>
			</tr>
        </table>
    </form>
</div>
<br>
<br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<!-- Footer-->
        <footer class="py-5 bg-dark">
		<div class="container px-4 px-lg-8">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-8">
		<ul style="margin-left: 1200px;"><a href="#" class="top" ><i class="fa fa-angle-up" style="font-size:36px"></i></a></ul>
		
			<li class="nav-item"><a class="nav-link" href="http://localhost/MetaShop/AboutUs/AboutUs.html"><em>About Us</em></a></li> 
			<li class="nav-item"><a class="nav-link" href="http://localhost/MetaShop/Terms/terms"><em>Terms of Use / Privacy Policy</em></a></li>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; MetaShop Website 2022</p></div>
        <ul style="margin-left: 540px;">  
            <a style="  padding: 8px;
            font-size: 18px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            background: #3B5998;
			color: white"href="https://www.facebook.com"  target="_blank" class="fa fa-facebook"></a> 
            <a style="  padding: 8px;
            font-size: 18px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            background: #55ACEE;
			color: white" href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
           <a style="  padding: 8px;
           font-size: 18px;
           width: 40px;
           text-align: center;
           text-decoration: none;
			background: #d61fcd;
			color: white"  href="https://www.instagram.com" target="_blank" class="fa fa-instagram"></a>
        </ul>  
			<li class="nav-item"><a class="nav-link" href="http://localhost/Metashop/Shipping/shipping.html"><em>Shipping / Transaction</em></a></li>
			<li class="nav-item"><a class="nav-link" href="http://localhost/Metashop/Warranty/warranty.html"><em>Warranty</em></a></li>
		</div>
		</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>