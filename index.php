<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">
			
            <div id="description-wrapper" class="twelvecol">
                    <p class="sixcol text-center description pushThree">
                        <?php bloginfo('description'); ?>
                    </p>
            </div>
		
        	<div id="flex-wrapper" class="tencol pushOne">
                <div class="flexslider">
                    <ul class="slides">
                        <?php $featured = new WP_Query("category_name=featured&showposts=5"); ?>
                        <?php while($featured->have_posts()) : $featured->the_post();?>
                            <li><a href="<?php the_permalink() ?>"><?php slider_image_1140x641(); ?></a></li>
                            <p class="flex-caption">This is the caption</p>
                        <?php endwhile; ?>
                    </ul>
                </div><!-- end flexslider -->
            </div><!-- end flex-container -->
		
			<div id="latest-posts-container" class="clearfix">
				<h3 class="underlined twelvecol">Latest Posts</h3>
			    <ul class="liquid-matrix latest-post-list">
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
    
			<?php //get_sidebar(); // sidebar 1 ?>
            <div id="popular-posts-container">
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
				
			<div id="lastfm-container" class="clearfix">
				<h3 class="underlined">Album Chart</h3>
				<div id="lastfmrecords">
				</div>
			</div><!-- End of lastfm list -->
			

			<div id="goodreads-container" class=" clearfix">
				<h3 class="underlined">Bookself</h3>
				<ul class="image-matrix">
					<?php if(function_exists('bookshelf')) { bookshelf(); } ?>
				</ul>
			</div><!-- End of Goodreads -->
				    
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php load_lastfm(); ?>
<?php load_slider(); ?>

<?php get_footer(); ?>
