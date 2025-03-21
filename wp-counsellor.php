<?php

/**
 * Plugin Name: WP Counsellor
 * Author: Heera Singh
 * Plugin URI: https://github.com/heera9331/wp-counsellor
 * Author URI: https://github.com/heera9331/
 * Description: 
 * Keywords: 
 * Text Domain: wp-counsellor
 */

define("WP_COUNSELLOR_PATH", plugin_dir_path(__FILE__));
define("WP_COUNSELLOR_URI", plugin_dir_url(__FILE__));

class Wp_counsellor
{
  public function __construct() {}
}

new Wp_counsellor();