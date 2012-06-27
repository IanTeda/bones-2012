<?php get_header(); ?>

<!-- Start single.php -->
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="clearfix" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header class="post-header">
							
														<h3 class="underlined clearfix">
								<?php the_title(); ?>
								<span>
									<?php previous_post_link('%link','Prev'); ?> &bull; <?php next_post_link('%link','Next'); ?>
								</span>
							</h3>						
						</header> <!-- end article header -->
					
						<section class="post-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
					<footer class="post-meta clearfix">
						<p>
							<strong><?php the_title(); ?></strong> was posted by <?php the_author() ?> on <?php the_time('D, d-M-y') ?> and was filed under <?php the_category(', ') ?><?php the_tags('<span class="amp"> & </span> taged as ', ', ', ''); ?>
							<?php edit_post_link('Edit', '', ''); ?>
						</p>
					</footer> <!-- end article footer -->
						
						<?php comments_template(); ?>
					
					</article> <!-- end article -->
						
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
    			
    			</div> <!-- #inner-content -->
    			
			</div> <!-- end #content -->

<?php get_footer(); ?>