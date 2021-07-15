<?php
/**
 * Template Name: Posts Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="content">
        <div class="grid-container inverted-background header-height-single full-width">
            <div class="grid-x grid-padding-x padding-top">
                <div class="small-12 cell">
                    <h1><?php the_title(); ?></h1>
                </div>


                <div class="small-12 medium-12 cell">
                    <div class="grid-x grid-padding-x padding-top">
                        <div class="small-12 medium-6 large-5 cell">
                            <div class="video-container">
                                <?php the_field('video_link'); ?>
                            </div>
                        </div>

                        <div class="small-12 medium-6 large-6 cell padding-top-mobile">
                            <h3>Episode <?php the_field("episode_number"); ?></h3>
                            <p><?php if (have_posts()) : while (have_posts()) : the_post();
                                    the_content();
                                endwhile;
                                else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                            <?php endif; ?></p>

                            <div class="margin-bottom">
                            <?php if( get_field('button_link') ): ?>
                                <a href="<?php the_field("button_link"); ?>">
                                    <button class="btn btn-v1 padding-button"><i class="fas fa-download"></i> Download Leader Guide
                                    </button>
                                </a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php if( get_field('show_notes') ): ?>
        <div class="slanted slant-gray margin-pull-large">
            <div class="grid-x">
                <div class="small-12 cell">
                    <h1 class="left margin-pull light-color-invert">Show Notes</h1>
                    <div class="left">
                        <?php the_field("show_notes"); ?>

<!--                    Adds a download button, but hides it if no link is provided.-->
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <div class="slanted slant-dark">
            <div class="grid-x grid-margin-x grid-padding-x">
                <div class="small-12 cell">
                    <h2 class="left dark-color-invert">More Episodes</h2>
                </div>

                <div class="small-12 medium-4 cell">
                <?php if (strlen(get_next_post()->post_title) > 0) { ?> <!-- Check if next post exists -->
                    <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>"> <!-- Get link of next post-->
                        <button class="btn btn-v2-light"> Next Episode</button>
                    </a>
                <?php } ?>
                </div>

                <div class="small-12 medium-4 cell">
                    <a href="/play">
                        <button class="btn btn-v2-light"> All Episodes</button>
                    </a>
                </div>


                <div class="small-12 medium-4 cell">
                    <?php if (strlen(get_previous_post()->post_title) > 0) { ?> <!-- Check if previous post exists -->
                        <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>"> <!-- Get link of next post -->
                            <button class="btn btn-v2-light"> Previous Episode</button>
                        </a>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
