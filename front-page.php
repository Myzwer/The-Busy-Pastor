<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage A Busy Theme
 * @since 1.0.0
 */

get_header(); ?>


    <div class="content overflow-hidden">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background background-desktop-adjust"
                 style="background: url(<?php the_field("background_image");?>);  background-position: center center;">
                <div class="show-for-desktop">
                    <div class="absolute large-logo">
                        <img src="<?php the_field("floating_logo");?>" alt="Busy Pastor Logo Outline">
                    </div>
                </div>

                <div class="small-12 cell z-index-1">
                    <div class="padding-top lr-padding">
                        <div class="grid-x">
                            <div class="small-10 medium-3 large-offset-1 large-1 cell">
                                <h1 class="dark-color-invert large-title"><?php the_field("site_title");?></h1>
                            </div>

                            <div class="small-12 cell">
                                <div class="grid-x">
                                    <div class="medium-8 large-offset-1 large-10 cell">
                                        <h3 class="dark-color-invert"><?php the_field("tagline");?></h3>
                                        <a href="<?php the_field('button_url'); ?>">
                                            <button class="btn btn-v1 padding-button"><?php the_field("button_icon");?> <?php the_field("button_text");?>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slanted slant-gray margin-pull-large">
            <div class="grid-x grid-padding-x">
                <div class="small-12 cell">
                    <h2 class="left light-color-invert"><?php the_field("section_title");?></h2>
                </div>

                <div class="small-12 medium-6 cell">
                    <div class="video-container">
                        <?php the_field("video_embed");?>
                    </div>
                </div>
                <div class="small-12 medium-6 cell">
                    <p class = "left"><?php the_field("video_paragraph");?></p>
                    <div class="left">
                        <p class="left no-spacing">Follow us on Socials:</p>
                        <div class="icon-featured">
                            <a href="https://www.facebook.com/busypastor"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/busypastor/?hl=en"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCwljG51omo4mJoJBhBAaQuw"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="slanted slant-light">
            <div class="grid-x grid-padding-x">
                <div class="small-12 cell">
                    <h2 class="left"><?php the_field("bio_title");?></h2>
                </div>

                <?php
                if( have_rows('pastor_bio') ):

                    // Loop through rows.
                    while( have_rows('pastor_bio') ) : the_row(); ?>

                        <div class="small-12 medium-6 cell center padding-top-sm">
                            <div class=" mobile-image">
                                <img class=""
                                     src="<?php the_sub_field("pastor_photo");?>"
                                     alt="Pastor Photo Headshot">
                            </div>

                            <h2 class="center name-title"><?php the_sub_field("pastor_name");?></h2>
                            <h4 class="subtitle"><?php the_sub_field("pastor_title");?></h4>
                            <div class="social-icons">
                                <a href="<?php the_sub_field("facebook_social_link");?>"><i class="fab fa-facebook-square"></i></a>
                                <a href="<?php the_sub_field("instagram_social_link");?>"><i class="fab fa-instagram-square"></i></a>
                                <a href="<?php the_sub_field("twitter_social_link");?>"><i class="fab fa-twitter-square"></i></a>
                            </div>
                            <p class="left"><?php the_sub_field("bio");?></p>
                        </div>

                    <?php
                    endwhile;
                else :
                    //don't display anything
                endif;
                ?>
            </div>
        </div>

        <div class="slanted slant-dark">
            <div class="grid-x">
                <div class="small-12 medium-7 left cell">
                    <h2 class="dark-color-invert"><?php the_field("form_title");?></h2>
                    <h3 class="dark-color-invert"><?php the_field("form_subtitle");?></h3>
                </div>

                <div class="small-12 medium-12 cell left">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
                <div class="small-12 medium-7 left cell">
                    <p class = "dark-color-invert">Have further questions? Contact us at <a class = "yellow" href="info@busypastor.org">info@busypastor.org.</a></p>
                </div>
            </div>
        </div>


    </div> <!--End Content, MUST BE last-->


<?php get_footer();
