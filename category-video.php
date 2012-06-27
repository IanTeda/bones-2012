<!-- archive category-video -->
<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
				    <div id="main" class="eightcol first clearfix" role="main">
				
					    <?php if (is_category()) { ?>
						    <h1 class="archive-title h2">
							    <span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
					    	</h1>
					    
					    <?php } elseif (is_tag()) { ?> 
						    <h1 class="archive-title h2">
							    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
						    </h1>
					    
					    <?php } elseif (is_author()) { ?>
						    <h1 class="archive-title h2">
						    	<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
						    </h1>
					    
					    <?php } elseif (is_day()) { ?>
						    <h1 class="archive-title h2">
	    						<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h1>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h1 class="archive-title h2">
				    	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
					        </h1>
					
					    <?php } elseif (is_year()) { ?>
					        <h1 class="archive-title h2">
					    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
					        </h1>
					    <?php } ?>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							    <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						    </header> <!-- end article header -->
					
						    <section class="post-content clearfix">
						
							    <?php the_post_thumbnail( 'bones-thumb-300' ); ?>
						
							    <?php the_excerpt(); ?>
					
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
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