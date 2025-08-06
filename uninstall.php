<?php
/**
 * Shisha Menu Uninstall
 *
 * Uninstalling Shisha Menu plugin
 *
 * @package Shisha_Menu
 */

// Exit if accessed directly.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Currently, this plugin doesn't store any data in the database
// If you add database tables or options in the future, clean them up here

// Example for future reference:
// global $wpdb;
// $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}shisha_menu_items" );
// delete_option( 'shisha_menu_settings' );