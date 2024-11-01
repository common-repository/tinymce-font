<?php
/**
 * Plugin Name: TinyMCE Font
 * Description: Change the WordPress editor font from serif to sans-serif (Open Sans) and makes it a little bit larger.
 * Author: FastWP.de
 * Author URI: http://fastwp.de/
 * Version: 1.0
 */


function FastWP_mce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= plugins_url( 'font.css', __FILE__ );

	return $mce_css;
}
add_filter( 'mce_css', 'FastWP_mce_css' );


?>
