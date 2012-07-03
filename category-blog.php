<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
	
			<div id="blog-archive">
				<?php $year = ''; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php // Lets show the year but only once ?>				
					<?php if (get_the_time('Y') != $year): ?>
						<?php $year = get_the_time('Y'); ?>
						<div class="new-year twelveCol first">
							<h3 class="fourCol first"><?php single_cat_title(); ?> <?php echo $year; ?></h3>
					<?php else: ?>
						<div class="twelveCol first">
					<?php endif; ?>
							<h4 class="eightCol last">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h4>
							<p class="eightCol last">Posted by <?php the_author() ?> &bull; <?php the_time('D, d F y') ?></p>
							<?php the_tags('<span class="post-tags-archive eightCol last">', ' ', '</span>'); ?>
						</div>
					
					<?php endwhile; ?>
			</div><!-- end blog-archive -->

			
			<?php if (function_exists('bones_page_navi')) { // if experimental feature is active ?>
				<?php bones_page_navi(); // use the page navi function ?>

					        <?php } else { // if it is disabled, display regular wp prev & next links ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="post-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
	    			<?php //get_sidebar(); // sidebar 1 ?>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>