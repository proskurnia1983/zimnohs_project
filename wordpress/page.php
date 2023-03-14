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


  </div>
  </main>
<?php
get_footer();
?>