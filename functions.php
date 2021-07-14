<?php
/**
 * A Busy Theme - Functions and Definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package A Busy Theme
 */



//*****************************************************
//***************** CSS / JS Load-in ******************
//*****************************************************

// So here's the deal, if you're new to WP, you can't just load in scripts and styles using a script tag or wp pitches a
// hissy fit and won't work. You have to do what's called enqueuing them.
// https://www.wpbeginner.com/wp-tutorials/how-to-properly-add-javascripts-and-styles-in-wordpress/
// Luckily I have already done that below, and since Webpack only outputs 2 files, we only gotta do it twice.
// BUT, if for some reason you need to add another style or script, do that here.

// JQUERY. If you don't need it delete it.
function include_jQuery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');


// Javascript
function scripts_loadin() {
    wp_enqueue_script( 'frontend', get_template_directory_uri() . '/assets/public/js/frontend.js');
}
add_action('wp_enqueue_scripts', 'scripts_loadin');


// Styles
function load_styles() {
    wp_enqueue_style( 'frontend', get_template_directory_uri() . '/assets/public/css/frontend.css');
}
add_action('wp_enqueue_scripts', 'load_styles');




//*****************************************************
//********************* FONTS *************************
//*****************************************************

//Raleway Registration
wp_register_style( 'arvo_font', 'https://fonts.googleapis.com/css2?family=Arvo' );
wp_enqueue_style('arvo_font');


//*****************************************************
//*************** MENU REGISTRATIONS ******************
//*****************************************************

//*********** Header ***********
function register_my_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********** Footer Col 1 ***********
function register_col_1() {
    register_nav_menu('footer-column-1', ( 'Footer Column 1' ));
}
add_action( 'init', 'register_col_1' );

//*********** Footer Col 2 ***********
function register_col_2() {
    register_nav_menu('footer-column-2', ( 'Footer Column 2' ));
}
add_action( 'init', 'register_col_2' );

//*********** Footer Col 3 ***********
function register_col_3() {
    register_nav_menu('footer-column-3', ( 'Footer Column 3' ));
}
add_action( 'init', 'register_col_3' );



//*****************************************************
//******************* PAGINATION **********************
//*****************************************************

function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}




/* * do_action( 'wp_loaded' )
 * This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated.
 * @link https://developer.wordpress.org/reference/hooks/wp_loaded/
 */
add_action('wp_loaded', function () {
    function wp_custom_fontawesome_nav($subject)
    {
        if (!is_admin()) {
            $search = [
                '/>Home</', // ... >Home< with the brackets, to be sure to target the right Home word
                '/>Listen</', // ... etc.
                '/>Coaching</', // ... etc.
            ];
            $replace = [
                '><span class="icon-icons8-home"></span><',
                '><span class="icon-icons8-play"></span><',
                '><span class="icon-icons8-coaching"></span><'
            ];
            $subject = preg_replace($search, $replace, $subject);
            return $subject;
        };
    };
    if (!is_admin()) {
        ob_start('wp_custom_fontawesome_nav');
    }
});


//*****************************************************
//****************** THEME SUPPORT ********************
//*****************************************************

add_theme_support( 'post-thumbnails' );

function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
?>
