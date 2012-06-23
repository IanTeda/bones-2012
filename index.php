<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<p class="description text-center"><?php bloginfo('description'); ?></p>
			
		<div id="main" class="clearfix" role="main">
			<h3 class="underlined">Latest Posts</h3>
			    <ul id="mycarousel" class="latest-carousel">
					<?php $summary = new WP_query('showposts=3'); //Only the latest 3 posts ?>
                	<?php if (have_posts()) : while ($summary->have_posts()) : $summary->the_post(); ?>
                    	<li class="clearfix">
                           	<a href="<?php the_permalink() ?>" title="Take me to <?php the_title(); ?>" >
								<?php feature_image_220x140(); ?>
                                <h4 class="article-title text-center">
									<?php the_title(); ?>
                                </h4>
                                <span class="article-categories text-center"><?php category_name(); ?></span>
                            </a>
						</li><!-- end post li -->
					<?php endwhile; ?>	
				</ul>
					
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
    
			<?php //get_sidebar(); // sidebar 1 ?>
            
			<h3 class="underlined">Popular Posts</h3>
			    <ul id="mycarousel" class="popular-carousel">
            		<li class="clearfix">
                    	<a href="#">
                        	<img class="resizeable" src="<?php echo get_template_directory_uri(); ?>/library/images/river-night.png">
                            <h4>This is a blog post</h4>
                            <span>This is the excerpt for the post with some detail about what is in the post so people can get an idea if they click on it</span>
                        </a>
                    </li>
                    <li class="clearfix">
                    	<a href="#">
                        	<img class="resizeable" src="<?php echo get_template_directory_uri(); ?>/library/images/river-night-thin.png">
                            <h4>This is a blog post</h4>
                            <span>This is the excerpt for the post with some detail about what is in the post so people can get an idea if they click on it</span>
                        </a>
                    </li>
                    <li class="clearfix">
                    	<a href="#">
                        	<img class="resizeable" src="<?php echo get_template_directory_uri(); ?>/library/images/river-night.png">
                            <h4>This is a blog post</h4>
                            <span>This is the excerpt for the post with some detail about what is in the post so people can get an idea if they click on it</span>
                        </a>
                    </li>
            	</ul>
   			<h3 class="underlined">Album Chart</h3>
            
            
   			<h3 class="underlined">Bookself</h3>


				    
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>
