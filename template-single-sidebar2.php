<?php
/*
Template Name: Post with Volunteer Signup Sidebar
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

		<div id="dsa-twin-columns" class="row">
			<div class="large-6 medium-6 small-12 columns dsa-column-left-wrapper">
					<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_column_left', true)); ?>
				</div>
				<div class="large-6 medium-6 small-12 columns dsa-column-right-wrapper">
					<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_column_right', true)); ?>
			</div>
		</div>
	
	</div> <!-- end #content -->
<div id="sidebar2" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar2' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
<?php get_footer(); ?>