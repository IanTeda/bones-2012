<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<div id="main" class="clearfix" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header class="post-header">
						<?php feature_image_1140x336(); ?>
							<h3 class="underlined clearfix">
								<?php the_title(); ?>
								<span>
									<?php previous_post_link('%link','Prev'); ?> &bull; <?php next_post_link('%link','Next'); ?>
								</span>
							</h3>
                            
                            <?php the_tags('<p class="post-tags">', ' ', '</p>'); ?>
						</header> <!-- end article header -->
						
						<section class="post-content clearfix">
                        	<div class="post-text underlined">
								<?php the_content(); ?>
                            </div>
						</section> <!-- end article section -->
							
						<footer class="post-meta">
							<p>
								<strong><?php the_title(); ?></strong> was posted by <?php the_author() ?> on <?php the_time('D, d-M-y') ?>. It was posted under <?php the_category(', ') ?> <?php the_tags(' and taged as ', ', ', ''); ?>
								<?php edit_post_link('Edit', '', ''); ?>
							</p>
						</footer> <!-- end article footer -->
						
					</article> <!-- end article -->
						
					<?php comments_template(); ?>
						
				<?php endwhile; ?>			
				<?php else : ?>
					<article id="post-not-found">
						<header>
							<h1>Not Found</h1>
						</header>
						<section class="post-content">
							<p>Sorry, but the requested resource was not found on this site.</p>
						</section>
						<footer>
						</footer>
					</article>
						
				<?php endif; ?>
					
			</div> <!-- end #main -->
				
		</div> <!-- end #inner-content -->
    
	</div> <!-- end #content -->

<?php get_footer(); ?>