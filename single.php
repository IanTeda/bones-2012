<?php
	// Find out what categor the post is and load custom single-category.php
	$post = $wp_query->post;
	if (in_category('blog')) {
		include(TEMPLATEPATH.'/single-blog.php');
	} elseif (in_category('video')) {
		include(TEMPLATEPATH.'/single-video.php');
	} elseif(in_category('photo')) {
		include(TEMPLATEPATH.'/single-photo.php');
	} elseif(in_category('trail')) {
		include(TEMPLATEPATH.'/single-trail.php');
	} else {
		include(TEMPLATEPATH.'/single-default.php');
	}
?>