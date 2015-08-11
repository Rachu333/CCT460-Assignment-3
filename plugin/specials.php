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
 * Adds 'Specials' widget.
 */

class Specials extends WP_Widget {
           function Specials () {
                     $widget_ops = array(
                     'classname' => 'Specials',
                     'description' => 'El Burrito Specials'
           ); 

          $this->WP_Widget(
                     'Specials',
                     'Specials',
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
           create_function('','return register_widget("Specials");')
 );
