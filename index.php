
<?php
/*
Template Name: Index.php
*/
?>

<?php get_header(); // load header.php ?>

<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="index" class="clearfix" role="main">
			
            <div id="index-description" class="eightCol pushTwo clearfix">
				<p><?php bloginfo('description'); ?></p>
            </div>
			
			<div id="index-flexslider" class="tenCol pushOne clearfix">
				<div id="slider" class="flexslider">
					<ul class="slides">
						<?php $featured = new WP_Query("category_name=featured&showposts=5"); ?>
                        <?php while($featured->have_posts()) : $featured->the_post();?>
                            <li>
								<a href="<?php the_permalink() ?>">
									<?php feature_image_936x384(); ?>
									<p class="flex-caption"><strong><?php the_title(); ?></strong> &bull; <?php get_custom_excerpt($post->ID); ?></p>
								</a>
							</li>
                        <?php endwhile; ?>
					</ul>
				</div><!-- end #slider -->
			</div><!-- end #flexslider-wrapper -->
		
			<div id="index-latest-posts" class="twelveCol first clearfix">
				<h3 class="index-heading">Latest Posts<span class="index-heading-more"><a href="<?php bloginfo('url'); ?>/sitemap#sitemap-posts-wrapper">Check out more posts &#8230;</a></span></h3>

			    <ul id="latest-post-list" class="twelveCol first">
					<?php $summary = new WP_query('showposts=8&cat=-13'); //Only the 8 latest posts ?>
                	<?php if (have_posts()) : while ($summary->have_posts()) : $summary->the_post(); ?>
                    	<li class="clearfix">
                           	<a href="<?php the_permalink() ?>" title="Take me to <?php the_title(); ?>" >
								<?php feature_image_220x144(); ?>
                                <h4 class="article-title text-center">
									<?php the_title(); ?>
                                </h4>
                                <span class="article-categories text-center"><?php category_name(); ?></span>
                            </a>
						</li>
					<?php endwhile; ?>	
				</ul>
			</div><!-- end #latest-posts-container -->
			
			<div id="index-post-categories" class="twelveCol first clearfix">
				<h3 class="index-heading">Categories</h3>
				<ul id="post-category-list">
					<li>
						<a href="<?php bloginfo('url'); ?>/category/blog">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_cat_blog.png" class="resizeable"/></img>
							<h4 class="article-title text-center">Blogs</h4>
							<span class="article-categories text-center">Category</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/category/photo">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_cat_photo.png" class="resizeable"/></img>
							<h4 class="article-title text-center">Photos</h4>
							<span class="article-categories text-center">Category</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/category/trail">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_cat_trail.png" class="resizeable"/></img>
							<h4 class="article-title text-center">Trails</h4>
							<span class="article-categories text-center">Category</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/category/video">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_cat_video.png" class="resizeable"/></img>
							<h4 class="article-title text-center">Videos</h4>
							<span class="article-categories text-center">Category</span>
						</a>
					</li>
				</ul>
			</div>
					
			<?php else : ?>
				<article id="post-not-found" class="hentry clearfix">
			    	<header class="article-header">
			        	<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
			       	</header>
			        <section class="post-content">
			        	<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
			        </section>
			        <footer class="article-footer">
			            <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
			        </footer>
			    </article>
			<?php endif; ?>
    
			<div id="index-row-four" class="twelveCol first clearfix">
				<div id="index-popular-posts" class="sixCol first">
					<h3 class="index-heading">Popular Posts<span class="index-heading-more"><a href="<?php bloginfo('url'); ?>/sitemap/popular-posts">View the hit list &#8230;</a></span></h3>
					
					<?php if (function_exists('WPPP_show_popular_posts')) {
						WPPP_show_popular_posts("title=&number=7&days=0&magic_number=1&list_tag=ol&time_format=D, d-M-Y&format=
												<a  class='wppp-post-title' href='%post_permalink%' title='%post_title_attribute%'>
													<span class='wppp-post-category'>%post_category%: </span>%post_title%
													<p class='wppp-post-meta-data'>Posted by %post_author% - %post_time% (%post_views% Views)</p>
												</a>");
					} else { ?>
					<ol class='wppp_list'>
						<li>
							<a class="wppp-post-title" href='http://www.teda.id.au/mtb/' title='Mountain Biking'>
								<span class="wppp-post-category">Trail:</span> Cronulla/Kurnell Sand Dunes
								<p class="wppp-post-meta-data">Posted by Ian - Sat, 30-Jun-2007 (2,574 Views)</p>
							</a>
						</li>
						<li>
							<a class="wppp-post-title" href='http://www.teda.id.au/mtb/' title='Mountain Biking'>
								<span class="wppp-post-category">Blog: </span>Mountain Biking
								<p class="wppp-post-meta-data">Posted by Ian - Sat, 30-Jun-2007 (2,574 Views)</p>
							</a>
						</li>
						<li>
							<a class="wppp-post-title" href='http://www.teda.id.au/photo/rubiks-cube-3x3-%e2%80%93-how-to-solve-in-6-seconds/' title='Rubik&#039;s Cube 3x3 – 6 Second Solve'>
								<span class="wppp-post-category">Photoblog: </span>Rubik&#039;s Cube 3x3 – 6 Second Solve
								<p class="wppp-post-meta-data">Posted by Ian - Wed, 23-Apr-2008 (1,421 Views)</p>
							</a>
						</li>
						<li>
							<a class="wppp-post-title" href='http://www.teda.id.au/trail/lady-carrington-drive/' title='Lady Carrington Drive'>
								<span class="wppp-post-category">Trail: </span>Lady Carrington Drive
								<p class="wppp-post-meta-data">Posted by Ian - Tue, 31-Jul-2007 (791 Views)</p>
							</a>
						</li>
						<li>
							<a class="wppp-post-title" href='http://www.teda.id.au/trail/trail-woronora-bridge-loop/' title='Woronora Bridge Loop'>
								<span class="wppp-post-category">Trail: </span>Woronora Bridge Loop
								<p class="wppp-post-meta-data">Posted by Ian - Tue, 19-Feb-2008 (720 Views)</p>
							</a>
						</li>
					</ol>
					<?php }; ?>
				</div><!-- end #popular-posts-container -->
				
				<div id="index-photo-matrix" class="sixCol last">
                	<h3 class="index-heading">Photo Blog<span class="index-heading-more"><a href="<?php bloginfo('url'); ?>/category/photo/">View the matrix &#8230;</a></span></h3>
                
                	<ul id="photo-matrix"  class="image-matrix">
						<?php $featured = new WP_Query("category_name=photo&showposts=9"); ?>
                        <?php while($featured->have_posts()) : $featured->the_post();?>
                            <li><a href="<?php the_permalink() ?>"><?php feature_image_100x100(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
				</div><!-- end #instagram-container -->
			</div><!-- end #row-four-container -->
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php // load jquery plugins ?>
<?php load_slider(); ?>

<?php // load footer.php ?>
<?php get_footer(); ?>
