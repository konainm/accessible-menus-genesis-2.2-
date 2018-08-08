<?php
/**
 * Plugin Name: Accessible Menus for Genesis Framework (Genesis 2.2+)
 * Plugin URI: https://github.com/KonainM/accessible-menus-genesis-2.2-.git
 * Description: Adds keyboard accessibility to Genesis framework's menus (Supports Genesis 2.2+)
 * Version: 1.1
 * Author: Konain Mukadam
 * Author URI: https://github.com/KonainM/
*/


add_action( 'wp_enqueue_scripts', 'wpacc_genesis_dropdown_scripts' );
function wpacc_genesis_dropdown_scripts()
{
	$my_theme = wp_get_theme();
	if ($my_theme->get( 'Template' ) === "genesis")
	{
		wp_enqueue_script( 'wpacc-genesis-dropdown',   plugins_url( '/wpacc-genesis-dropdown.js' , __FILE__ ), array( 'jquery' ), false, true );

		wp_register_style( 'wpacc-genesis-dropdown-css', plugins_url( '/wpacc-genesis-dropdown.css' , __FILE__ ) );
		wp_enqueue_style('wpacc-genesis-dropdown-css');
	}
}


?>
