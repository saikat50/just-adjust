

<?php wp_footer(); ?>
<?php
global $post;

?>

<section class="contact-bar full-width inc-shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4 class="call-to-action"><?php if($post->post_title == "Home sp"){ echo"¡Contáctenos ahora y programe su visita por solo $ 25!"; } else{ echo "Contact us now and schedule your visit for only $25!"; } ?></h4>
            </div>
            <div class="col-md-3">
                <p class="text-center contact-btn"><a href="<?php echo home_url($wp->request); ?>/contact-us/" class="btn btn-primary btn-green bg-white color-green"><?php if($post->post_title == "Home sp"){ echo"CONTACTENOS"; } else{ echo "contact now"; } ?></a></p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<!-- Start Footer 
============================================= -->
<footer class="bg-black">
    <div class="container">
        <div class="row">
            <div class="f-items default-padding">

                <!-- Single Item -->
                <div class="col-md-3">
                    <div class="">
                        <h4>About Us</h4>
                        <p style="margin-top: 20px;">
                            We offer over 23 years of experience and knowledge in spinal and chiropractic adjustments.   Our Mission is to inspire our community to elevate their health and well being through back to basics chiropractic care.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="link">
                        <h4>Menu</h4>
                        <ul class="footer-m" style="margin-top: 20px;">
                            <li>
                                <a href="<?php echo home_url($wp->request); ?>/home/'" class="active">Home</a>
                            </li>
                            <li><a href="<?php echo home_url($wp->request); ?>/about-us/">About</a></li>
                            <li><a href="<?php echo home_url($wp->request); ?>/services">Services</a></li>
                            <li><a href="<?php echo home_url($wp->request); ?>/resources">Resources</a></li>
                            <li>
                                <a href="<?php echo home_url($wp->request); ?>/contact-us/">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3">
                    <div>
                        <h4>Contact Us</h4>
                        <p style="margin-top: 20px;">Address <br>
                            55 North 200 West #2 <br>
                            Saint George, UT 84770
                        </p>
                        <p>
                            Email <br>
                            <a style="color: #4A7CCC" href="mailto: info@wejustadjust.com">info@wejustadjust.com</a>

                        </p>
                        <p>
                            Phone <br>
                            (435) 429-1348
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Business Hours</h4>
                    <p style="margin-top: 20px;">
                        Mondays and Wednesdays<br>
                        12:30PM to 6:00PM- 6 PM <br>
                        Tuesdays and Thursdays <br>
                        8:30AM to 5:00PM <br>
                        Fridays from 8:30AM to 2:00PM <br>
                        Other times by appointment
                    </p>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2019 The Code Frame LLC  |  Designed and developed by <a href="https://thecodeframe.com" target="_blank"> <img style="width: 150px;" src="https://thecodeframe.com/wp-content/uploads/2019/06/logo.png" alt="The Code Frame" class="img-fluid footer-img"> </a></p>
                </div>
                <div class="col-md-6 text-right link">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/Thecodeframe/" class="social-link" target="_blank"><i class="fab fa-facebook-square"></i></a>

                        </li>
                        <li>
                            <a href="https://www.alignable.com/saint-george-ut/the-code-frame" class="social-link" target="_blank"> <img src="https://thecodeframe.com/wp-content/themes/tcf-theme/assets/img/static/unknown.png" alt=""> </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->



<!-- jQuery Frameworks
============================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootsnav.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
<script>
    new WOW().init();
</script>
<script>
    $(document).ready(function () {

        $('#myModal').modal('show');

    });
</script>
</body>
</html>

