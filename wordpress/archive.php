<?php
get_header()
?>
<?php 


$image = get_field('profile_photo',  get_the_ID());

$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<div class="profile index">
    <div class="photo-holder radius">
        <?php
  
            echo wp_get_attachment_image( $image, $size );
        
        ?> 
    </div>
    <span class="photo-name"><?php echo get_field('profile_name'); ?></span>
    <span><?php echo get_field('profile_about'); ?></span>
</div>


<div class="inner-content">

<?php 
$social = get_field('social_link');

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
<article class="test-archive">
    <?php 

    if(have_posts()){
        while (have_posts()){
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
        
    }
    ?>
</article>
