<?php
/*
Template Name: Goodreads Bookself Template
*/
?>
<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="page" class="clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="post <?php get_category_slug(); ?>-post clearfix" role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header class="post-header">
						
						<?php feature_image_1140x336(); ?>
					
						<h3 class="post-title">
							<?php rm_bread_crumbs(); ?>
						</h3>
						
						<?php $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');?>
						<?php if ($children) { ?>
							<ul class="subpage-navigation">
								<?php echo $children; ?>
							</ul>
						<?php } ?>
						
					</header> <!-- end article header -->
					
						    <section class="clearfix">
							    <div id="goodreads-container">
									<h3>Latest 50 Books Read</h3>
									<ul id="library-bookself-read">
										<?php if(function_exists('bookshelf')) { 
											bookshelf(); 
										} ?>
									</ul>
								</div><!-- End of Goodreads -->	
							</section> <!-- end article section -->
						
						    <footer class="article-footer">
			
							    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
							
						    </footer> <!-- end article footer -->
						    
						    <?php comments_template(); ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>		
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="post-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php //get_sidebar(); // sidebar 1 ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>