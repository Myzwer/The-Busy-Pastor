<?php
/**
 * The template for displaying the 404 template in the Busy Pastor theme.
 *
 * @package WordPress
 * @subpackage A Busy Theme
 * @since 1.0.0
 */

get_header();
?>

    <div class="content overflow-hidden">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background policy-height"
                 style="background: url(http://the-busy-pastor.local/wp-content/uploads/2021/02/Background-Texture.jpg);  background-position: center center;">

                <div class="grid-x grid-padding-x margin-top">
                    <div class="small-12 medium-offset-1 medium-6 cell">
                        <div class="grid-container grid-x grid-padding-x">
                            <div class="small-12 cell">
                                <h1 class="dark-color-invert large-title">404 Error</h1>
                            </div>

                            <div class="small-12 cell">
                                <h3 class="dark-color-invert">Well, guess we got busy and misplaced this page.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="medium-4 cell">
                        <div class="show-for-desktop">
                            <img class="rounded-corners box-shadow"
                                 src="http://the-busy-pastor.local/wp-content/uploads/2021/02/404.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="slanted slant-light margin-pull-large">
            <div class="grid-container grid-x grid-padding-x">
                <div class="small-12 left">
                    <h2>Check out one of these instead!</h2>
                </div>

                <div class="small-12 medium-6 large-4 cell button-width">
                    <a href="#">
                        <button class="btn btn-v2-dark"> Back to Homepage</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-v2-dark"> Listen to a Podcast</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
