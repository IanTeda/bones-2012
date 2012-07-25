<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqeueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
    - an example custom post type
    - example custom taxonomy (like categories)
    - example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
    - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

require_once('library/assets/dropdown-menus.php');

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'feature_image_(220x144)', 220, 144, true );
add_image_size( 'feature_image_(1140x336)', 1140, 336, true );
add_image_size( 'feature_image_(936x384)', 936, 384, true );
add_image_size( 'feature_image_(100x100)', 100, 100, true );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/***************************************************
Call feature image thumbnails
****************************************************/
function feature_image_220x144(){
	if ( has_post_thumbnail() ) {
	 	the_post_thumbnail( array( 220, 144 ), array('class' => 'resizeable image-box-shadow') );
	} else { ?>
		<img class="resizeable image-box-shadow" src="<?php bloginfo('template_url')?>/library/images/no_image_(220x144).png" alt="No Feature Image Set" />
	<?php };
}

function feature_image_1140x336(){
	if ( has_post_thumbnail() ) {
	 	the_post_thumbnail( array( 1140, 336 ), array('class' => 'post-feature-image') );
	} else { ?>
		<img class="post-feature-image" src="<?php bloginfo('template_url')?>/library/images/no_image_(1140x336).png" alt="No Feature Image Set" />
	<?php };
}

function feature_image_936x384(){
	if ( has_post_thumbnail() ) {
	 	the_post_thumbnail( array( 936, 384 ), array('class' => 'resizeable image-box-shadow') );
	} else { ?>
		<img class="resizeable image-box-shadow" src="<?php bloginfo('template_url')?>/library/images/no_image_(936x384).png" alt="No Feature Image Set" />
	<?php };
}

function feature_image_100x100(){
	if ( has_post_thumbnail() ) {
	 	the_post_thumbnail( array( 100, 100 ), array('class' => 'instagram-image') );
	} else { ?>
		<img class="instagram-image" src="<?php bloginfo('template_url')?>/library/images/no_image_(100x100).png" alt="No Feature Image Set" />
	<?php };
}

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Sidebar 1',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Sidebar 2',
    	'description' => 'The second (secondary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */ ?>
			    <!-- custom gravatar call -->
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>&s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(_e('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>
				<?php edit_comment_link(_e('(Edit)'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Your comment is awaiting moderation.') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search the Site..." />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!

/**********************************************
Category image with link function
***********************************************/

function category_link(){
	$exclude = array("Featured");
	foreach((get_the_category()) as $category) { 
		if (!in_array($category->cat_name, $exclude)) {
			$category->cat_name . ' '; ?>
		    <?php echo get_category_link(get_cat_id($category->cat_name)); ?>"<?php
		}
	} 
}

function category_image(){
	$exclude = array("Featured", "Uncat");
	foreach((get_the_category()) as $category) {
		if (!in_array($category->cat_name, $exclude)) { ?>
			<?php bloginfo('template_directory'); ?>/library/images/ic_cat_<?php
	    	echo $category->cat_name . '.png"'; ?><?php
		}
	}
}

function category_name(){
	$exclude = array("Featured");
	foreach((get_the_category()) as $category) { 
		if (!in_array($category->cat_name, $exclude)) {
			echo $category->cat_name . ''; ?><?php
		}
	} 	
}

function get_category_slug(){
	$exclude = array("featured");
	foreach((get_the_category()) as $category) { 
		if (!in_array($category->slug, $exclude)) {
			echo $category->slug . ''; ?><?php
		}
	} 	
}

function get_my_post_category(){
	$post_cats = $wp_get_object_terms( $post->ID, 'category' );
	foreach( $post_cats as $cat ){
    	echo '<a href="/' . $cat->slug . '" title="' . $cat->name . ' Category">' . $cat->name . '</a>';
	}	
}

/**********************************************
Load jQuery plugins
***********************************************/
function load_lastfm(){
	wp_register_script( 'lastfm-records', get_template_directory_uri() . '/library/js/libs/last.fm.records.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'lastfm-records' );?>
	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("#lastfmrecords").lastFmRecords(
				{"period": "topalbums12month", "user": "t33d5", "count": "50"}									   
			);
		});
	</script><?php
}

function load_fitvids(){
	wp_register_script( 'fitvids', get_template_directory_uri() . '/library/js/libs/jquery.fitvids.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'fitvids' ); ?>
	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.post-content').fitVids();
		});
	</script><?php
}

function load_slider(){
	wp_register_script( 'flexslider', get_template_directory_uri() . '/library/js/libs/jquery.flexslider.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'flexslider' );
	
	wp_register_style( 'slider-css', get_template_directory_uri() . '/library/css/jquery.flexslider.css', array(), '20120208', 'all' );
	wp_enqueue_style( 'slider-css' );
	
	?>
	<script type="text/javascript">
		jQuery(window).load(function() {
			// The slider being synced must be initialized first
			jQuery('.flexslider').flexslider({
				animation: "fade",
			});
		});
	</script>
	<?php
}
	

/***************************************
Excerpt function
****************************************/

function get_custom_excerpt($postid){
	if(has_excerpt($postid)) {
		//This post have an excerpt, let's display it
		echo get_the_excerpt($postid);
	} else {
		echo 'There is no excerpt for this post.';
	}	
}

/** Add excerpts to apges **/
add_post_type_support( 'page', 'excerpt' );

//breadcrumb function
function rm_bread_crumbs() {
	 global $post;
	
	 //if the page has a parent add title and link of parent
	 if($post->post_parent) {
	 	$crumbs .= '<a href="'.get_permalink($post->post_parent).'">'.get_the_title($post->post_parent).'</a>'.' &raquo; ';
	 }
	
	 // if it's not the front page of the site, but isn't the blog either
	 if((!is_front_page()) && (is_page())) {
	 	$crumbs .= get_the_title($post->ID);
	 }
	
	 //if it's the news/blog home page or any type of archive
	 if((is_home() ||(is_archive()))) {
	 	$crumbs .= ' &raquo; 2 '.get_the_title(get_option(page_for_posts));
	 }
	
	 //if it's a single news/blog post
	 if(is_single()) {
	 	$crumbs .= ' &raquo; 3 <a href="'.get_permalink(get_option(page_for_posts)).'">'.get_the_title(get_option(page_for_posts)).'</a>';
	 	$crumbs .= ' &raquo; 4 '.get_the_title($post->ID);
	 }
	 
	 $crumbs .=    "\n";
	 echo $crumbs;
}

/*******************************
Extract images from posts
********************************/

function the_content_without_images(){
	add_filter('the_content', 'strip_images',2);
	the_content();
}

function strip_images($content){
	return preg_replace('/<img[^>]+./','',$content);
}

function the_content_images(){
	// Get the post ID
    $iPostID = get_the_ID();
 
    // Get images for this post
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
 
    // If images exist for this page
    if($arrImages) {
 
        // Get array keys representing attached image numbers
        $arrKeys = array_keys($arrImages);
 
        // Get the first image attachment
        $iNum = $arrKeys[0];
 
        // Get the thumbnail url for the attachment
        $sThumbUrl = wp_get_attachment_thumb_url($iNum);
 
        // UNCOMMENT THIS IF YOU WANT THE FULL SIZE IMAGE INSTEAD OF THE THUMBNAIL
        //$sImageUrl = wp_get_attachment_url($iNum);
 
        // Build the <img> string
        $sImgString = '<li><img src="' . $sThumbUrl . '" class="post-meta-images" /></li>';
 
        // Print the image
        echo $sImgString;
    }
}


?>