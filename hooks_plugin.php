<?php
/*
Plugin Name: Event Espresso Emails -- Now with bulleted lists!
Plugin URI: https://github.com/joshfeck/ee-emails-now-with-bulleted-unordered-lists
Description: This plugin adds a new stylesheet you can use to customize your Event Espresso email notifications. Included: bulleted unordered lists!
Version: 1.0
Author: Josh Feck
Author URI: https://eventespresso.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/		

function ee_modify_email_variation( 
  $variation_path, 
  $messenger, 
  $message_type, 
  $type, 
  $variation, 
  $file_extension, 
  $url, 
  EE_Messages_Template_Pack $template_pack 
) {
  if ( $messenger != 'email' ) {
    return $variation_path;
  }

  $new_url = plugin_dir_url( __FILE__ ) . 'now_with_bullets.css';
  return $new_url;
}
add_filter( 'FHEE__EE_Messages_Template_Pack__get_variation', 'ee_modify_email_variation', 10, 8 );
