<?php
/**
 * Plugin Name: Menu Items Plugin
 * Description: A plugin to create a shortcode display menu items from a menu section on a WordPress site.
 * Version: 1.0
 * Author: Sarah Maris
 */

// Add Shortcode with inputs
function menu_section_shortcode( $atts ) {

  // Name input parameter
  $atts = shortcode_atts(
    array(
      'section' => '',
    ),
    $atts
  );

  // Get slug from input
  $section = $atts['section'];

  // Get menu-section from slug
  $menu_section = get_term_by('slug', $section, 'menu-section');

  // Get menu-section name from section
  $name = $menu_section->name;

  // Add section header
  echo '<h2>' . $name . '</h2>';
  echo '<ul class="menu-section"> <!-- start menu section -->';

  // Set up custom WP query to get specials
  $args = array(
    'post_type' => 'menu-item',  /*which post type */
    'tax_query' => array(
       array(
         'taxonomy' => 'menu-section',   /* which taxonomy */
         'field'    => 'slug',           /* which field-type */
         'terms'    => $section,       /* which field */
       ),
     ),
  );

  // Run query and display output/
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

    echo '<li class="menu-item">';
      echo '<div class="item-title">' . get_the_title() . '</div>';
      echo '<div class="item-price">' . get_the_content() . '</div>';
    endwhile;

    // close list
    echo '</ul> <!-- end menu section -->';

}
add_shortcode( 'menu', 'menu_section_shortcode' );

?>
