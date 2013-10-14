<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="content">
	<section class="radius">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		
		<?php comments_template( '', true ); ?>
		<?php endwhile; ?>
	
	</section>
</div><!--end content-->

<?php get_sidebar(); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>