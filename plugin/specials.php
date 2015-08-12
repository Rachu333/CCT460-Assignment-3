<?php

/*
Plugin Name: Specials
Plugin URI: http://www.sheridanc.on.ca
Description: The widget for El Burrito's specials
Author: Isha Thaker, Alistair D'Cruz, Rachana Sai
Version: 1.0
Author URI: phoenix.sheridanc.on.ca/~ccit2710
*/

// Enqueing the style sheet into the plugin folder


function register_plugin_styles()
	{
 wp_register_style( 'plugin-style', plugins_url('/plugin.css' ) );
	wp_enqueue_style( 'plugin-style' );
 }
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

// Creating a Special widget.
class Specials extends WP_Widget {
	/**
	 * This is to register the Specials widget with WordPress.
	 */

	function __construct() {
			parent::__construct(
				'specials',
				__( 'Specials Plugin', 'text_domain' ), // This is the name of our widget
				array( 'description' => __( 'The widget on the site', 'text_domain' ), ) // Args
	);
}
 function my_post_type() {
	register_post_type( 'specials',
                array( 
				'label' => __('Specials!'), 
				'singular_label' => __('Slide', 'my_framework'),
				'_builtin' => false,
				'category_name' => 'specials',
				'exclude_from_search' => true, // Exclude from Search Results
				'capability_type' => 'page',
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'rewrite' => array(
					'slug' => 'specials-menu',
				),
				'supports' => array(
						'title',
						'custom-fields',
						'editor',
            			'thumbnail')
					) 
				);
}
add_action	('init', 'my_post_type');
add_theme_support	( 'post-thumbnails' );



/* This is the front-end display of the widget; how the widget will appear. Creating a post type called specials that will show only 4 posts per page.
We use $args to echo arguments passed on to function.
	*/ 
	
	public function widget( $args, $instance ) {
			echo $args['before_widget'];
				if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		
		$new = array('post_type'=> 'specials', 'showposts' => 4);
		$my_query = new WP_query($new);
		
				if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
		
		
		<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
			<h2 class="post-title">
				<?php the_title(); ?>
			</h2>
			
		<div class="entry-content">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php 	the_post_thumbnail('thumbnail'); ?> </a> 	
			
		</div><!-- .entry-content -->
		</article><!-- #post-## -->
		<?php endwhile; endif; ?>

<?php

		echo $args['after_widget'];
	}

/* This is the back-end of our widget; how our widget will look. */
	
	public function form( $instance ) {
			$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
?>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

<?php 
	}

	/** Comment 
	 * 

	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

	return $instance;
	}

} // 

add_action( 'widgets_init', function(){
	register_widget( 'Specials' );
});