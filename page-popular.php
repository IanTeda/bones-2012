<?php
/*
Template Name: Popular Post Tempalte
*/
?>
<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="page" class="clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="post clearfix" role="article" itemscope itemtype="http://schema.org/BlogPosting">
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
					
				    <section class="clearfix post-content">
					    <div id="popular-posts">
							<h3>Post Hit List</h3>
								
                             <?php if (function_exists('WPPP_show_popular_posts')) {
								WPPP_show_popular_posts("title=&number=20&days=360&magic_number=1&list_tag=ol&time_format=D, d-M-Y&format=
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
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>