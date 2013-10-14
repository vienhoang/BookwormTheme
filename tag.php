<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="content">
	<section class="radius">
	
		<?php if ( have_posts() ): ?>
		<h2  class="top_heading">Tag Archive: <?php echo single_tag_title( '', false ); ?></h2>
		
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<p><?php echo substr(get_the_excerpt(), 0,180); ?>&hellip;</p>
		<?php endwhile; ?>
		
		<?php else: ?>
			<h1>No posts to display in <?php echo single_tag_title( '', false ); ?></h1>
		<?php endif; ?>

	</section>
</div><!--end content-->

<?php get_sidebar(); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>