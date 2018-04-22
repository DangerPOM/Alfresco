<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *z
  *
 * @package WordPress
 * @subpackage ALFRESCO
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>
 <section>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Alfresco</h1>
        <div class="row center">
          <h5 class="header col s12 white-text">Mountain trek</h5>
        </div>
        <div class="row center">
          <a href="#" id="download-button" class="btn-large waves-effect waves-light blue">Get Started</a>
        </div>
        <br><br>
      </div>
    </div>
  </section>

  <section id="mainContent">
    <div class="row">
      <div class="none-display col s4 m4 l3 xl2">
        <div class="contentBlockInside">
          <?php wp_nav_menu( array( 'theme_location' => 'custom-side-menu')); ?>
        </div>
      </div>

      <div class="contentBlock col s8 m8 l7 xl7">
        <div class="contentBlockInside">
          <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Curabitur turpis. Quisque id odio. Morbi ac felis.Curabitur a felis in nunc fringilla tristique. Aenean viverra rhoncus pede. Fusce ac felis sit amet ligula pharetra condimentum. Praesent venenatis metus at tortor pulvinar varius. Sed a libero.Fusce ac felis sit amet ligula pharetra condimentum. Etiam iaculis nunc ac metus. Sed libero. Pellentesque auctor neque nec urna. Phasellus ullamcorper ipsum rutrum nunc.Donec vitae sapien ut libero venenatis faucibus. Morbi mollis tellus ac sapien. Aenean viverra rhoncus pede. Fusce fermentum odio nec arcu. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.Aenean viverra rhoncus pede. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id.</p>
        </div>
      </div>

      <div class="contentBlock col s12 m12 l2 xl3">
        <div class="contentBlockInside">
          <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congid felis luctus adipiscing.</p>
        </div>
      </div>

    </div>
  </section>
<?php get_footer(); ?>

