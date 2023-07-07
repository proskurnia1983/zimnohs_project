<?php get_header() ?>

<main>

	<div class="posts-list">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
			}
		}
		?>
	</div>

</main>

<?php get_footer(); ?>