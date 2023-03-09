<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://thissideup.media
 * @since             1.0.0
 * @package           Test_Aaa
 *
 * @wordpress-plugin
 * Plugin Name:       aaa
 * Plugin URI:        https://https://github.com/schalkjoubert/aaa
 
 * GitHub Plugin URI: schalkjoubert/aaa
 * GitHub Plugin URI: https://https://github.com/schalkjoubert/aaa

 * Description:       Just a test
 * Version:           1.0.1
 * Author:            Schalk
 * Author URI:        https://thissideup.media
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       test-aaa
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TEST_AAA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-test-aaa-activator.php
 */
function activate_test_aaa() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-test-aaa-activator.php';
	Test_Aaa_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-test-aaa-deactivator.php
 */
function deactivate_test_aaa() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-test-aaa-deactivator.php';
	Test_Aaa_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_test_aaa' );
register_deactivation_hook( __FILE__, 'deactivate_test_aaa' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-test-aaa.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_test_aaa() {

	$plugin = new Test_Aaa();
	$plugin->run();

}
run_test_aaa();
