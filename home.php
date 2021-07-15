<?php
/**
 * Template Name: Play Page
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
            <div class="grid-x  lr-padding">
                <div class="small-12 medium-12 large-offset-1 large-6 cell">
                    <div class="grid-x">
                        <div class="small-2 cell">
                            <h2 class="large-title">
                                <?php the_field('page_title', get_option('page_for_posts')); ?>
                            </h2>
                        </div>
                    </div>
                    <h3><?php the_field('tagline', get_option('page_for_posts')); ?></h3>
                    <p><?php the_field('header_paragraph', get_option('page_for_posts')); ?></p>
                </div>

                <div class="small-12 medium-12 large-4 large-offset-1 button-push cell button-width">
                    <a href="<?php the_field('button_link_1', get_option('page_for_posts')); ?>" target="_blank">
                        <button class="btn btn-v2-dark"> <?php the_field('button_text_1', get_option('page_for_posts')); ?>
                            <i class="fas fa-external-link-alt"></i></button>
                    </a>
                    <a href="<?php the_field('button_link_2', get_option('page_for_posts')); ?>" target="_blank">
                        <button class="btn btn-v2-dark"> <?php the_field('button_text_2', get_option('page_for_posts')); ?>
                            <i class="fas fa-external-link-alt"></i></button>
                    </a>
                    <a href="<?php the_field('button_link_3', get_option('page_for_posts')); ?>" target="_blank">
                        <button class="btn btn-v2-dark"> <?php the_field('button_text_3', get_option('page_for_posts')); ?>
                            <i class="fas fa-external-link-alt"></i></button>
                    </a>
                    <h3 class="center tiny-font"><?php the_field('small_tag', get_option('page_for_posts')); ?></h3>
                </div>
            </div>
        </div>

        <div class="slanted max-width-lg slant-dark margin-pull-large">
            <div class="grid-x">
                <div class="small-12 cell">
                    <h2 class="left margin-top dark-color-invert">Video Episodes</h2>
                </div>
            </div>

            <div class="margin-top featured-podcast-card">
                <div class="grid-x">
                    <?php $posts_query = new WP_Query('posts_per_page=1');
                    while ($posts_query->have_posts()) : $posts_query->the_post();
                        ?>
                        <div class="small-12 medium-6 cell">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="small-12 medium-6 lr-padding cell">
                            <h2><?php the_title(); ?></h2>
                            <hr>
                            <div class="left"><?php the_excerpt(); ?></div>
                            <a class="no-margin" href="<?php the_permalink(); ?>">
                                <button class="center btn btn-v1"><span class="icon-icons8-play"></span> Watch Now
                                </button>
                            </a>
                        </div>

                    <?php endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>

            <div class="add-margin">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <?php
                    if (have_posts()) :while (have_posts()) :
                    the_post();
                    echo "<div class='small-12 medium-6 margin-bottom podcast-card cell'>";
                    ?>

                    <div class="left">
                        <h2><?php the_title(); ?></h2>
                        <h3>Episode <?php $variable = get_field('episode_number', $post->ID);
                            echo $variable; ?> <!-- Grabs the field from the single post--></h3>
                        <p class="left"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <button class="btn btn-v1"><span class="icon-icons8-play"></span> Watch Now</button>
                        </a>
                    </div>
                </div>


                <?php
                endwhile;
                else:
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif;

                echo "<div class = 'center'>";
                wpbeginner_numeric_posts_nav();
                echo "</div>";
                ?>


            </div>
        </div>
    </div>

<?php get_footer();
