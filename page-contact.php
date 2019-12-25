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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153517.8341007107!2d-113.79041821069737!3d39.47820038518214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874c6bc78f13f9cd%3A0xbddf4aa56cd7463f!2sUtah%2C%20USA!5e0!3m2!1sen!2sbd!4v1577261231631!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>


        </div>
    </section>



<?php
get_footer();
