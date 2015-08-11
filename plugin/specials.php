<?php
/**
 * @package PHP Assignment
 * @version 1.0
 */
/*
Plugin Name: Specials
Plugin URI: http://www.sheridanc.on.ca
Description: The widget for El Burrito's Specials
Author: Isha Thaker, Alistair D'Cruz, Rachana Sai
Version: 1.0
Author URI: http://www.sheridanc.on.ca
*/


/**
 * Adds PHPAssignment widget.
 */


function Widget_Styles(){
wp_enqueue_style('widget-style', plugins_url
('/css/widget-style.css', __FILE__));
}
add_action( 'wp_enqueue_scripts', 'CD_Widget_Styles' );

class [specials] extends WP_Widget {
           function [specials]() {
                     $widget_ops = array(
                     'classname' => '[specials]',
                     'description' => '[Our Specials Menu]'
           ); 

          $this->WP_Widget(
                     '[specials]',
                     '[specials]',
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
           create_function('','return register_widget("specials");')
 );
 ?>

