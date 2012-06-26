<?php
	// Find out what categor the post is and load custom single-category.php
	$post = $wp_query->post;
	if (in_category('Blog')) {
		include(TEMPLATEPATH.'/single-blog.php');
	} elseif (in_category('Video')) {
		include(TEMPLATEPATH.'/single-video.php');
	} elseif(in_category('Photo')) {
		include(TEMPLATEPATH.'/single-photo.php');
	} elseif(in_category('Trail')) {
		include(TEMPLATEPATH.'/single-trail.php');
	} else {
		include(TEMPLATEPATH.'/single-default.php');
	}
?>