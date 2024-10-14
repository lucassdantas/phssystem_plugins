<?php 
/**
* Plugin Name: LC Redirect To Checkout
* Plugin URI: https://github.com/lucassdantas/phssystem_plugins.git
* Update URI: https://github.com/lucassdantas/phssystem_plugins.git
* Description: Redirect to checkout after add to cart click
* Version: 1.0.0
* Author: Lucas Dantas
* Author URI: https://www.linkedin.com/in/lucas-de-sousa-dantas/
**/

defined('ABSPATH') or die();
if(!function_exists('add_action')){
    die;
}
add_filter ('woocommerce_add_to_cart_redirect', function( $url, $adding_to_cart ) {
  return wc_get_checkout_url();
}, 10, 2 );