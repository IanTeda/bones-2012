<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<p class="description text-center"><?php bloginfo('description'); ?></p>
			
		<div id="main" class="clearfix" role="main">
			<h3 class="underlined clearfix">Latest Posts</h3>
			    <ul id="mycarousel" class="carousel latest-carousel">
					<?php $summary = new WP_query('showposts=6'); //Only the latest 3 posts ?>
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
            
			<h3 class="underlined clearfix">Popular Posts</h3>
			    <ol id="popular-posts" class="numbered-list">
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
            	</ol>
				
			<div id="lastfm" class="clearfix">
				<h3 class="underlined">Album Chart</h3>
				<div id="lastfmrecords">
				</div>
			</div><!-- End of lastfm list -->
			

			<div id="goodreads" class=" clearfix">
				<h3 class="underlined">Bookself</h3>
				<ul class="image-matrix">
					<?php if(function_exists('bookshelf')) { bookshelf(); } ?>
				</ul>
			</div><!-- End of Goodreads -->
				    
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php load_lastfm(); ?>

<?php get_footer(); ?>
