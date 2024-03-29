<?php

    error_reporting(0);
    include "conn.php";

    //fet id
    $d_id = $_GET['d_id'];

    //fetch blogs 
    $district = mysqli_query($con,"SELECT * FROM district WHERE d_id=$d_id");
    $fetch = mysqli_fetch_array($district);


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM district ORDER BY d_id DESC");
    
    
       //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

    
    $response = mysqli_query($con,"SELECT * FROM response");
    $response  = mysqli_fetch_array($response);

    
?>

<head>
<title>Single-district - <?php echo $setting['site_name']; ?></title>
</head>
<body>

<div class="page-wrapper">
    <!-- Preloader -->
   

    <!-- Main Header -->
<?php include "header.php"; ?>
    <!-- End Main Header -->

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
    <section class="page-title" style="background-image: url(https://res.cloudinary.com/ecotuulecloud/image/upload/v1657473999/ecotuule/bg-13_rbnos8.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                  
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="district.php">District</a></li>
                        <li><?php echo $fetch['d_name']; ?></li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-block-four blog-single-post">
                        <div class="inner-box">
                        <div class="lower-content">
                                <div class="top-content">
                                    <h3><?php echo $fetch['d_name'];  ?> District</h3>
                                    <hr>
                                    <div class="date"> <?php echo $response['date_time']; ?></div>
                                </div>  
                                <br>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-user"></i>By:<?php echo $response['citizen_name']; ?></a></li>
                                    <li><?php echo $response['citizen_phone']; ?></li>
                                    <li><?php echo $response['citizen_address']; ?></li>
                               </ul>        
                        
                                <div class="text">In <?php echo $fetch['d_name'];?> District Key Covid-19 resources from the HSRM include the Covid-19 
                                Health System Response monitor, which contains detailed, regularly updated information on policy responses for each town in the 
                                Ministry of Health of <?php echo $fetch['d_name'];?>; Covid-19 Cross-town Analysis,  which contains snapshots that address key policy questions through cross-country comparisons; an on-going series of Covid-19 webinars, a special Covid-19 edition of Eurohealth, 
                                as well as policy briefs and other research.</div> 
                                <blockquote>
                                    <div class="quote-icon"><span class="flaticon-right-quote"></span>
                                    </div>
                                    <div class="text">“ Much of the  <?php echo $fetch['d_name'];?>’s work involves understanding, measuring and using information on those various outcomes for health policy making.  ”.</div>
                                    <div class="title">By:<?php echo $response['citizen_name']; ?></div>
                                </blockquote>  
                            </div>
                        </div>
                    </div>
            

                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar style-two">
                      
                        <div class="widget widget_categories">
                            <h4 class="widget_title">All Districts</h4>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">

                                  <?php
                                    while($row=mysqli_fetch_array($recent)){
                                ?>
                                    <li><a href="single-district.php?d_id=<?php echo $row['d_id']; ?>"><?php echo $row['d_name']; ?> <i class="flaticon-right-arrow-6"></i> <span><?php echo $counti; ?></span></a></li>
                                 <?php  } ?>
                                </ul>
                            </div>
                        </div>
                   
                    </div>
                </aside>
            </div>
        </div>
    </section>



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