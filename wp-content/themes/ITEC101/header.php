<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>
</head>

<body>
    <div id="slideout-menu">
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
                <a href="#">Market Place</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
				<a href="#">Contact Us</a>
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="MTProvCo Logo">
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
                <a href="#">Market Place</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>">About</a>
            </li>
            <li>
				<a href="#">Contact Us</a>
            </li>
        </ul>
    </nav>
	<?php if(!is_front_page()){?>
		<main>
	<?php }?>
