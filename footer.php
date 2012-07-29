			<footer id="footer" role="contentinfo">
				<div id="inner-footer" class="wrap clearfix">
					<h3 id="footer-copyright" class="sixCol first">
						<a href="<?php bloginfo('url'); ?>/wp-admin">www.teda.id.au</a> is powered by <a href="http://wordpress.org/">Wordpress</a>
					</h3>
					<ul id="social-list">
						<li>
							<a href="https://www.facebook.com/ian.teda" title="Facebook">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_facebook.png">
							</a>
						</li>
						<li>
							<a href="http://www.goodreads.com/user/show/997558-ian" title="Goodreads - What am I reading?">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_goodreads.png">
							</a>
						</li>
						<li>
							<a href="http://www.last.fm/user/t33d5" title="Last FM - What are we listening to?">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_lastfm.png">
							</a>
						</li>
						<li>
							<a href="http://www.linkedin.com/profile/view?id=97294811" title="LinkedIn - Work?">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_linkedin.png">
							</a>
						</li>
						<li>
							<a href="https://twitter.com/#!/IanTeda" title="Twitter - Tweet, tweet?">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_twitter.png">
							</a>
						</li>
						<li>
							<a href="https://vimeo.com/ianteda" title="Vimeo - Check out my videos">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_vimeo.png">
							</a>
						</li>
						<li>
							<a href="<?php bloginfo('rss2_url'); ?>" title="RSS - Subscribe to site feed">
								<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/ic_rss.png">
							</a>
						</li>
					</ul> <!-- end #social-list -->
					
 				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->