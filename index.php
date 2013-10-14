<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="content">
	<?php if ( have_posts() ): ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<article class="radius">
		<header>
			<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<header>

		<footer>
			<?php /* use the_time to get more acurate time for posts posted same date, jS = 18th, F = month, Y = year */ ?>
			<p class="post_info">This post is written <span class="post_date"><?php the_time('jS'); ?></span> <?php the_time('F'); ?> <span class="post_date"><?php the_time('Y'); ?></span>  by <?php echo get_the_author(); ?></p>
		</footer>

		<div>
			<?php the_content(); ?>
		</div>
	</article>
	
	<?php endwhile; ?>

	<?php else: ?>
	<article class="radius">
		<h1>No posts to display</h1>
	</article>

	<?php endif; ?>

	<!--pagination-->
	<div class="pagination radius">
		<ul>
			<li><?php previous_post_link('%link', '&#8592; Older');?></li>
			<li><?php next_post_link('%link', 'Newer &#8594;');?></li>
		</ul>
	</div><!-- ends pagination-->
</div><!--ends content-->
<?php get_sidebar();?><?php /* when include, must have no white spaces first in documen */ ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>