<?php /* 
* Plugin Name: My Super Awesome Plugin 
* Plugin URI: http://codediva.com 
* Description: A Basic WordPress Plugin Template 
* Author: Code Diva 
* Version: 1.0 
* Author URI: http://codediva.com 
*/
function my_super_awesome_plugin(){ 
	echo"Hey! My Super Awesome plugin works!";
}
add_action( 'wp_footer', 'my_super_awesome_plugin');

function CD_Widget_Styles(){
wp_enqueue_style('widget-style', plugins_url
('/css/widget-style.css', __FILE__));
}
add_action( 'wp_enqueue_scripts', 'CD_Widget_Styles' );

function super_awesome_link($content){
	$content.='Check out my super awesome website at <a href="http://everythingisawesome.com">
	http://everythingisawesome.com!</a>';
	return	$content;
	}
	add_filter( 'the_content', 'super_awesome_link');

function cd_check_WP_version(){
	if ( version_compare( get_bloginfo( 'version' ), '4', '<' ) ){
	wp_die( "You must update WordPress to use this plugin!" );   
	}
	}
register_activation_hook( __FILE__,
'cd_check_WP_version' );
?>
