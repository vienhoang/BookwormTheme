<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="content">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article class="radius">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				
				<footer>
					<aside class="post_info">
						<p class="post_info">This post is written <span class="post_date"><?php the_time('jS'); ?></span> <?php the_time('F'); ?> <span class="post_date"><?php the_time('Y'); ?></span>  by <?php echo get_the_author(); ?> in <?php the_category(', '); ?></p>
					</aside>
				</footer>
				
				<?php the_content(); ?>
				
				<?php the_tags( '<p class="post_info">Tags: ', ', ', '</p>'); ?>
				
			</article>
			
			<!--Pagination-->
			<div class="pagination radius">
				<ul>
					<li><?php previous_post_link('%link', '&larr; <span>Previous</span>');?></li>
					<li><?php next_post_link('%link', '<span>Next</span> &rarr;');?></li>
				</ul>
			</div>
	
			<section class="radius">
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
				<h3>About <?php echo get_the_author() ; ?></h3>
				<?php the_author_meta( 'description' ); ?>
				<?php endif; ?>

				<?php comments_template( '', true ); ?>
			</section>
			
			<?php endwhile; ?>

	</div><!--ends content-->
	
	<?php get_sidebar(); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>