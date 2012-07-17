<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix twelveCol first" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				
					<header id="post-header" class="fourCol first">
						<h3 class="underlined clearfix">
							<?php the_title(); ?>
							<span>
								<?php previous_post_link('%link','Prev'); ?> &bull; <?php next_post_link('%link','Next'); ?>
							</span>
						</h3>
						
					</header> <!-- end article header -->
						
					<section class="post-content clearfix underlined eightCol last">
						<?php the_content(); ?>
					</section> <!-- end article section -->
						
					<?php the_tags('<p class="post-tags fourCol first">', ' ', '</p>'); ?>
							
					<footer class="post-meta clearfix fourCol first">
						<strong><?php the_title(); ?></strong> was posted by <?php the_author() ?> on <?php the_time('D, d-M-y') ?> and was filed under <?php the_category(', ') ?>
					</footer> <!-- end article footer -->
					
					<div id="related-posts" class="fourCol first">
						<?php if (function_exists('related_posts')){ ?>  
      						<?php related_entries();?>  
						<?php }?> 
					</div><!-- end #related-posts -->
						
				</article> <!-- end article -->
                        
				<?php comments_template(); ?>
						
			<?php endwhile; ?>			
						
			<?php else : ?>
						
				<article id="post-not-found">
					<header>
						<h3 class="underlined">Not Found</h3>
					</header>
					<section class="post-content">
						<p>Sorry, but the requested resource was not found on this site.</p>
					</section>
					<footer>
					</footer>
				</article>
						
			<?php endif; ?>

		</div> <!-- end #main -->
    				
		<?php //get_sidebar(); // sidebar 1 ?>
				
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>