<?php global $socialLinks; ?>
<div class="social-links column">
    <a href="<?php echo $socialLinks['linkedin']['url']; ?>" target="_blank">
        <span class="<?php echo $socialLinks['linkedin']['class']; ?>" aria-hidden="false"></span>
        <span class="screen-reader-text"><?php _e('linkedin', 'wifi'); ?></span>
    </a>

    <a href="<?php echo $socialLinks['instagram']['url'] ?>" target="_blank">
        <span class="<?php echo $socialLinks['instagram']['class']; ?>" aria-hidden="false"></span>
        <span class="screen-reader-text"><?php _e('instagram', 'wifi'); ?></span>
    </a>

    <a href="<?php echo $socialLinks['facebook']['url'] ?>" target="_blank">
        <span class="<?php echo $socialLinks['facebook']['class']; ?>" aria-hidden="false"></span>
        <span class="screen-reader-text"><?php _e('facebook', 'wifi'); ?></span>
    </a>
</div>