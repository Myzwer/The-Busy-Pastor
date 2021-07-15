<?php
/**
 * The header for A Busy Theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A Busy Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/aa36ddf53c.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<div class="sticky header-mobile" id="stickyBottom">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>

<div class="desktop-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>


<body <?php body_class(); ?>>