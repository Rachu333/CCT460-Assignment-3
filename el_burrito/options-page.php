<?php
/**
 * Template Name: El Burrito
 
 */
 
 get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
$text = get_option('cd_options_settings');
	echo $text['cd_text_field'];
	echo '<br/>';
	echo $text['cd_checkbox_field'];
	echo '<br />';
	echo $text['cd_radio_field'];
	echo '<br />';
	echo $text['cd_select_field'];
	echo '<br />';
	echo $text['cd_textarea_field'];
?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>