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
<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5"> 
                <a href="http://localhost/Metashop/home.php"><img src="http://localhost/Metashop/Images/metashoplogo.png"  style="margin-left: 0%"  width="110%" height="60"  title="source: imgur.com" alt="{{$lang.project_name}}" id="logo-changer" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    </br>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/MetaShop/Register/register">Register</a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/MetaShop/Register/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/MetaShop/Home">Home</a></li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/motherboards">Motherboards</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/RAM">RAM</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/cases.html">Cases</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/CPU.html">CPU</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/gpu.html">GPU</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/power supply.html">PSU</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/ssd.html">Storage</a></li>
                                <li><a class="dropdown-item" href="http://localhost/MetaShop/cooler.html">Coolers</a></li>
                            </ul>
                        </li>
                    </ul>
					</div>
			<!-- Search-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<form class="example" action="search.php" method="get" style="margin:left;" >
			<input type="search" placeholder="Search..." name="search" id="search">
			<button type="submit" name="submit" id="submit" value="read"><i class="fa fa-search"></i></button>
			</form>
			</div>
			<!-- Profile-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
			<img src="http://localhost/MetaShop/Images/avatar.jpg" style="margin-left:65%"  width="3%" height="3%">
            <form class="d-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true"><em>Profile</em></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li> <i class="bi-cart-fill me-1"style="margin-left:5%"><a class="dropdown-item" href="http://localhost/MetaShop/">Cart</a></li></i> 
                        <li><a class="dropdown-item" href="http://localhost/MetaShop/account_settings">Account Settings</a></li>                              
                    </ul>
                </li>
            </form>
			</ul>
        </nav>



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
