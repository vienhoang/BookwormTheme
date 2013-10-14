<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	<!-- content -->
	<div id="content">
		<section class="radius">

			<?php if ( have_posts() ): ?>
			<h2 class="top_heading">Search results for &#8220;<?php echo get_search_query(); ?>&#8221;</h2>	
			
			<?php while ( have_posts() ) : the_post(); ?>
			
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>	
				<p class="post_info">This post is written <span class="post_date"><?php the_time('jS'); ?></span> <?php the_time('F'); ?> <span class="post_date"><?php the_time('Y'); ?></span> by <?php echo get_the_author(); ?> in <?php the_category(', '); ?></p>
				<p><?php echo substr(get_the_excerpt(), 0,180); ?>&hellip;</p>

			<?php endwhile; ?>
			
			<?php else: ?>
			<h1>No results found for "<?php echo get_search_query(); ?>"</h1>
			<?php endif; ?>
		</section>
	</div><!--end content-->
	

	<?php get_sidebar(); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>