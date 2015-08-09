<?php /* 
* Plugin Name: My Super Awesome Plugin 
* Plugin URI: http://codediva.com 
* Description: A Basic WordPress Plugin Template 
* Author: Code Diva 
* Version: 1.0 
* Author URI: http://codediva.com 
*/
function my_super_awesome_plugin(){ 
	echo "Hey! My Super Awesome plugin works!"; 
	} 
add_action( 'wp_footer', 'my_super_awesome_plugin');

?>
