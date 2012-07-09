<?php
/*
Template Name: Sitemap Page
*/
?>

<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
		
			<div id="archive">
	
				<div id="sitemap-categories-wrapper" class="twelveCol first clearfix">
					<h2>Categories</h2>
					<ul id="sitemap-categories-list">
						<li><a href="#">Post Categories</a>
							<ul>
								<?php wp_list_categories('title_li=&depth=4'); ?>
							</ul>
						</li>
					</ul>
				</div>
				
				<div id="sitemap-tagclound-wrapper" class="twelveCol first clearfix">
					<h2>Tag Cloud</h2>
					<div class="overlined twelveCol first">
						<h3 class="fourCol first">Tags</h3>
						<div id="clound-wrapper" class="eightCol last">
							<?php wp_tag_cloud('smallest=12&largest=17'); ?>
						</div>
					</div>
				</div>
				
				<div id="sitemap-pages-wrapper" class="twelveCol first clearfix">
					<h2>Pages</h2>
					<ul id="sitemap-pages-list">
						<?php wp_list_pages('sort_column=menu_order&depth=3&title_li='); ?>
					</ul>
				</div><!-- end #sitemap-pages-wrapper -->
	
				<div id="sitemap-posts-wrapper" class="twelveCol first clearfix">
					<?php $year = ''; ?>
					<?php while(have_posts()) : the_post(); ?>  
						<h2>Posts</h2>
						
						<?php $totalposts = get_posts('numberposts=200&offset=0'); ?>  
						<?php foreach($totalposts as $post) :?> 
						
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
						<?php endforeach; ?>  
					   
					<?php endwhile; ?>
				</div><!-- end #sitemap-posts-wrapper -->
				
			</div> <!-- end #archive -->
			
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>