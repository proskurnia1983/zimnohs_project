<?php /* Template Name: About */ ?>
<?php get_header()?>

<main>
<?php if( have_rows('gallery') ): ?>

<div class="photos">
<?php while( have_rows('gallery') ): the_row(); 

 
  $image = get_sub_field('image', get_option('page_for_posts'));
 
  ?>
    <div class="photo-holder">
    <img src="<?php echo $image; ?>" alt=""/>
    </div>
    
<?php endwhile; ?>
</div>
<?php endif; ?>
  
  <?php 
 
  if(have_posts()){
      while (have_posts()){
          the_post();
          the_content();
          //get_template_part('template-parts/content', 'archive');
      }
  }
  ?>
  
</main>


<?php get_footer(); ?>

