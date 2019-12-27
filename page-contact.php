<?php

// Template Name: Contact Page


get_header();
?>

    <section class="bredcum" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/site/bone.png)">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bredcum-text text-center" style="text-transform: uppercase;">Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-content default-padding">
        <div class="container">
            <h3 class="about-head color-black fz-70">Contact <span class="light-txt">us</span></h3>
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                    //
                    // Post Content here
                    //
                } // end while
            } // end if
            ?>

            <div class="row mt-5">
                <div class="col-md-4">
                    <ul class="contact-info mob-mt-20">
                        <li><i class="far fa-phone"></i></li>
                        <li>
                            <h4 class="contact_t">PHONE</h4>
                            <p class="regular-para color-gray mt-2">Phone: (435) 429-1348 <br>
                                E-mail: info@wejustadjust.com
                            </p>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                    <ul class="contact-info mob-mt-20">
                        <li><i class="far fa-map-marker-alt"></i></li>
                        <li>
                            <h4 class="contact_t">ADDRESS</h4>
                            <p class="regular-para color-gray mt-2">55 North 200 West #2 <br>
                                St. George, Utah 84770
                            </p>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                    <ul class="contact-info mob-mt-20">
                        <li><i class="far fa-alarm-clock"></i></li>
                        <li>
                            <h4 class="contact_t">BUSINESS HOURS</h4>
                            <p class="regular-para color-gray mt-2">
                                Monday and Wednesday 12:30-6:00 <br>
                                Tuesday, Thursday 8:30-5:00 <br>
                                Friday: 8:30-2:00 <br>
                                Other times by appointment
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12727.326334624775!2d-113.587898!3d37.1091263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac95a80ccedd02af!2sJust%20Adjust%20Chiropractic!5e0!3m2!1sen!2sbd!4v1577454915027!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>


        </div>
    </section>



<?php
get_footer();
