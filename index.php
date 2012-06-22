<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<p class="description text-center"><?php bloginfo('description'); ?></p>
			
		<div id="main" class="eightcol first clearfix" role="main">
			<h3 class="underlined">Latest Posts</h3>
			    <ul id="mycarousel" class="latest-carousel">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<li>
                           	<a href="#">
								<img class="resizeable" src="<?php echo get_template_directory_uri(); ?>/library/images/altered-full-1-220x140.jpg">
                                <h5 class="article-title text-center">Altered</h5><span class="article-categories text-center">design / illustration</span>
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
				    
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>
