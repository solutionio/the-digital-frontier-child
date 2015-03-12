<?php
/**
 * digitalfrontier Storefront extension compatibility
 *
 * @package digitalfrontier
 */

/**
 * Declare extensions this child theme doesn't support
 * @return  void
 */
function digitalfrontier_extension_support() {
	add_filter( 'storefront_designer_enabled', '__return_false' );
}
add_action( 'init', 'digitalfrontier_extension_support', -1 );
