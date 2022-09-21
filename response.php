<?php

    error_reporting(0);
    include "conn.php";

  
    //fetch response 
    //fetch 
    $response = mysqli_query($con,"SELECT * FROM response ORDER BY response_id DESC");

    //fetch category


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM response ORDER BY response_id DESC LIMIT 4");
    
     //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


?>


<head>
<title>Response - <?php echo $setting['site_name']; ?></title>
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
                <!-- Contact Widget -->
               <!-- <div class="contact-widget">
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
    <section class="page-title" style="background-image: url(https://res.cloudinary.com/ecotuulecloud/image/upload/v1657138630/ecotuule/cover-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B9%82%E0%B8%A3%E0%B8%84-COVID-19_sjxjwr.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Response</a></li>
                        <li><?php echo $row['title']; ?></li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Response Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">

                    <?php   
                        while ($row=mysqli_fetch_array($response)){
                       
                    ?>
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image">
                            <img src="https://res.cloudinary.com/ecotuulecloud/image/upload/v1657137974/ecotuule/covd_ix065s.jpg" alt="">
                                <div class="date"><?php echo $row['date_time']; ?></div>
                                <div class="overlay-two"><a href="https://res.cloudinary.com/ecotuulecloud/image/upload/v1657137974/ecotuule/covd_ix065s.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-zoom-in"></span></a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="response-details.php?id=<?php echo $row['response_id']; ?>">Covid-19 impact</a></h3>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-user"></i><?php echo $row['citizen_name']; ?></a></li>
                                </ul>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-phone"></i><?php echo $row['citizen_phone']; ?></a></li>
                                </ul>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-map"></i><?php echo $row['citizen_address']; ?></a></li>
                                </ul>
                                <div class="text">
                                    <p>
                                    Аn innovative platform that provides a detailed description of health systems and provides up to date information on reforms and changes that are particularly policy-relevant.
                                    </p>
                                </div>
                                <div class="bottom-content">
                                    <div class="link-box">
                                        <a href="response-details.php?response_id=<?php echo $row['response_id']; ?>" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                    </div>
                                 
                                </div>                                
                            </div>
                        </div>
                    </div>
               
                    <?php  } ?>


                  <!--  <ul class="pagination">
                        <li><a href="#"><i class="flaticon-right-arrow-6"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="flaticon-right-arrow-6"></i></a></li>
                    </ul> -->
                </div>

                <aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar style-two">
                        <div class="widget news-widget-two">
                            <h4 class="widget_title">Recent Post</h4>
                            <div class="wrapper-box">
                                <?php
                                    while($row=mysqli_fetch_array($recent)){
                                ?>
                                <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                    <div class="content">
                                        <div class="date"><i class="far fa-calendar"></i> <?php echo $row['date_time']; ?></div>
                                        <h4><a href="response-details.php?response_id=<?php echo $row['response_id']; ?>"><?php echo $row['citizen_address']; ?></a></h4>
                                    </div>
                                </div>
                             <?php } ?>
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













