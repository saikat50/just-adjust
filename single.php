<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TCFTHEME
 */

get_header();
?>
    <section class="bredcum resources-bredcum" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/site/resources.png)">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bredcum-text text-center">RESOURCES</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="primary" class="content-area">
        <main id="main" class="site-main pb-70 pt-70">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?php
                        while ( have_posts() ) :
                            the_post();

                            include(TEMPLATEPATH . '/template-parts/content-single.php');


                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </div>
                    <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();


