<?php
/**
 * Template Name: Privacy Policy
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage A Busy Theme
 * @since 1.0.0
 */

get_header(); ?>

    <div class="content overflow-hidden">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background policy-height"
                 style="background: url(http://the-busy-pastor.local/wp-content/uploads/2021/02/Background-Texture.jpg);  background-position: center center;">

                <div class="small-12 cell z-index-1">
                    <div class="padding-top lr-padding">
                        <div class="grid-x">
                            <div class="small-10 medium-3 large-1 cell">
                                <h1 class="dark-color-invert large-title">Privacy Policy</h1>
                            </div>

                            <div class="small-12 cell">
                                <div class="grid-x">
                                    <div class="medium-8 large-10 cell">
                                        <h3 class="dark-color-invert">Updated February 3, 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="slanted slant-light margin-pull-large">
            <div class="grid-container grid-x grid-padding-x">
                <div class="small-12 left cell">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    the_content();
                                endwhile;
                            else :
                                _e('Sorry, no posts matched your criteria.', 'textdomain');
                            endif;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
