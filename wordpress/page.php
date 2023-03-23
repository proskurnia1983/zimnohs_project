<?php get_header()?>

<main>

 
  <?php 

  
  if(have_posts()){
      while (have_posts()){
          the_post();
          the_content();
          //get_template_part('template-parts/content', 'archive');
      }
  }
 
   if (is_page( 'Contact' ) ):

   echo do_shortcode('[contact-form-7 id="212" title="Contact form"]');

  endif;
?>
 
  
</main>


<?php get_footer(); ?>