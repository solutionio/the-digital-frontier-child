<?php
/**
 * digitalfrontier structural hooks and filters
 *
 * @package digitalfrontier
 */

/**
 * Layout
 */
add_action( 'init', 'digitalfrontier_homepage_layout' );
add_action( 'storefront_header', 'digitalfrontier_primary_navigation_wrapper', 45 );
add_action( 'storefront_header', 'digitalfrontier_primary_navigation_wrapper_close', 65 );

/**
 * Homepage
 */
add_filter( 'storefront_recent_products_args', 	'digitalfrontier_product_columns_three', 99 );
add_filter( 'storefront_popular_products_args', 'digitalfrontier_product_columns_three', 99 );
add_filter( 'storefront_on_sale_products_args', 'digitalfrontier_product_columns_three', 99 );
