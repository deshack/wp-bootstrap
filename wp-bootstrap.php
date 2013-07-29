<?php
/**
 * Include Twitter Bootstrap's styles and scripts
 */

if( ! function_exists( 'wp_bootstrap_scripts' ) ) :

function wp_bootstrap_scripts() {
	/**
	 * Include styles
	 *
	 * We need only bootstrap.less which includes all the other less files
	 */
	wp_enqueue_style( 'bootstrap-less', get_template_directory_uri() . '/wp-bootstrap/less/bootstrap.less' );

	/**
	 * Include minified Bootstrap script
	 */
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/wp-bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.0-rc1', true );

	/**
	 * Include less.js to directly use LESS styles without the need to compile them
	 */
	wp_enqueue_script( 'less-js', get_template_directory_uri() . '/wp-bootstrap/js/less.min.js', array(), '1.4.1', true );
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_scripts' );
