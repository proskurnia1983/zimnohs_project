<?php get_header() ?>

<main>

	<?php

	if (have_posts()) {
		while (have_posts()) {
			the_post();
			$title = get_the_title();
			if ($title) {
				echo '<h1 class="page-title">' . esc_html($title) . '</h1>';
			}
			the_content();
		}
	}

	if (is_page('Contact')) :

		echo do_shortcode('[contact-form-7 id="69" title="Contact Form"]');

	endif;
	?>

</main>

<?php get_footer(); ?>