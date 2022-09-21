<?php

    error_reporting(0);
    include "conn.php";

    //fet id
    $response_id = $_GET['response_id'];

    //fetch blogs 
    $response = mysqli_query($con,"SELECT * FROM response WHERE response_id=$response_id");
    $fetch = mysqli_fetch_array($response);


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM response LIMIT 4");

      //fetch category

    
    
    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

    
?>

<head>
<title>Response-details - <?php echo $setting['site_name']; ?></title>
</head>

<body>

<div class="page-wrapper">
 
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
                <!-- Contact Widget -->
               <!--<div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                    </div>
                </div> -->
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
    <section class="page-title" style="background-image: url(https://res.cloudinary.com/ecotuulecloud/image/upload/v1657473999/ecotuule/bg-17_aco3r1.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div>-->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                  
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Response</a></li>
                        <li><?php echo $fetch['title']; ?></li>
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
                            <div class="image mb-5"><img src=" " alt=""></div>
                            <div class="lower-content">
                                <div class="top-content">
                                    <div class="date"><?php echo $fetch['date_time'];  ?></div>
                                    <h3><?php echo $fetch['citizen_name'];  ?></h3>
                                </div>  
                                 <div class="text mb-5">
                                    <p><?php echo $fetch['citizen_address'];  ?></p>
                                    
                                </div>
                        
                        
                            </div>
                        </div>
                    </div>

                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar style-two">
                        <div class="post-share-btn">
                                        <span class="hint">Share This Post <span class="flaticon-share"></span></span>
                                        <div class="social-links-wrapper">
                                            
                                            <div class="social-links">
                                                <span class="pr-2"><a  href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER['HTTP_HOST']; ?>/blog-details.php?id=<?= $fetch['id']; ?>"><span class="fab fa-facebook-f"></span></a></span>
                                                <span class="pr-2"><a href="http://twitter.com/share?text=<?= $fetch["title"]; ?>&url=<?php echo $_SERVER['HTTP_HOST']; ?>/blog-details.php?id=<?= $fetch['id']; ?>"><span class="fab fa-twitter"></span></a></span>
                                               <span> <a href="mailto:?subject=I wanted you to see this Article&amp;body=Check out this Property <?php echo $_SERVER['HTTP_HOST']; ?>/blog-details.php?id=<?= $fetch['id']; ?>"><span class="fab fa fa-envelope"></span></a></span>

                                            </div>
                                        </div>
                                    </div>
                        <div class="widget news-widget-two">
                            <h4 class="widget_title">Recent Post</h4>
                            <div class="wrapper-box">
                                <?php
                                    while($row=mysqli_fetch_array($recent)){
                                ?>
                                <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                    <div class="content">
                                        <div class="date"><i class="far fa-calendar"></i> <?php echo $row['date_time']; ?></div>
                                        <h4><a href="response-details.php?response_id=<?php echo $row['response_id']; ?>"><?php echo $row['citizen_name']; ?></a></h4>
                                    </div>
                                </div>
                           <?php  } ?>
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













