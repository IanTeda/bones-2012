<?php
/*
Template Name: Archive page
*/
?>

<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="clearfix" role="main">

			<?php
				$posts_to_show = 100; //Max number of articles to display
				$debut = 0; //The first article to be displayed
?>
<?php while(have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<ul>
<?php
$myposts = get_posts('numberposts=$posts_to_show&offset=$debut');
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php endforeach; ?>
</ul>

<?php endwhile; ?>
			
    				</div> <!-- end #main -->
    
				    <?php //get_sidebar(); // sidebar 1 ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>