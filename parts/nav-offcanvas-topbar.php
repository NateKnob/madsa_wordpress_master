<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dsa-rose-mark.svg" class="dsa-rose-mark" width="35" height="35" alt="" /> <a href="<?php echo home_url(); ?>" class="dsa-top-name">Metro Atlanta <b>DSA</b></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only" style="max-width:50px; padding:10px">
		<ul class="menu" >
			<li style="float:right"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<!--<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>-->
		</ul>
	</div>
</div>