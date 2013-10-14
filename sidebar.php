<section id="sidebar"><?php /* if not sidebar is not set */ ?>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
	<aside class="searchbar radius">
		<h2>Search</h2>
			<form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
			<input id="s" name="s" type=text placeholder="Search..." class="searchfield" />
			<input type="submit" class="searchbtn radius" id="searchbtn" value="Search" />
		</form>
	</aside>

	<aside class="top_sidebar radius">
		<article>
			<h2>Recent Posts</h2>
			<ul>
				<?php
				/* Get the 5 recent posts */
				$args = array( 'numberposts' => '5' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
				echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
				}
				?>
			</ul>
		</article>
	</aside>

	<aside class="middle_sidebar radius">
		<article>
			<h2>Categories</h2>
			<ul>
				<?php wp_list_categories('title_li'); ?>
			</ul>
		</article>
	</aside>

	<aside class="bottom_sidebar radius">
		<article>
			<h2>Archives</h2>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</article>
	</aside>
	<?php endif; ?>
</section><!-- ends sidebar -->