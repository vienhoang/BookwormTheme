<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="content">
	<section class="radius">
		<h1>Page not found&hellip;</h1>
		<a href="<?php echo home_url(''); ?>"><h1>Go back to homepage &hellip;</h1>
	</section>
</div><!--end content-->
	
	<?php get_sidebar(); ?>
	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>