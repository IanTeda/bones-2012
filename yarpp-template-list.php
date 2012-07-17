<?php /*
List template
This template returns an order list of related posts with category
Author: Ian Teda
*/
?>
<h3 class="underlined">Related Posts</h3>
<ol class="numbered-list">
	<?php if (have_posts()):?>
		<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark"><span><?php category_name() ?>: </span><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
		<?php endwhile; ?>
	<?php else: ?>
		<li><a href="#">No related posts.</a></li>
	<?php endif; ?>
</ol>
