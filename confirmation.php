<?php
/**
 * Template Name: Confirmation Page
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
                        <div class="small-12 cell">
                            <h2 class="large-title-text">
                                <?php the_field('title');?>
                            </h2>
                        </div>
                    </div>
                    <p class = "padding-top"><?php the_field('description');?></p>
                    <a href="<?php the_field('button_1_url'); ?>">
                        <button class="btn btn-v1 padding-button margin-bottom margin-right"><i class="fas fa-arrow-circle-left"></i> <?php the_field('button_1_text'); ?>
                        </button>
                    </a>
                    <a href="<?php the_field('button_2_url'); ?>">
                        <button class="btn btn-v1 padding-button"><span class="icon-icons8-play"></span> <?php the_field('button_2_text'); ?>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();

