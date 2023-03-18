<?php get_header()?>
<main>
<div class="inner-content">
    <?php 
    if(have_posts()){
        while (have_posts()){
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
        
    }
   

?>
<?php 
$image = get_field('profile_photo');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<div class="profile">
    <div class="photo-holder radius">
        <?php
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        } 
        ?> 
    </div>
    <span class="photo-name"><?php echo get_field('profile_name'); ?></span>
    <span><?php echo get_field('profile_about'); ?></span>
</div>

<div class="social-links column">
    <?php
acf_add_options_page(array(
        'page_title' => 'Social Link',
        'menu_title' => 'Social Link',
        'menu_slug' => 'social_link',
        'capability' => 'edit_posts',
        'position' => 50,
        'icon_url' => 'dashicons-admin-links', // https://developer.wordpress.org/resource/dashicons/
        'update_button' => __( 'Änderungen speichern', 'wifi' ),
        'updated_message' => __( 'Änderungen wurden gespeichert', 'wifi' )
    ));
         ?>   
            <a href="https://www.linkedin.com/" target="_blank">
              <span class="icon-linkedin2" aria-hidden="true"></span>
              <span class="screen-reader-text">Follow on LinkedIn</span>
            </a>
            <a href="https://www.instagram.com/" target="_blank">
              <span class="icon-instagram" aria-hidden="true"></span>
              <span class="screen-reader-text">Follow on Instagram</span>
            </a>
            <a href="https://www.facebook.com/" target="_blank">
              <span class="icon-facebook2" aria-hidden="true"></span>
              <span class="screen-reader-text">Follow on Facebook</span>
            </a>
            
            
 </div>

  </main>
<?php
get_footer();
?>