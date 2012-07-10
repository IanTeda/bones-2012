<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
			
            <div id="description-wrapper" class="text-center description eightCol pushTwo clearfix">
				<p><?php bloginfo('description'); ?></p>
            </div>
			
			<div id="flexslider-wrapper" class="flexslider-container tenCol pushOne clearfix">
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
				</div>
			</div>
		
			<div id="latest-posts-container" class="twelveCol first clearfix">
				<h3 class="underlined">Latest Posts<span><a href="<?php bloginfo('url'); ?>/sitemap#sitemap-posts-wrapper">Check out more posts &#8230;</a></span></h3>

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
						</li><!-- end post li -->
					<?php endwhile; ?>	
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
			
			</div> <!-- end #main -->
    
			<div id="row-four-container" class="twelveCol first clearfix">
				<div id="popular-posts-container" class="sixCol first clearfix">
					<h3 class="underlined">Popular Posts <span><a href="#">View the hit list &#8230;</a></span></h3>
					
					<?php if (function_exists('WPPP_show_popular_posts')) {
						WPPP_show_popular_posts("title=&number=6&days=0&magic_number=1&list_tag=ol&time_format=D, d-M-Y&format=
												<a href='%post_permalink%' title='%post_title_attribute%'>
													<span>%post_category%: </span>%post_title%
													<p>Posted by %post_author% - %post_time% (%post_views% Views)</p>
												</a>");
					} else { ?>
					<ol class='wppp_list'>
						<li>
							<a href='http://www.teda.id.au/mtb/' title='Mountain Biking'>
								<span>Trail:</span> Cronulla/Kurnell Sand Dunes
								<p>Posted by Ian - Sat, 30-Jun-2007 (2,574 Views)</p>
							</a>
						</li>
						<li>
							<a href='http://www.teda.id.au/mtb/' title='Mountain Biking'>
								<span>Blog: </span>Mountain Biking
								<p>Posted by Ian - Sat, 30-Jun-2007 (2,574 Views)</p>
							</a>
						</li>
						<li>
							<a href='http://www.teda.id.au/photo/rubiks-cube-3x3-%e2%80%93-how-to-solve-in-6-seconds/' title='Rubik&#039;s Cube 3x3 – 6 Second Solve'>
								<span>Photoblog: </span>Rubik&#039;s Cube 3x3 – 6 Second Solve
								<p>Posted by Ian - Wed, 23-Apr-2008 (1,421 Views)</p>
							</a>
						</li>
						<li>
							<a href='http://www.teda.id.au/trail/lady-carrington-drive/' title='Lady Carrington Drive'>
								<span>Trail: </span>Lady Carrington Drive
								<p>Posted by Ian - Tue, 31-Jul-2007 (791 Views)</p>
							</a>
						</li>
						<li>
							<a href='http://www.teda.id.au/trail/trail-woronora-bridge-loop/' title='Woronora Bridge Loop'>
								<span>Trail: </span>Woronora Bridge Loop
								<p>Posted by Ian - Tue, 19-Feb-2008 (720 Views)</p>
							</a>
						</li>
					</ol>
					<?php }; ?>
				</div>
				
				<div id="goodreads-container" class="sixCol last clearfix">
					<h3 class="underlined">Bookshelf<span><a href="#">See the library &#8230;</a></span></h3>
                    
					<ul class="image-matrix">
						<?php if(function_exists('bookshelf')) { bookshelf(); } ?>
					</ul>
				</div><!-- End of Goodreads -->
				
			</div>
			
			<div id="row-five-container" class="twelveCol first clearfix">
				<div id="lastfm-container" class="sixCol first clearfix">
					<h3 class="underlined">Album Chart <span><a href="#">Check out the charts &#8230;</a></span></h3>
                    
					<div id="lastfmrecords">
					</div>
				</div><!-- End of lastfm list -->
				
				<div id="instagram-container" class="sixCol last clearfix">
                <h3 class="underlined">Photo Blog <span><a href="#">View the matrix &#8230;</a></span></h3>
                
                	<ul id="photo-list" class="image-matrix">
						<?php $featured = new WP_Query("category_name=photo&showposts=9"); ?>
                        <?php while($featured->have_posts()) : $featured->the_post();?>
                            <li><a href="<?php the_permalink() ?>"><?php feature_image_100x100(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
				</div>

			</div>
				
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php load_lastfm(); ?>
<?php load_slider(); ?>

<?php get_footer(); ?>
