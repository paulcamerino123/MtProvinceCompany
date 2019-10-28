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
<h2 class="page-heading">About The Mountain Province Company</h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="Card Image">
          </div>
          <div class="card-description">
            <h3>The Introduction</h3>
            <p>Mountain Province <b>(Tagalog: Lalawigang Bulubundukin)</b> is a landlocked province of the Philippines in the Cordillera Administrative Region in Luzon. 
            Its capital is Bontoc.</p>
            <p>Mountain Province was formerly referred to as Mountain in some foreign references. The name is usually shortened by locals to Mt. Province. 
            The province was named so for being in the Cordillera Central mountain range found in the upper realms of Luzon island.</p>
            <p>Mountain Province was also the name of the historical province that included most of the current Cordillera provinces. 
            This old province was established by the Philippine Commission in 1908, and was later split in 1966 into Mountain Province, Benguet, Kalinga-Apayao and Ifugao.</p>
            <h4>Having said that, the company decides to take inspiration on assisting the adventurous soul we have in ourselves.
            So 
            <b>The Mountain Province Company</b> 
            is a E-Commerce website that gives 
            <i>Tips and Tricks, Helpful and Reliable Gears</i> for everyone.</h4>
            <p>This is to showcase the beauty of nature and the amazing experience of exploration.
            Since the company employees loves explorating the known and <i>the unknown</i> themselves.</p>
          </div>
        </div>

      </section>
    </div>
<?php get_footer(); ?>