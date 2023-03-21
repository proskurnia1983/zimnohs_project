<?php get_header()?>
<main>
<?php 
$image = get_field('profile_photo',  get_option('page_for_posts'));
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<div class="profile">
    <div class="photo-holder radius">
        <?php
  
            echo wp_get_attachment_image( $image, $size );
        
        ?> 
    </div>
    <span class="photo-name"><?php echo get_field('profile_name', get_option('page_for_posts') ); ?></span>
    <span><?php echo get_field('profile_about', get_option('page_for_posts')); ?></span>
</div>
<?php 
$social = get_field('social_link', get_option('page_for_posts'));

if (!empty($social)) : ?>

<div class="social-links column">
  

<a href="<?php echo $social['linkedin']['url']; ?>" target="_blank">
<span class="<?php echo $social['linkedin']['class']; ?>" aria-hidden="false"></span>
<span class="screen-reader-text"><?php  _e('linkedin', 'wifi'); ?><?php _e('linkedin', 'wifi'); ?></span>
</a>

<a href="<?php echo $social['instagram']['url']?>" target="_blank">
<span class="<?php echo $social['instagram']['class']; ?>" aria-hidden="false"></span>
<span class="screen-reader-text"><?php  _e('instagram', 'wifi'); ?><?php _e('instagram', 'wifi'); ?></span>
 </a>

 <a href="<?php echo $social['facebook']['url']?>" target="_blank">
<span class="<?php echo $social['facebook']['class']; ?>" aria-hidden="false"></span>
<span class="screen-reader-text"><?php  _e('facebook', 'wifi'); ?><?php _e('facebook', 'wifi'); ?></span>
 </a>
<?php 
/*
foreach ($social as $sociale) : ?>
            <a href="<?php echo $sociale['link']?>" target="_blank">
              <span class="<?php echo $sociale['icon']; ?>" aria-hidden="false"></span>
              <span class="screen-reader-text"><?php echo $sociale['title']?></span>
            </a>
            <a href="<?php echo $sociale['link']?>" target="_blank">
              <span class="<?php echo $sociale['icon']; ?>" aria-hidden="false"></span>
              <span class="screen-reader-text"><?php echo $sociale['title']?></span>
            </a>
            <a href="<?php echo $sociale['link']?>" target="_blank">
              <span class="<?php echo $sociale['icon']; ?>" aria-hidden="false"></span>
              <span class="screen-reader-text"><?php echo $sociale['title']?></span>
            </a>
            
<?php endforeach; */ ?>

 </div>
 <?php endif; ?>


 <?php 
$bottom_text = get_field('bottom_text', get_option('page_for_posts'));
?>


 <p class="bottom-text"><?php echo $bottom_text; ?></p>

 
  <div class="posts-list">
    <?php 
    if(have_posts()){
        while (have_posts()){
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>
    </div>
</main>

<?php get_footer(); ?>