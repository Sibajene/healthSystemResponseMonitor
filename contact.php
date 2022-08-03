<?php
    include "conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


    if(isset($_POST['submit'])){

        $response_id = $_POST['response_id'];
        $citizen_name = mysqli_real_escape_string($con, $_POST['citizen_name']);
        $citizen_address = mysqli_real_escape_string($con, $_POST['citizen_address']);
        $citizen_phone = mysqli_real_escape_string($con, $_POST['citizen_phone']);
        $p_idd = $_POST['p_idd'];
        $d_idd = $_POST['d_idd'];
        $t_idd = $_POST['t_idd'];
        $date_time = $_POST['date_time'];
     
        $insert = mysqli_query($con, "INSERT INTO `response`(response_id, citizen_name, citizen_address, citizen_phone, p_idd, d_idd, t_idd, date_time) VALUES('$response_id', '$citizen_name','$citizen_address','$citizen_phone','$p_idd','$d_idd','$t_idd','$date_time')") or die('query failed');
     
        if($insert){
           $message[] = 'Response made successfully!';
        }else{
           $message[] = 'Response failed';
        }
     
     }
?>

<head>
<title>Contact Us - <?php echo $setting['site_name']; ?></title>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
   

    <!-- Main Header -->
    <?php  include "header.php"; ?>

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
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Barlastone, Off Mungwi Road, <br> Lusaka, Zambia.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+260)964188666"><?php $setting['map']; ?></a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="mail:sikassiba@gmail.com">supportyou@transida.com</a></div>
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
                <form method="post" action="thanks.php">
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

    <!-- Map Section -->
    <section class="map-section">
        <div class="contact-map">
            <?php echo $setting['map'];  ?>
        </div>
    </section> 
    <br><br><br>
    <br><br><br>
    <!-- Contact Info section two -->
    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="nav-tabs-wrapper">
                <div class="nav nav-tabs tab-btn-style-two">
                    <div class="theme_carousel owl-theme owl-carousel" >
                    
                    </div>
                </div>
            </div>
            
            <div class="tab-content">
            
                <div class="tab-pane fadeInUp animated active" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span><?php echo $setting['address']; ?></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a style="" href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get Covid-19 Updates</div>
                                <h2>Always in time</h2>
                            </div>
                            <!--<div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">-->
                                <a href="#cform" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Covid Updates</span></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact form section -->
    <section class="contact-form-section" id="cform">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Response</div>
                <h2>We’re Always Here for You</h2>
                <div class="text">Please do not hesitate to tell us about Covid-19 responses in your area</div>
            </div>
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact-form">
                <?php 
                        if(isset($message)){
                            foreach($message as $message){
                            echo '<p class="message">'.$message.'</p>';
                            }
                        }
                    ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" value="" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="phone" value="" placeholder="Phone Number" required>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="datetime-local" name="date" required>
                        </div>                                     
                        <div class="form-group col-md-12">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>                        
                        <div class="form-group text-center col-md-12">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..." name="submit"><span><i class="flaticon-up-arrow"></i>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->
        </div>
    </section>

   
    <!--Main Footer-->
<?php include "footer.php"; ?>

 
	
</div>
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













