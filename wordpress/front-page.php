<?php get_header() ?>

<main>
    <div class="inner-content">
        <?php
        $image = get_field('profile_photo');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        ?>
        <div class="profile home">
            <div class="photo-holder radius">
                <?php
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
            </div>
            <span class="photo-name"><?php echo get_field('profile_name'); ?></span>
            <span><?php echo get_field('profile_about'); ?></span>
        </div>

        <?php
        $socialLinks = get_field('social_link');
        if (!empty($socialLinks))
            get_template_part('template-parts/social-links', null, $socialLinks);
        ?>

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>

        <?php $bottom_text = get_field('bottom_text', get_the_ID()); ?>

        <div>
            <p class="bottom-text"><?php echo $bottom_text; ?></p>
        </div>

</main>

<?php get_footer(); ?>