<?php
/**
 * Plugin Name: Menu Item Custom Post-Type
 * Description: A plugin to create a menu-items custom post type and taxonomy for menu sections
 * Version: 1.0
 * Author: Sarah Maris
 */

/*  Create menu item post type */
 function create_menu_item_type() {
   register_post_type( 'menu-item',
     array(
       'labels' => array(
         'name' => __( 'Menu Items' ),
         'singular_name' => __( 'Menu Item' )
       ),
       'public' => true,
       'taxonomies' => array('menu-section'),
     )
   );
 }
 add_action( 'init', 'create_menu_item_type' );

/*  Create taxonomy for menu sections */
 function create_menu_section() {
   register_taxonomy(
     'menu-section',
     'menu-item',
     array(
       'label' => __( 'Menu Category' ),
       'rewrite' => array( 'slug' => 'menu-section' ),
       'hierarchical' => true,
       'show_admin_column' => true,
     )
   );
 }
 add_action( 'init', 'create_menu_section' );

?>
