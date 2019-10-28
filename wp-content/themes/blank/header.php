<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/LogoMakr.png" alt="MTProvCo Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
             <li>
                <a href="<?php echo site_url(''); ?>">Home</a>
            </li>
            <li>
                <a href="#">Guides</a>
            </li>
            <li>
                <a href="#">Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/shop'); ?>">Market Place</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>">About</a>
            </li>
            <li>
				<a href="<?php echo site_url('/contact'); ?>">Contact Us</a>
            </li>
        </ul>
    </nav>
	
<style>
nav{
    position:relative;
}
</style>