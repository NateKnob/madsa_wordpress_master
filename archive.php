<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="large-8 medium-8 columns" role="main">
			    <!--
		    	<header class="archive-header-card">
		    		<h1 class="page-title"> <?php single_term_title(); ?> </h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	
			    	<div class="button-group expanded">--><!-- Chapter and Category Specific Subnavigation --><!--
						<a href="http://seattledsa.org/dispatches/" class="button">All</a>
						<a href="http://seattledsa.org/dispatches/actions/" class="button">Actions</a>
						<a href="http://seattledsa.org/dispatches/education/" class="button">Education</a>
						<a href="http://seattledsa.org/dispatches/minutes/" class="button">Minutes</a>
					</div>
				</header>
				<hr />-->
		    	<?php // if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php // get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php // endwhile; ?>	

					
				<?php // else : ?>
											
					<?php // get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php // endif; ?>
<?php if(is_author()){ ?>
	<?php
		$author = get_the_author_meta('ID');
		echo do_shortcode('[ajax_load_more author="'.$author.'"]');
	?>
<?php } ?>
<?php if(is_category()){ ?>
	<?php
		$cat = get_category( get_query_var( 'cat' ) );
		$category = $cat->slug;	
	?>
    <?php
		echo do_shortcode('[ajax_load_more category="'.$category.'"]');
	?>
<?php } ?>	
<?php if(is_tag()){ ?>
    <h1><span>Tag:</span> <?php echo single_cat_title('', false );?></h1>
    <?php
		$tag = get_query_var('tag'); 
		echo do_shortcode('[ajax_load_more tag="'.$tag.'"]');
	?>
<?php } ?>	
				
				
			</main> <!-- end #main -->
			<?php get_sidebar(); ?>
		    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>