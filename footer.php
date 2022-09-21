<?php
    include "conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

    <!-- Newsletter -->
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form action="thanks.php" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..."  name="email" required>
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow" name="submit"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>
<!--Main Footer-->
    <footer class="main-footer">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget contact-widget style-two">
                            <h4>Do You Have Any Question? Please <br> Contact Our Team</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrapper-box">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text"><strong>Email</strong><a href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                        </div>
                                        <ul class="social-icon">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-mail"></span></div>
                                        <div>
                                            <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                            <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            <div class="text"><strong>Sunday</strong> 10.00 am to 12.00am</div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget links-widget">
                                    <h4 class="widget_title">Useful Links</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.php">About health System Response Monitor</a></li>
                                            <li><a href="contact.php">Get Covid-19 Updates</a></li>
                                            <li><a href="response.php">Response</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> 
        </div>               
    </footer>
    <!--End Main Footer-->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="copyright-text">Copyright &copy; <script>document.write(new Date().getFullYear())</script> <?php echo $setting['site_name']; ?> | Designed By <d style="color:orange;">Sibajene Sikasukwe_2010268454</d>  </div>
                <ul class="menu">
                    <li><a href="contact.php">  Contact Us</a></li>
                </ul>
            </div>            
        </div>
    </div>
	
</div>
<!--End pagewrapper-->