<div class="show-for-medium-up contain-to-grid">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
				<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
			</li>
		</ul>		
		<section class="top-bar-section right">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
</div>

<div class="show-for-small-only">
	<nav class="tab-bar">
		<section class="left tab-bar-section">
			<h1 class="title"><?php bloginfo('name'); ?></h1>
		</section>
		<section class="right-small">
			<a href="#" class="right-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
	</nav>
</div>
						
<aside class="right-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label><a href="/explore-california-rivers">Explore California's Whitewater Rivers</a></label></li>
			<?php joints_off_canvas(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>