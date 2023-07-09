<footer class="footer">
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];

if ($logo_url) {
    echo '<div class="footer-logo"><img src="' . esc_url($logo_url) . '" alt="Ruslan Zimnohs Logo"></div>';
}
?>

<?php
	wp_nav_menu(
		array(
			'menu' => 'footer',
			'container' => '',
			'theme_location' => 'footer',
			'items_wrap' => '<ul class="footer-menu">%3$s</ul>',
		)
	);
	?>
	<p class="copyright">All rights reserved RZ</p>
</footer>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
	window.addEventListener("DOMContentLoaded", () => {
		$(".toggle-menu").click(function() {
			$(this).toggleClass("open");
			$(".menu").toggleClass("open");
			$("body").toggleClass("menu-opened");
		});

		$(".menu-item-has-children").append('<button type="button" class="sub-menu-opener"><i class="icon icon-arrow-right"></button>');

		$(".sub-menu-opener").click(function() {
			$(this).toggleClass("open");
			$(this).parent().find(".sub-menu").toggleClass("show");
		});

	});

</script>
</body>

</html>