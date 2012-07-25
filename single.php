<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix twelveCol first" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="post <?php get_category_slug(); ?>-post clearfix" role="article">
				
					<header class="post-header fourCol first">
						<h3 class="post-title">
							<?php the_title(); ?>
							<span class="post-title-navigation">
								<?php previous_post_link('%link','Prev'); ?> &bull; <?php next_post_link('%link','Next'); ?>
							</span>
						</h3>
						
						<?php feature_image_1140x336(); ?>
						
						<?php the_tags('<p class="post-tags">', ' ', '</p>'); ?>
						
					</header> <!-- end article header -->
						
					<section class="post-content clearfix eightCol last">
						<?php 
							if (in_category('blog') || in_category('trail')) {
								the_content_without_images();
							} else {
								the_content();
							}
						?>
					</section> <!-- end article section -->
							
					<footer class="post-footer clearfix fourCol first">
					
						<div class="post-footer-meta">
							<strong><?php the_title(); ?></strong> was posted by <?php the_author() ?> on <?php the_time('D, d-M-y') ?> and was filed under <?php the_category(', ') ?>
						</div>
						
						<?php if (in_category('blog') || in_category('trail')) { ?>
							<div class="post-footer-images">
								<ul id="post-image-list">
									<?php $args = array(
										'post_type' => 'attachment',
										'numberposts' => null,
										'post_status' => null,
										'post_parent' => $post->ID,
										'post_mime_type' => 'image',
										'exclude' => get_post_thumbnail_id()
									); 
									$attachments = get_posts($args);
									if ($attachments) {
										foreach ($attachments as $attachment) {
											echo '<li>';
											the_attachment_link($attachment->ID, false);
											echo '</li>';
										}
									} ?>
								</ul>
							</div>
						<?php } ?>
	
					</footer> <!-- end article footer -->
					
					<div id="related-posts" class="fourCol first">
						<?php if (function_exists('related_posts')){ ?>  
							<?php related_entries();?>  
						<?php }?> 
					</div>
						
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
				
	</div> <!-- end #inner-content -->
    
</div> <!-- end #content -->

<?php
	// Find out what category the post is in and load fitvids if video
	$post = $wp_query->post;
	if (in_category('video')) {
		load_fitvids();
	}
?>

<?php get_footer(); ?>