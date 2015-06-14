<?php						
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
	$args = array (
		'child_of' => 73,
		'posts_per_page' => 9,
		'paged' => $paged,
		'sort_column' => 'menu_order',
	);
	$posts = get_pages( $args );
?>

<?php foreach (array_chunk($posts, 9, true) as $posts) :  ?>

    <div class="row" data-equalizer data-equalizer-mq="medium-up"> <!--Begin Row:--> 
    
            <?php 

            	$grid_id = 0;
            	foreach( $posts as $post ) : setup_postdata($post); $grid_id++; ?>

        <!--Item: -->
		<div class="<?php pages_grid_classes($grid_id); ?>">

			<div class="<?php pages_grid_panel_classes($grid_id); ?>" data-equalizer-watch>
        
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
				
					<section class="featured-image" itemprop="articleBody">
						<?php the_post_thumbnail('thumbnail'); ?>
					</section> <!-- end article section -->
				
					<header class="article-header">
						<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
					</header> <!-- end article header -->	
									
					<section class="entry-content" itemprop="articleBody">
						<?php the_excerpt('<button class="tiny">Read more...</button>'); ?> 
					</section> <!-- end article section -->
									    							
				</article> <!-- end article -->

			</div>
			
		</div>
		
	 <?php endforeach; ?>
	
	</div>  <!--End Row: --> 
	
<?php endforeach; ?>    

<?php wp_reset_postdata(); ?>
					     
<?php joints_page_navi(); ?>		

<?php if ($posts = 0) : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
