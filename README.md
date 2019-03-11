# WordPress Custom Post Plugin Demo

## Description
These plugins demonstrate how to create a custom post-type and add a shortcode to display the post loop on a page.

* Menu-Items Custom Post plugin creates the menu-items custom post type
* Specials and Soups/Salads Menu Items plugin uses a separate shortcode for each menu category
* Menu-Items Shortcode plugin uses a parameter in the shortcode to specify which category to display
---
## Use instructions

1. Upload `menu-plugin` folder to the plugins folder of your WordPress site  

2. Activate plugins
3. Add new menu-items
   * Add menu item name in title box
   * Add menu item price in text input box
   * Add a menu-section category
   * Menu section should be either `specials` or `soup-salad` if you use the Specific Menu Item plugin to display the menu items.
   * Menu section can be whatever you want if you use the Menu Items shortcode plugin to display the menu items  
     

4. Check Menu Categories to confirm that the menu section Name is correct.  Take note of the slug for each category  

5. Use a shortcode in any post or page to display the menu section  
    * Specials and Soups/Salads Menu Items plugin  
      `[specials]`  
      `[soups-salads]`

    *  Menu-Items Shortcode plugin  
       `[menu section="{menu-section slug}"]`

       examples:  
       `[menu section="specials"]`  
       `[menu section="soups-salads"]`   
       `[menu section="desserts"]`
