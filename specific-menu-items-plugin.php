<?php
/**
 * Plugin Name: Specials and Soups/Salads Menu Items Plugin
 * Description: A plugin to create shortcodes to  display specific categories of menu items
 * Version: 1.0
 * Author: Sarah Maris
 */

/* Get and display specials */
function specials_shortcode() {

  /* Add section header */
  echo '<h2>Today\'s Specials</h2>';
  echo '<ul class="menu-section"> <!-- start menu section -->';

  /* Set up custom WP query to get specials */
  $args = array(
    'post_type' => 'menu-item',  /*which post type */
    'tax_query' => array(
       array(
         'taxonomy' => 'menu-section',   /* which taxonomy */
         'field'    => 'slug',           /* which field-type */
         'terms'    => 'specials',       /* which field */
       ),
     ),
  );

  /* Run query and display output */
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

    echo '<li class="menu-item">';
      echo '<div class="item-title">' . get_the_title() . '</div>';
      echo '<div class="item-price">' . get_the_content() . '</div>';
    echo '</li>';
  endwhile;

  /* close list */
  echo '</ul> <!-- end menu section -->';
 }

 add_shortcode( 'specials', 'specials_shortcode' );

/* Get and display Soup and Salad menu items */
function salads_shortcode() {

  /* Add section header */
  echo '<h2>Soups & Salads</h2>';
  echo '<ul class="menu-section"> <!-- start menu section -->';

  /* Set up custom WP query to get specials */
  $args = array(
    'post_type' => 'menu-item',  /*which post type */
    'tax_query' => array(
       array(
         'taxonomy' => 'menu-section',   /* which taxonomy */
         'field'    => 'slug',           /* which field-type */
         'terms'    => 'soups-salads',       /* which field */
       ),
     ),
  );

  /* Run query and display output */
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

    echo '<li class="menu-item">';
      echo '<div class="item-title">' . get_the_title() . '</div>';
      echo '<div class="item-price">' . get_the_content() . '</div>';
    echo '</li>';
  endwhile;

  /* close list */
  echo '</ul> <!-- end menu section -->';
 }

 add_shortcode( 'salads', 'salads_shortcode' );

?>
