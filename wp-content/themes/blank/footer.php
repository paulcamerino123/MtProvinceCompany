<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>

<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/about'); ?>">About us</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/shop'); ?>">Shop Here</a>
                        </li>
                        <li>
                            <a href="#">Blogs & Guides</a>
                        </li>
                        <li>
                            <a href="#">Projects & Events</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/contact'); ?>">Contact Us</a>
                        </li>
                    </ul>
                </p>
            </div>

          
        </footer>

	<?php wp_footer(); ?>

</body>

</html>

