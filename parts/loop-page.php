<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
							
		<header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->

		<div class="row collapse">
			<?php if ( is_front_page() && 0 === 1 ) { get_template_part('parts/nav', 'main-gridbar' ); } ?>
		</div>
						
	    <section class="entry-content" itemprop="articleBody">
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
			
		</footer> <!-- end article footer -->
							    
		<?php comments_template(); ?>
						
	</article> <!-- end article -->
	
<?php endwhile; endif; ?>							