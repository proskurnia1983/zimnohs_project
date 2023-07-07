<?php
get_header()
?>
<main>
	<div class="inner-content">
		<article class="single-post">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					get_template_part('template-parts/content', 'article');
				}
			}
			?>
		</article>
	</div>
</main>
<?php get_footer(); ?>