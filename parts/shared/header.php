<header class="main_header">
	<a id="logo" href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_url')?>/img/logo.jpg" alt="logo" /></a>
	<nav class="radius">
		<ul>
		<!-- assign a home li as active -->
		<li<?php 
		if (is_home()) { 
		echo " class=\"active\"";
		}
		?>><a href="./">Home</a></li>
			<?php wp_list_pages('title_li')?>
		</ul>
	</nav>
</header><!--ends header-->