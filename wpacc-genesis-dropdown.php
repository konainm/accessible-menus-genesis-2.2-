<?php
/**
 * Plugin Name: Accessible Menus (Genesis 2.2+)
 * Plugin URI: https://github.com/KonainM/accessible-menus-genesis-2.2-.git
 * Description: Adds keyboard accessibility to the Genesis menu's (version 2.2 and higher)
 * Version: 1.0
 * Author: Konain Mukadam
 * Author URI: https://github.com/KonainM/
*/


add_action( 'wp_enqueue_scripts', 'wpacc_genesis_dropdown_scripts' );
function wpacc_genesis_dropdown_scripts() {

	wp_enqueue_script( 'wpacc-genesis-dropdown',   plugins_url( '/wpacc-genesis-dropdown.js' , __FILE__ ), array( 'jquery' ), false, true );

	wp_register_style( 'wpacc-genesis-dropdown-css', plugins_url( '/wpacc-genesis-dropdown.css' , __FILE__ ) );
	wp_enqueue_style('wpacc-genesis-dropdown-css');
}


?>
