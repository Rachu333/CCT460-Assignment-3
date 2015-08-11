<?php

/**
 * @package PHP Assignment
 * @version 1.0
 */
/*
Plugin Name: Specials
Plugin URI: http://www.sheridanc.on.ca
Description: The widget for El Burrito's specials
Author: Isha Thaker, Alistair D'Cruz, Rachana Sai
Version: 1.0
Author URI: http://www.sheridanc.on.ca
*/



/**
 * Adds 'Specials' widget.
 */

<<<<<<< HEAD
class specials extends WP_Widget {
           function Specials () {
                     $widget_ops = array(
                     'classname' => 'specials',
                     'description' => 'our specials menu'
           ); 

          $this->WP_Widget(
                     'specials',
                     'specials',
=======
class Specials extends WP_Widget {
           function Specials () {
                     $widget_ops = array(
                     'classname' => 'Specials',
                     'description' => 'El Burrito Specials'
           ); 

          $this->WP_Widget(
                     'Specials',
                     'Specials',
>>>>>>> origin/master
                     $widget_ops
           );
 }

          function widget($args, $instance) { // widget sidebar output
                     extract($args, EXTR_SKIP);
                     echo $before_widget; // pre-widget code from theme
                      echo $after_widget; // post-widget code from theme
           }
 }

add_action(
           'widgets_init',
<<<<<<< HEAD
           create_function('','return register_widget("specials");')
 );


 add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'specials',
    array(
      'labels' => array(
        'name' => __( 'Specials' ),
        'singular_name' => __( 'Specials' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

<html>
<form method=post>
	I want to see the special menu for: <select name="title">		/* This is the drop down menu for when the user wants to choose the operation they want */
		<option>Select day:</option>
		<option value="mon">Monday</option>
		<option value="tues">Tuesday</option>
		<option value="wed">Wednesday</option>
		<option value="thurs">Thursday</option>
		<option value="fri">Friday</option>
		<option value="sat">Saturday</option>
		<option value="sun">Sunday</option>
	</select><br>
	Number 1:<br>
	<input type="text" name="number1">
	<br>
	Number 2:<br>
	<input type="text" name="number2"><br>
	
	<input type="submit" value="Calculate Now">
</form>
</html>


<?php 
		echo $args['after_widget'];

add_action( 'widgets_init', function(){
     register_widget( 'Specials' );
});

?>

