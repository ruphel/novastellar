<?php
/**
 * @package    NovaStellar
 * @version    0.1.0
 * @author     Your Name <rory@cyberdesigncraft.com>
 * @copyright  Copyright (c) 2013, Ruairi Phelan
 * @link       http://cyberdesigncraft.com/themes/wordpress/hybridcore/novastellar/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Add the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'novastellar_theme_setup' );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since  0.1.0
 * @access public
 * @return void
 */
function novastellar_theme_setup() {

	/*
	 * Add a custom background to overwrite the defaults.  Remove this section if you want to use 
	 * the parent theme defaults instead.
	 *
	 * @link http://codex.wordpress.org/Custom_Backgrounds
	 */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'bcb9ce',
			'default-image' => '',
		)
	);

	/*
	 * Add a custom header to overwrite the defaults.  Remove this section if you want to use the 
	 * the parent theme defaults instead.
	 *
	 * @link http://codex.wordpress.org/Custom_Headers
	 */
	add_theme_support( 
		'custom-header', 
		array(
			'default-text-color' => '0f0651',
			'default-image'      => '',
			'random-default'     => false,
		)
	);

	/* Add custom header. */
	add_theme_support( 
		'custom-header', 
		array(
			'default-text-color' => '0f0651',
			'default-image'      => '%2$s/images/headers/novastellar.png',
			'random-default'     => false,
		));

	/* Register default headers. */
	register_default_headers(
		array(
			'novastellar' => array(
				'url'           => '%2$s/images/headers/novastellar.png',
				'thumbnail_url' => '%2$s/images/headers/novastellar-thumb.png',
				/* Translators: Header image description. */
				'description'   => __( 'Novastellar One', 'novastellar' )
			),
			'novastellar2' => array(
				'url'           => '%2$s/images/headers/novastellar2.png',
				'thumbnail_url' => '%2$s/images/headers/novastellar2.png',
				/* Translators: Header image description. */
				'description'   => __( 'NovaStellar Two', 'novastellar' )
			),
			'yourimage' => array(
				'url'           => '%2$s/images/headers/yourimage.png',
				'thumbnail_url' => '%2$s/images/headers/yourimage-thumb.png',
				/* Translators: Header image description. */
				'description'   => __( 'Your Image', 'novastellar' )
			),
		));




	/* Add a custom default color for the "primary" color option. */
	add_filter( 'theme_mod_color_primary', 'novastellar_color_primary' );
}


/**
 * Set Primary Colour
 *
 * @since  0.1.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function novastellar_color_primary( $hex ) {
	return $hex ? $hex : '807ba3';
}
