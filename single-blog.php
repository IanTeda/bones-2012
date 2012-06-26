<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<div id="main" class="clearfix" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header class="post-header">
						<?php feature_image_1140x336(); ?>
							<h3 class="underlined clearfix">
								<?php the_title(); ?>
								<span>
									<?php previous_post_link('%link','Prev'); ?> &bull; <?php next_post_link('%link','Next'); ?>
								</span>
							</h3>
                            
                            <?php the_tags('<p class="post-tags">', ' ', '</p>'); ?>
						</header> <!-- end article header -->
						
						<section class="post-content clearfix">
                        	<div class="post-text">
								<?php the_content(); ?>
                            </div>
                            
							<div class="post-meta-image">
                            	<div id="synopsis">
                                	<h3>Synopsis</h3>
        							<ul class="post-meta">
										<li><strong>Author: </strong>Ian</li>
                                        <li><strong>Date: </strong>Fri, 17-Aug-07</li>
                                        <li><strong>Category: </strong><a href="http://www.teda.id.au/category/trails/" title="View all posts in Trails" rel="category tag">Trails</a></li>
                                        <li><strong>Taged as: </strong><a href="http://www.teda.id.au/tag/hill-training/" rel="tag">Hill Training</a>, <a href="http://www.teda.id.au/tag/running/" rel="tag">Running</a></li>
                                    </ul>
                                    <p class="post-excerpt">A great location for getting those hill runs in and building endurance and strength.</p>
        							<a class="post-edit-link" href="http://www.teda.id.au/wp-admin/post.php?post=153&amp;action=edit" title="Edit Post">Edit</a>
								</div><!-- end post meta -->
							</div><!-- end post meta and image -->
						</section> <!-- end article section -->
							
						<footer>
							<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">Custom Tags:</span> ', ', ' ) ?></p>
						</footer> <!-- end article footer -->
						
					</article> <!-- end article -->
						
					<?php comments_template(); ?>
						
				<?php endwhile; ?>			
				<?php else : ?>
					<article id="post-not-found">
						<header>
							<h1>Not Found</h1>
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

<?php get_footer(); ?>