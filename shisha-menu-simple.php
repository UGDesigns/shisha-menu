<?php
/**
 * Plugin Name: Shisha Menu Simple
 * Description: Vereinfachte Version zum Testen
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Text Domain: shisha-menu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Warten bis Elementor geladen ist
add_action( 'elementor/init', function() {
	
	// Widget Kategorie hinzufügen
	add_action( 'elementor/elements/categories_registered', function( $elements_manager ) {
		$elements_manager->add_category(
			'shisha-menu',
			[
				'title' => 'Shisha Menu',
				'icon' => 'fa fa-plug',
			]
		);
	} );
	
	// Widget registrieren
	add_action( 'elementor/widgets/register', function( $widgets_manager ) {
		
		class Simple_Shisha_Widget extends \Elementor\Widget_Base {
			
			public function get_name() {
				return 'shisha-menu-simple';
			}
			
			public function get_title() {
				return 'Shisha Menu Simple';
			}
			
			public function get_icon() {
				return 'eicon-menu-card';
			}
			
			public function get_categories() {
				return [ 'shisha-menu' ];
			}
			
			protected function register_controls() {
				$this->start_controls_section(
					'content_section',
					[
						'label' => 'Content',
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				
				$this->add_control(
					'title',
					[
						'label' => 'Title',
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => 'Shisha Menu',
					]
				);
				
				$this->end_controls_section();
			}
			
			protected function render() {
				$settings = $this->get_settings_for_display();
				echo '<h2>' . esc_html( $settings['title'] ) . '</h2>';
				echo '<p>Shisha Menu Widget ist aktiv!</p>';
			}
		}
		
		$widgets_manager->register( new Simple_Shisha_Widget() );
		
		// Log für Debugging
		error_log( 'Shisha Menu Simple Widget registered' );
		
	} );
	
} );