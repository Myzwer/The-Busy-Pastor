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
                                Coaching
                            </h2>
                        </div>
                    </div>
                    <p class = "padding-top">We are excited to launch Busy Pastor Coaching.Busy Pastor Coaching is for ministry leaders and
                        pastors who would like 1-on-1 coaching in the areas of ministry and leadership development. Sign
                        up today for more information about 1-on-1 coaching with Pastor Trent or Pastor Greg.</p>
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
