<?php get_header() ?>
<main>
	<?php
	$profile_photo = get_field('profile_photo',  get_option('page_for_posts'));
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	if (!empty($profile_photo)) : ?>
		<div class="profile">
			<div class="photo-holder radius">
				<?php
				echo wp_get_attachment_image($profile_photo, $size);
				?>
			</div>
			<span class="photo-name"><?php echo get_field('profile_name', get_option('page_for_posts')); ?></span>
			<span><?php echo get_field('profile_about', get_option('page_for_posts')); ?></span>
		</div>
	<?php endif; ?>
	<?php

	$socialLinks = get_field('social_link', get_option('page_for_posts'));

	if (!empty($socialLinks))
		get_template_part('template-parts/social-links', null, $socialLinks);
	?>

	<h1 class="blog-title">
		<?php 
		/*
		* Mit get_option() können die WP Option-Fields abgerufen werden
		* die Option "page_for_posts" liefert die ID der Seite, die als Beiitragsseite eingestellt wurde
		* https://developer.wordpress.org/reference/functions/get_option/
		*/
		$pagePosts = get_option('page_for_posts');
		if (!empty($pagePosts)) {
			/* get_the_title() liefert als return den Seitentitel als Parameter kann der Funktion die Post-ID oder das Post-Object übergeben werden */
			echo get_the_title($pagePosts);
		} else {
			/* die WordPress Funktion "bloginfo()" gibt nütliche Informationen zur Website zurück. Über den Parameter 'show' können einzelne Werte ausgegeben werden.
      * bloginfo('name') gibt den "Titel der Website" (Einstellungen->Allgemein) zurück
      * https://developer.wordpress.org/reference/functions/bloginfo/
      */
			bloginfo('name');
		}
		?>
	</h1>
	<div class="posts-list">
		<?php 
		/* WordPress Standard Schleife zur Ausgabe des Seiten-Inhalts und der Beiträge
        * https://developer.wordpress.org/themes/basics/the-loop/
        */
		if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article class="post">
					<div class="post-info"><a href=<?php echo esc_url(get_permalink()) ?>><?php echo the_excerpt() ?></a></div>
					<div class="meta">
						<?php 
						/*
						* "the_time()" gibt das Veröffentlichkeits-Datum & Zeit aus. Als Parameter übergeben wir das Format als PHP
						* https://developer.wordpress.org/reference/functions/the_time/
						* https://www.php.net/manual/de/function.date.php
						*/ ?>
						<time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h2><?php _e('Es wurden keine Beiträge gefunden', 'wifi'); ?></h2>
		<?php endif; ?>
	</div>
	<?php /*
    * Zeige die Archiv Beschreibung (Textfeld "Beschreibung" bei Kategorien, Schlagwörtern)
    * https://developer.wordpress.org/reference/functions/the_archive_description/
    */
	the_archive_description('<p>', '</p>'); ?>


	<nav class="pagination">
		<?php /*
        * Pagination in der Beitrags-Übersicht
        * es werden X-Beiträge auf der Beitrags-Übersicht angezeigt, wenn mehr Beiträge vorhanden sind wird die Pagination (Vorherige/Nächste Seite und die Seiten-Nummern) angezeigt
        * wie viele Beiträge pro Seite angezeigt werden, kann im WordPress unter "Einstellungen -> lesen" im Punkt "Blogseiten zeigen maximal X Beiträge", eingestellt werden
        * https://developer.wordpress.org/reference/functions/paginate_links/
        */
		echo paginate_links(array(
			'prev_text' => '<span aria-label="' . __('Vorherige Seite', 'zimnohs') . '">Prev</span>',
			'next_text' => '<span aria-label="' . __('Nächste Seite', 'zimnohs') . '">Next</span>'
		)); ?>
	</nav>

	<?php
	$bottom_text = get_field('bottom_text', get_option('page_for_posts'));
	?>

	<p class="bottom-text"><?php echo $bottom_text; ?></p>

</main>

<?php get_footer(); ?>