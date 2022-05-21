<?php
//We always need to start the session so that we can access any existing Session Data. We might land here as already loggedin
session_start();
include('nav.php');
include('search.php');
    
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
        <link rel="icon" href="<?php echo getBaseUrl();?>/Images/tablg.png" type="image/icon type">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>			
        <!-- Header-->
        <header>
		<link type="image" href="./products2.jpg" />
		<img src = "<?php echo getBaseUrl();?>/Images/products2.jpg" width="100%" height="550" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
				
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
		 <!img src = "<?php echo getBaseUrl();?>/Images/recent.JPG" width="600" height="95">
            <div class="container px-4 px-lg-5 mt-5">
			<div>
				 <h1 style="color:blue;margin-left:00px;" > <em>Popular Items</em> </h1>
			</div>
			</br>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?php echo getBaseUrl();?>/AMD/ryzen"> <img class="card-img-top" src="<?php echo getBaseUrl();?>/Images/ryzen.jpg" alt="..." /> </a>
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
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo getBaseUrl();?>/AMD/ryzen">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="<?php echo getBaseUrl();?>/Intel/Arc.html"><img class="card-img-top" src="<?php echo getBaseUrl();?>/Images/intel.jfif" alt="..." /></a>
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
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo getBaseUrl();?>/Intel/Arc.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="<?php echo getBaseUrl();?>/Radeon/radeon.html"> <img class="card-img-top" src="<?php echo getBaseUrl();?>/Images/radeon.jpg" alt="..." /> </a>
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
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo getBaseUrl();?>/Radeon/radeon.html ">View options</a></div>
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
                            <a href="<?php echo getBaseUrl();?>/Razer/razer.html">   <img class="card-img-top" src="<?php echo getBaseUrl();?>/Images/razer.PNG" alt="..." /> </a>
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
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo getBaseUrl();?>/Razer/razer.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="<?php echo getBaseUrl();?>/RTX/rtx.html">     <img class="card-img-top" src="<?php echo getBaseUrl();?>/Images/R.PNG" alt="..." /> </a>
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
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo getBaseUrl();?>/RTX/rtx.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?php echo getBaseUrl();?>/Asus/asus.html">    <img class="card-img-top" src="<?php echo getBaseUrl();?>/Images/asus1.PNG" alt="..." /> </a>



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
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo getBaseUrl();?>/Asus/asus.html">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		 
        <?php
        include('footer.php');
        ?>