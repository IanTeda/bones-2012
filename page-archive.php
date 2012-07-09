<?php
/*
Template Name: Archive page
*/
?>

<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
		
			<div id="archive">
	
				<?php $year = ''; ?>
				<?php while(have_posts()) : the_post(); ?>  
					<h2><?php the_title(); ?></h2>
					
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
				
			</div> <!-- end #archive -->
			
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>