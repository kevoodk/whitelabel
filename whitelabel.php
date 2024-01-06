<?php 
/**
 * Plugin Name: WhiteLabel
 * Plugin URI: https://kevoo.dk
 * Description: Customize the admin screen of your WordPress site so it fits your looks and feelings.
 * Author: Kevin Kristensen
 * Author URI: https://kevoo.dk
 * Version: 1.0.0
 * Requires at least: 6.2
 * Requires PHP: 7.2
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: whitelabel
 *
 * @package WhiteLabel
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
define('WHITELABEL__PLUGIN_DIR', plugin_dir_path( __FILE__ ));


function whitelabel_activation() {
    require_once WHITELABEL__PLUGIN_DIR. '/inc/class-admin.php';
    WhiteLabel_Admin::Setup();
}
register_activation_hook(__FILE__, 'whitelabel_activation');





