<?php
//We always need to start the session so that we can access any existing Session Data. We might land here as already loggedin
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MetaShop &copy;</title>
        <!-- Favicon-->
        <link rel="icon" href="http://localhost/MetaShop/Images/tablg.png" type="image/icon type">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>		
    <?php
    include('nav.php');
    include('search.php');
    ?>		
        <!-- Header-->
        <header>
		<link type="image" href="./products2.jpg" />
		<img src = "http://localhost/MetaShop/Images/products2.jpg" width="100%" height="550" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
				
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
		 <!img src = "http://localhost/MetaShop/Images/recent.JPG" width="600" height="95">
            <div class="container px-4 px-lg-5 mt-5">
			<div>
				 <h1 style="color:blue;margin-left:00px;" > <em>Popular Items</em> </h1>
			</div>
			</br>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="http://localhost/MetaShop/AMD/ryzen"> <img class="card-img-top" src="http://localhost/MetaShop/Images/ryzen.jpg" alt="..." /> </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">AMD Ryzen™ 7 5800X3D</h5>
                                    <!-- Product price-->
                                    €579.90
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div></br>
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="http://localhost/MetaShop/AMD/ryzen">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="http://localhost/MetaShop/Intel/Arc.html"><img class="card-img-top" src="http://localhost/MetaShop/Images/intel.jfif" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Intel™ Arc GPU Q1 2022</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">€300.00</span>
                                    €280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div></br>
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="http://localhost/MetaShop/Intel/Arc.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="http://localhost/MetaShop/Radeon/radeon.html"> <img class="card-img-top" src="http://localhost/MetaShop/Images/radeon.jpg" alt="..." /> </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">AMD Radeon™ RX 6500 XT Graphics Card</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">€450.00</span>
                                    €425.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div></br>
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="http://localhost/MetaShop/Radeon/radeon.html ">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <br>
				   <div>
				   <h1 style="color:blue;margin-left:00px;"><em>Trending Items</em></h1>
				   </div>
				   </br>
				   <div>
				   <h1></h1>
				   </div>
				   </br>
				   <div>
				   <h1></h1>
				   </div>
				   </br>
				   <div>
				   <h1></h1>
				   </div>
				   </br>
				   <div>
				   <h1></h1>
				   </div>
				   </br>
				   <div>
				   <h1></h1>
				   </div>
				   </br>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="http://localhost/Metashop/Razer/razer.html">   <img class="card-img-top" src="http://localhost/MetaShop/Images/razer.PNG" alt="..." /> </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">NZXT™ S340 – Designed by Razer</h5>
									<!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
										<div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    €99.90
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div></br>
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="http://localhost/MetaShop/Razer/razer.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="http://localhost/MetaShop/RTX/rtx.html">     <img class="card-img-top" src="http://localhost/MetaShop/Images/R.PNG" alt="..." /> </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nvidia GeForce RTX™ 3090 Ti</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">€2.000</span>
                                    €1.890
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div></br>
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="http://localhost/MetaShop/RTX/rtx.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="http://localhost/MetaShop/Asus/asus.html">    <img class="card-img-top" src="http://localhost/MetaShop/Images/asus1.PNG" alt="..." /> </a>



                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">ASUS™ ROG Maximus XIII Hero Z590</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    €370.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div></br>
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="http://localhost/MetaShop/Asus/asus.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		 
        <!-- Footer-->
        <footer class="py-5 bg-dark">
		<div class="container px-4 px-lg-8">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-8">
		
		<button style="color:white;margin-left:1100px;" class="open-button" onclick="openForm()">Live Chat</button>

            <div class="chat-popup" id="myForm">
              <form action="/action_page.php" class="form-container">
                <h1>Live Chat</h1>
                <label for="msg"><b>Contact Us</b></label>
                <textarea placeholder="Type message.." name="msg" required></textarea>
                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
				<li class="nav-item"><a class="nav-link" href="http://localhost/MetaShop/Send/send-receive.html"><em>P2P Chat power by MetaShop&copy;</em></a></li>
              </form>
            </div>
            <script>
                function openForm() {
                  document.getElementById("myForm").style.display = "block";
                }
                
                function closeForm() {
                  document.getElementById("myForm").style.display = "none";
                }
                
                </script>
              
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
			<li class="nav-item"><a class="nav-link" href="http://localhost/MetaShop/Shipping/shipping.html"><em>Shipping / Transaction</em></a></li>
			<li class="nav-item"><a class="nav-link" href="http://localhost/MetaShop/Warranty/warranty.html"><em>Warranty</em></a></li>
		</div>
		</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>