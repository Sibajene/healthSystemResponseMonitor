<?php

    error_reporting(0);
    include "conn.php";

  
    
    //fetch services
    $town = mysqli_query($con,"SELECT * FROM town ORDER BY t_id DESC");
    
     //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);



?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Towns - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
   

   
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(https://res.cloudinary.com/ecotuulecloud/image/upload/v1657474000/ecotuule/bg-16_iltryz.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Our Towns</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Town</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>
    <!-- serivice from here -->
         <section class="services-section style-two ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>All Towns</h2>
            </div>  
        </div>
    </section>
    
    
    
    <!-- boostrap -->
    <style>
.zoom {
    
 
}

.zoom:hover {
  transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
    
      <div class="container pb-5">
          <div class="row ">
              <?php
                        while($row=mysqli_fetch_array($town)){
                    ?>
              <div class="col-md-4 zoom pb-5">
                   
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><b><a href="single-town.php?t_id=<?php echo $row['t_id']; ?>"><?php echo $row['t_name']; ?></a></b></h5>
                            </div>
                            <div class="card-footer">
                               <div class="link"><a href="single-town.php?t_id=<?php echo $row['t_id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                    
              </div>
              <?php  } ?>
          </div>
      </div>
    
    <!-- boostrap ends -->


    <!-- services php -->

        <!--<section class="services-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel">

                    <?php
                        while($row=mysqli_fetch_array($town)){
                    ?>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="">
                                <img src="assets/images/resource/image-12.jpg" alt="">
                                <div class="content">
                                    <div>
                                       
                                        <h4><?php echo $row['t_name']; ?></h4>
                                    </div>            
                                </div>
                            </div>
                           
                            <div class="overlay" style="background-image: url(assets/images/resource/image-12-2.jpg);">
                                <div>
                                    <div class="content">
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                    </div>
                                    <div class="text"></div>
                                    <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
              
                  <?php  } ?>
                </div>
            </div>
            <div class="cta-section-two">
                <div class="wrapper-box">
                    <div class="icon"><img src="assets/images/resource/image-29.jpg" alt=""></div>
                    <div class="text">
                        <h4>Our Effective and Affordable Pricing Plans</h4>
                        <p>we assure you a super affordable price with word class services.</p>
                    </div>
                    <div class="link">
                        <a href="contact.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enquire Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>













