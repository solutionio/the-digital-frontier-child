<?php
/**
 * digitalfrontier setup functions
 *
 * @package digitalfrontier
 */

/**
 * Assign the digitalfrontier version to a var
 */
$theme 					= wp_get_theme( 'digitalfrontier' );
$digitalfrontier_version 		= $theme['Version'];

/**
 * Enqueue Storefront Styles
 * @return void
 */
function digitalfrontier_enqueue_styles() {
	global $storefront_version;

    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', $storefront_version );
}

/**
 * Enqueue digitalfrontier Styles
 * @return void
 */
function digitalfrontier_enqueue_child_styles() {
	global $digitalfrontier_version;

    wp_enqueue_style( 'digitalfrontier-style', get_stylesheet_uri(), array( 'storefront-style' ), $digitalfrontier_version );
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,700,400italic', array( 'storefront-style' ) );
    wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic', array( 'storefront-style' ) );
}

/**
 * Black
 * @return  string color
 */
function digitalfrontier_color_black( $color ) {
	$color = '#111111';
	return $color;
}

/**
 * Gold
 * @return  string color
 */
function digitalfrontier_color_gold( $color ) {
	$color = '#999e43';
	return $color;
}

/**
 * White
 * @return  string color
 */
function digitalfrontier_color_white( $color ) {
	$color = '#ffffff';
	return $color;
}

/**
 * English winter
 * @return  string color
 */
function digitalfrontier_color_english_winter( $color ) {
	$color = '#777777';
	return $color;
}

/**
 * Charcoal
 * @return  string color
 */
function digitalfrontier_color_charcoal( $color ) {
	$color = '#2b2b2b';
	return $color;
}

/**
 * Asphalt
 * @return  string color
 */
function digitalfrontier_color_asphalt( $color ) {
	$color = '#303030';
	return $color;
}

/**
 * Newspaper
 * @return  string color
 */
function digitalfrontier_color_newspaper( $color ) {
	$color = '#eeeeee';
	return $color;
}
