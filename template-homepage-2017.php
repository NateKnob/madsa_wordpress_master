<?php
/*
Template Name: Hompage 2017
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div class="sdsa-2017-frontispiece">

		  <article class="essay" style="background: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } else { echo ''; } ?> ') no-repeat left top; background-size: 100% auto; background-color:#202020">
		    <div class="bound">
		    	<?php if ( get_post_meta($post->ID, '_dsa_alert_box', true) ) : ?><!-- Begin DSA Alert Box; Conditional -->
					<br>
					<div class="hide-for-large dsa-space">&nbsp;</div>
					<div id="dsa-alert" class="dsa-alert callout large-collapse medium-collapse row" data-closable>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/announcement-icon.svg" class="dsa-alert-icon float-left" />
							<button id="dsa-hide" class="dsa-close float-right" aria-label="Dismiss alert" type="button" data-close>
			   					<span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" /></span>
			  				</button>
							<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_alert_box', true)); ?>
					</div>
					<script>
						jQuery(document).ready(function(){
						    jQuery("#dsa-hide").click(function(){
						        jQuery("#dsa-alert").hide();
						    });
						});
					</script>
					<?php else: ?>
					<div class="hide-for-large dsa-space-2">&nbsp;</div>
				<?php endif; ?>
		      <div class="inner">
		        <div class="plate"><!-- Begin Main Content-->
		          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'parts/loop', 'pagealt' ); ?>
						<?php endwhile; endif; ?>

		        </div>
		      </div>
		    </div>
		  </article><!-- end article -->

		  <div class="diptych" style="display:none">
		    <div class="bound">
		      <div class="cards">

		        <div class="card beliefs-cycle">
		          <div class="inner">
						<?php dynamic_sidebar( 'frontbar' ); ?>


		          </div>
		        </div><!-- end beliefs carousel -->

		        <div class="card newsletter-signup"  style="display:none">
		          <div class="inner">
		            <div class="pairing">
		              <!--<figure>
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ui-foregrounds/handshake.svg" alt="" />
		              </figure>-->
		              <div class="form">
		                <div class="fields">
		                  <h1>Get our newsletter</h1>
							<div id="mc_embed_signup">
								<form action="https://dsa-atlanta.us15.list-manage.com/subscribe/post?u=da337be4ce48b3dbd7c84bc30&amp;id=9ef0d6809f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div id="mc_embed_signup_scroll">
										<div style="display:table; width:100%">
											<div class="mc-field-group" style="display:table-cell">
												<input type="text" style="width:90%" value="" name="FNAME" placeholder="First Name" class="" id="mce-FNAME">
											</div>
											<div class="mc-field-group" style="display:table-cell">
												<input type="text" style="width:90%" value="" name="LNAME" placeholder="Last Name" class="" id="mce-LNAME">
											</div>
										</div>
										<div class="mc-field-group">
											<input type="email" style="width:95%" value="" name="EMAIL" placeholder="Email Address" class="required email" id="mce-EMAIL">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div><br>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_da337be4ce48b3dbd7c84bc30_9ef0d6809f" tabindex="-1" value=""></div>
										<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
									</div>
								</form>
							</div>
							<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='NB_ID';ftypes[3]='number';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		                  <?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_feature_box', true)); ?>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div><!-- newsletter signup -->

		      </div><!-- end cards -->
		    </div><!-- end bound -->
		  </div><!-- end diptych -->
		</div><!-- end sdsa-2017-frontispiece -->

		<script async>jQuery(document).ready(function($) {
		  if($(".beliefs-carousel").length) {


		    var curActive = $(".beliefs-carousel .active");
		    var totalBeliefs = $(".beliefs-carousel li").length;
		    var curIndex = 1;


		    //console.log("curIndex is: " + curIndex);

		    function beliefAdvance() {
		      curActive = curActive.next();
		      if(curIndex == totalBeliefs) {
		        curActive = $(".beliefs-carousel li:eq(0)")
		        $(curActive).addClass("active");
		        curIndex = 1;
		      } else {
		        curIndex = curActive.index() + 1;
		        $(curActive).addClass("active");
		      }
		    }

		    function beliefRewind() {
		      curActive = curActive.prev();
		      if(curIndex == 1) {
		        curActive = $(".beliefs-carousel li:eq(11)")
		        $(curActive).addClass("active");
		        curIndex = totalBeliefs;
		      } else {
		        curIndex = curIndex - 1;
		        $(curActive).addClass("active");
		      }
		    }


		    $(".control").click(function(){

		      $(".beliefs-carousel li").removeClass("active");
		      if($(this).hasClass("next")) {
		        beliefAdvance();
		        //console.log("curIndex is: " + curIndex);
		      } else {
		        beliefRewind();
		        //console.log("curIndex is: " + curIndex);
		      }

		    });

		  }





		}); // end doc ready
		</script>

		<div id="dsa-home-row-3" class="bg-DSAred">
			<div class="row dsa-home-row-3-edit">
				<div class="text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ui-foregrounds/calendar.svg" width="70" height="70" /><br />
					<h2 class="dsa-section-title txt-DSAwhite">Upcoming Events</h2>
				</div>
        <iframe src="https://calendar.google.com/calendar/embed?src=metroatldsa%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>

		<div id="dsa-home-row-4" class="bg-dark-1">
			<div class="row dsa-home-row-4-edit text-center txt-white">
				<!-- <?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_column_right', true)); ?> -->
				<h2 class="dsa-section-title txt-DSAwhite">Recent Updates</h2>
			</div>
			<div class="row">
				<?php
					$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

					/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
					if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 4;

					$my_query = new WP_Query('post_type=post&nopaging=1');
					if($my_query->have_posts()) {
					  echo '<div class="archives-latest-section" style="display: grid; grid-template-columns: repeat(2, 1fr); grid-gap: 10px;">';
					  $counter = 1;
					  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
					    $my_query->the_post();
					    ?>
					    <div class="large-6 medium-6 small-12 columns" style='width:100%'>
					    	<div class="large-12 medium-12 small-12 columns card-gray bdr-stripe-black">
						    	<h4 class="txt-bold"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4><br/>
						    	<b>By <?php the_author() ?> / <?php the_time('F j, Y') ?></b>
						    </div>
						</div>
					    <?php
					    $counter++;
					  }
					  echo '</div>';
					  wp_reset_postdata();
					}
					?>
			</div><br>
			<div class="row text-center padding-bottom">
				<?php
   					// Get the ID of a given category
   					$category_id = get_cat_ID( 'news' );

				    // Get the URL of this category
				    $category_link = get_category_link( $category_id );
				?>

				<!-- Print a link to this category -->
				<a href="/category/news/" class="button" title="Dispatches">See All</a>
			</div>
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
