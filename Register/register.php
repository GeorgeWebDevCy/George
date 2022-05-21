<html>
<head>
		<meta charset="utf-8" />
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="style.css">
		<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


<title>Register Form®</title>

</head>
<body>
<?php
    include('../nav.php');
    include('../search.php');
    ?>


<b>MetaShop Team: ®</b>

<h6>Ιt would be our pleasure to become our member!</h6><br></br>
</br>
</br>
<div <div align="center">

<h3>REGISTER FORM®</h3><br></br>
    <form id="register-form" method="post" action="registerscript.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id"><b><em>User Name:</em></b></label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
			<br>
			</br>
            <tr>
                <td><label for="user_pass"><b><em>Password:</em></b></label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
			</br>
			<tr>
                <td><label for="user_pass"><b><em>Country:</em></b></label></td>
                <td><input type="country" name="user_country" id="user_country"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>Email:</em></b></label></td>
                <td><input type="email" name="user_email" id="user_email"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>Telephone:</em></b></label></td>
                <td><input type="telephone" name="user_telephone" id="user_telephone"></input></td>
            </tr>
            <tr>
				
                <td><input type="submit" value="Register" />
                <td><input type="reset" value="Reset"/>
				
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
