<?php get_header(); ?>
<!-- Start single-photo.php -->
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="clearfix" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
							<h3 class="underlined clearfix">
								<?php the_title(); ?>
								<span>
									<?php previous_post_link('%link','Prev'); ?> &bull; <?php next_post_link('%link','Next'); ?>
								</span>
							</h3>>
								
								<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php echo get_the_term_list( get_the_ID(), 'custom_cat', "" ) ?>.</p>
							
							</header> <!-- end article header -->
						
							<section class="post-content clearfix">
								
								<?php the_content(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
					
								<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">Custom Tags:</span> ', ', ' ) ?></p>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
                        <div id="single-post-nav" class="menu-horz clearfix">
                            <ul>
                                <li class="text-left">
                                    <?php previous_post_link('%link','<img src="' . get_bloginfo("template_directory") . '/library/images/ic_arrow_prev.png" /><span>Prev</span>'); ?>
                                </li>
                                <li class="text-right">
                                    <?php next_post_link('%link','<span>Next</span><img src="' . get_bloginfo("template_directory") . '/library/images/ic_arrow_next.png" />'); ?>
                                </li>
                            </ul>
                        </div>
                        
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
    				
					<?php get_sidebar(); // sidebar 1 ?>
				
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>