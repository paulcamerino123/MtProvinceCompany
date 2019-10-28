<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blank
 */

get_header(); ?>
<main>
<h2 class="page-heading">SEND US A MESSAGE</h2>
    <div>
        <form>
            <input type="email" name="email" id="email" placeholder="Your E-mail" required/><br>
            <input type="text" name="name" id="name" placeholder="Your Name" required/>
            <textarea name="message" id="contact-textarea" placeholder="Type here.." cols="80" rows="10"></textarea><br>
            <input type="submit" value="send" name="send"/>
        </form>
    </div>
    <br>
    <div class="mapouter">
    <iframe id="gmap_canvas" 
src="https://maps.google.com/maps?q=cavite%20state%20university%20-%20imus&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
<br>
<?php get_footer(); ?>

<style>
#gmap_canvas {
	border: 0;
	 height: 100%;
	 left: 0;
	 position: absolute;
	 top: 0;
	 width: 100%;
  }

.mapouter {
  overflow: hidden;
  padding-top: 56.25%;
  position: relative;
}
</style>