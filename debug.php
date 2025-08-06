<?php
/**
 * Debug Helper for Shisha Menu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add debug information to admin footer
add_action( 'admin_footer', function() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<script>
	console.log( 'Shisha Menu Debug Info:' );
	console.log( 'Plugin Active: <?php echo is_plugin_active( 'shisha-menu/shisha-menu.php' ) ? 'Yes' : 'No'; ?>' );
	console.log( 'Elementor Loaded: <?php echo did_action( 'elementor/loaded' ) ? 'Yes' : 'No'; ?>' );
	console.log( 'Elementor Version: <?php echo defined( 'ELEMENTOR_VERSION' ) ? ELEMENTOR_VERSION : 'Not defined'; ?>' );
	</script>
	<?php
} );

// Log widget registration
add_action( 'elementor/widgets/register', function( $widgets_manager ) {
	error_log( 'Shisha Menu: elementor/widgets/register hook fired' );
}, 5 );

// Check if our widget is registered
add_action( 'elementor/editor/after_enqueue_scripts', function() {
	?>
	<script>
	jQuery( window ).on( 'elementor:init', function() {
		console.log( 'Registered Widgets:', elementor.widgetsCache );
		if ( elementor.widgetsCache['shisha-menu'] ) {
			console.log( 'Shisha Menu Widget is registered!' );
		} else {
			console.log( 'Shisha Menu Widget NOT found!' );
		}
	});
	</script>
	<?php
} );