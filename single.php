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
								the_content_without_images(); // Show content without images, images in sidebar
							} else {
								the_content();
							}
						?>
					</section> <!-- end article section -->
							
					<footer id="post-footer" class="clearfix fourCol first">
					
						<div id="post-footer-meta">
							<strong><?php the_title(); ?></strong> was posted by <?php the_author() ?> on <?php the_time('D, d-M-y') ?> and was filed under <?php the_category(', ') ?>
						</div> <!-- end #post-footer-meta -->
						
						<?php if (in_category('blog') || in_category('trail')) { ?>
							<div id="post-footer-images">
								<ul id="post-image-list">
									<?php $args = array( // Get post images
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
											the_attachment_link($attachment->ID, true, 'large');
											echo '</li>';
										}
									} ?>
								</ul>
							</div> <!-- end #post-footer-images -->
						<?php } ?>
					
						<div id="post-related">
							<?php if (function_exists('related_posts')) {  
								related_entries();
							} else { ?>
								<ol class="numbered-list">
									<li>
										<a href='http://www.teda.id.au/mtb/' title='Mountain Biking'>
											<span>Trail:</span> Cronulla/Kurnell Sand Dunes
										</a>
									</li>
									<li>
										<a href='http://www.teda.id.au/mtb/' title='Mountain Biking'>
											<span>Blog:</span> Mountain Biking
										</a>
									</li>
									<li>
										<a href='http://www.teda.id.au/photo/rubiks-cube-3x3-%e2%80%93-how-to-solve-in-6-seconds/' title='Rubik&#039;s Cube 3x3 – 6 Second Solve'>
											<span>Photoblog:</span> Rubik&#039;s Cube 3x3 – 6 Second Solve
										</a>
									</li> 
								</ol>
							<?php }; ?>
						</div> <!-- end #post-related -->
					</footer> <!-- end article footer -->
					
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