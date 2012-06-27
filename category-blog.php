<!-- archive category-blog -->
<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
			<h2 class="archive-title">
				<?php single_cat_title(); ?> Posts
			</h2>
			
			<div id="blog-archive">
				<?php $year = ''; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php //the_date('F Y', '<p class="the_date"><span>', '</span></p>'); ?>
					<?php if (get_the_time('Y') != $year): ?>
						<?php $year = get_the_time('Y'); ?>
						<h3 class="blog-archive-year"><?php echo $year; ?></h3>
					<?php endif; ?>
					
					<div class="blog-archive-post">
						<h4>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h4>
						<?php the_tags('<span class="post-tags">', ' ', '</span>'); ?>
						<p>Posted by <?php the_author() ?> &bull; <?php the_time('D, d F y') ?></p>
					</div><!-- end blog-archive-post -->
					
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