<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="ninecol first clearfix" role="main">
		
			<h2 class="archive-title">
				<span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?>
			</h2>
			
			<div id="search-results" class="clearfix">
				<?php $year = ''; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php // Lets show the year but only once ?>				
					<?php if (get_the_time('Y') != $year): ?>
						<?php $year = get_the_time('Y'); ?>
						<div class="new-year twelveCol first overlined">
							<h3 class="fourCol first"><?php echo $year; ?></h3>
					<?php else: ?>
						<div class="twelveCol first">
					<?php endif; ?>
							<h4 class="post-archive-title eightCol last">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<span>
										<?php if($post->post_type == 'page') { ?>
											Page:
										<?php } else { ?>
											<?php category_name() ?>:
										<?php } ?>
									</span> <?php the_title(); ?>
								</a>
							</h4>
							<p class="post-archive-meta eightCol last">Posted by <?php the_author() ?> &bull; <?php the_time('D, d F y') ?></p>
							<?php the_tags('<span class="post-tags-archive eightCol last">', ' ', '</span>'); ?>
							
							<section class="post-excerpt eightCol last">
								<?php the_excerpt('<span class="read-more">Read more &raquo;</span>'); ?>
							</section> <!-- end excerpt section -->
						</div>
				<?php endwhile; ?>	
						
				<?php if (function_exists('bones_page_navi')) { // if expirimental feature is active ?>
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
							<h1><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
						</header>
						
						<section class="post-content">
							<p><?php _e("UTry your search again.", "bonestheme"); ?></p>
						</section>
						
						<footer class="article-footer">
							<p><?php _e("This is the error message in the search.php template.", "bonestheme"); ?></p>
						</footer>
					</article>
						
				<?php endif; ?>
			</div> <!-- end #search-results -->
			
		</div> <!-- end #main -->
    			
    </div> <!-- end #inner-content -->
    
</div> <!-- end #content -->
<?php get_footer(); ?>