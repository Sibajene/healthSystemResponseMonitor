<?php
    include "conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">


 <!-- Main Header -->

    <header class="main-header header-style-one" style="background-color:#0D47A1;">
                  
        <!-- Header Top -->
        <div class="header-top" style="background:none;">
            <div class="auto-container">
                <h1 style="text-align:center; color:ivory; font-weight:700">Health System Response Monitor Zambia</h1>
              </div>
        <hr style="background: orange ;">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="https://res.cloudinary.com/ecotuulecloud/image/upload/v1657475961/ecotuule/favicon_exduqa.png" alt=""></a></div>
                        </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php">Home</a></li>

                                        <li class="dropdown"><a href="province.php">Provincies</a> 
                                            <ul>        
                                                <li class="dropdown"><a href="province.php">All Provincies</a> </li>       
                                                <li class="dropdown"><a href="district.php">All Districts</a></li>
                                                <li class="dropdown"><a href="town.php">All Towns</a></li>
                                            </ul>
                                        </li>
                                         
                                        <li class="dropdown"><a href="about.php">About</a>
                                            <ul>
                                                <li> <a href="about.php"> About HSRM</a></li>
                                                <li> <a href="contact.php">Contact Us</a></li>
                                            </ul>
                                    </li>
                                       
                                        <li class="dropdown"><a href="response.php">Responce</a></li>

                                    
                                         <div class="language">
                                    
                                    <form action="#" class="language-switcher">
                                       
                                    </form>
                                </div>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    
                    </div>                        
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="https://res.cloudinary.com/ecotuulecloud/image/upload/v1657475961/ecotuule/favicon-4_jfze7a.png" alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
    
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="sign-in"><a href="#"><i class="flaticon-delivery-man-1"></i>Call:  <?php  echo $setting['phone']; ?></a></div>
                                <div class="language">
                                    <form action="#" class="language-switcher">
                                       
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>
            
            <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="https://res.cloudinary.com/ecotuulecloud/image/upload/v1657475961/ecotuule/favicon-2_rchckn.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->
    <script src="assets/js/script.js"></script>
    <script src="https://use.fontawesome.com/e7727969df.js"></script>

