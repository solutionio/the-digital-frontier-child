<?php
/**
 * digitalfrontier structural functions
 *
 * @package digitalfrontier
 */

/**
 * Adjust the storefront homepage template layout
 * @return void
 */
function digitalfrontier_homepage_layout() {
	remove_action( 'homepage', 'storefront_featured_products',		40 );
	remove_action( 'homepage', 'storefront_homepage_content',		10 );

	add_action( 'digitalfrontier_before_homepage_content', 'storefront_homepage_content',			10 );
	add_action( 'digitalfrontier_before_homepage_content', 'storefront_featured_products',			20 );

	remove_action( 'homepage', 'storefront_product_categories',	20 );
}

/**
 * Primary navigation wrapper
 * @return void
 */
function digitalfrontier_primary_navigation_wrapper() {
	echo '<section class="digitalfrontier-primary-navigation">';
}

/**
 * Primary navigation wrapper close
 * @return void
 */
function digitalfrontier_primary_navigation_wrapper_close() {
	echo '</section>';
}

/**
 * Return args to set product display limit and column amount to 3
 * @param  array $args args passed to the filter
 * @return array       the modified args
 */
function digitalfrontier_product_columns_three( $args ) {
	$args['limit'] 		= 3;
	$args['columns'] 	= 3;

	return $args;
}
