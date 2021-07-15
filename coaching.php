<?php
/**
 * Template Name: Coaching Page
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


    <div class="content">
        <div class="grid-container inverted-background header-height full-width">
            <div class="grid-x lr-padding">
                <div class="small-12 medium-12 large-5 cell margin-top padding-top">
                    <div class="grid-x">
                        <div class="small-2 cell">
                            <h2 class="large-title">
                                <?php the_field('title');?>
                            </h2>
                        </div>
                    </div>
                    <p class = "padding-top"><?php the_field('description');?></p>
                </div>

                <div class="small-12 medium-12 large-offset-1 large-6 margin-top padding-top cell">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
