<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
			
            <div id="description-wrapper" class="text-center description eightCol pushTwo clearfix">
				<p><?php bloginfo('description'); ?></p>
            </div>
			
			<div id="flexslider-wrapper" class="flexslider-container tenCol pushOne">
				<div id="slider" class="flexslider">
					<ul class="slides">
						<?php $featured = new WP_Query("category_name=featured&showposts=5"); ?>
                        <?php while($featured->have_posts()) : $featured->the_post();?>
                            <li><a href="<?php the_permalink() ?>"><?php feature_image_936x384(); ?></a></li>
                            <!--<p class="flex-caption"><?php echo substr(get_the_excerpt(), 0,130); ?></p>-->
                        <?php endwhile; ?>
					</ul>
				</div>
			</div>
		
			<div id="latest-posts-container" class="twelveCol first">
				<h3 class="underlined twelveCol first">Latest Posts</h3>

			    <ul id="latest-post-list" class="twelveCol first">
					<?php $summary = new WP_query('showposts=8'); //Only the latest 3 posts ?>
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
    
			<div id="row-four-container" class="twelveCol first">
				<div id="popular-posts-container" class="sixCol first">
					<h3 class="underlined clearfix">Popular Posts</h3>
					<ol id="popular-posts" class="liquid-matrix numbered-list">
						<li>
							<a href="#">
								<h4><span>Blog: </span>This is a blog post</h4>
								<p>Posted by ian &bull; Tue, 19 June 12</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h4><span>Photo: </span>This is a blog post</h4>
								<p>Posted by ian &bull; Tue, 19 June 12</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h4><span>Misc: </span>This is a blog post</h4>
								<p>Posted by ian &bull; Tue, 19 June 12</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h4><span>Video: </span>Delta Force Paint Ball</h4>
								<p>Posted by ian &bull; Tue, 19 June 12</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h4><span>Trail: </span>Check out this trail</h4>
								<p>Posted by ian &bull; Tue, 19 June 12</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h4><span>Misc: </span>This is a blog post</h4>
								<p>Posted by ian &bull; Tue, 19 June 12</p>
							</a>
						</li>
					</ol>
				</div>
				
				<div id="goodreads-container" class="sixCol last">
					<h3 class="underlined">Bookself</h3>
					<ul class="image-matrix">
						<?php if(function_exists('bookshelf')) { bookshelf(); } ?>
					</ul>
				</div><!-- End of Goodreads -->
				
			</div>
			
			<div id="lower-social" class="twelveCol first">
				<div id="lastfm-container" class="sixCol first">
					<h3 class="underlined">Album Chart</h3>
					<div id="lastfmrecords">
					</div>
				</div><!-- End of lastfm list -->
				
				<div id="instagram-container" class="sixCol last">
				</div>

			</div>
				
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php load_lastfm(); ?>
<?php load_slider(); ?>

<?php get_footer(); ?>
