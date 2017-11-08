<?php

/**
 *
 * @link              http://emanuelcampos.site
 * @since             1.0.0
 * @package           CustomAdmin
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Admin
 * Plugin URI:        http://emanuelcampos.site
 * Description:       O objetivo inicial deste plugin é criar uma área administrativa para que o usuário master consiga personalizar alguns itens simples do painel.
 * Version:           0.0.1
 * Author:            Emanuel Campos
 * Author URI:        http://emanuelcampos.site
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-admin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CUSTOM_ADMIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_custom_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-admin-activator.php';
	Custom_Admin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_custom_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-admin-deactivator.php';
	Custom_Admin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_admin' );
register_deactivation_hook( __FILE__, 'deactivate_custom_admin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_admin() {

	$plugin = new Custom_Admin();
	$plugin->run();

}
run_custom_admin();
