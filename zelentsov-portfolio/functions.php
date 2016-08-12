<?php
/**
 * The function template file
 *
 *
 * @link https://cms.dp.ua
 *
 * @package WordPress
 * @subpackage ZelentsovPortfolio
 * @since ZelentsovPortfolio 1.0
 */

//add angular
function my_scripts() {
	wp_enqueue_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/angular-1.5.8/angular.min.js'
	);
	wp_enqueue_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/angular-1.5.8/angular-route.min.js'
	);
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

//add angular animate
function angularAnimate() {
	wp_enqueue_script(
		'angularAnimate',
		get_stylesheet_directory_uri() . '/angular-1.5.8/angular-animate.min.js'
	);
}
add_action( 'wp_enqueue_scripts', 'angularAnimate' );

//add bootstrap
function wpbootstrap_scripts_with_jquery(){
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

//add main javascript file
function mainjavascript(){
	wp_register_script('mainjavascript',get_template_directory_uri() . '/javascript/jscript.js', array('jquery'),'',true);
	wp_enqueue_script('mainjavascript');
}
add_action( 'wp_enqueue_scripts', 'mainjavascript' );


//no adm panel
if(!is_admin()) {
add_action( 'show_admin_bar', '__return_false' );
}







