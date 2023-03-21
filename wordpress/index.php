<?php get_header()?>
<main>

 


  <article class="test-index">
    <?php 
    if(have_posts()){
        while (have_posts()){
            the_post();
            the_content();
            
        }
        
    }
    ?>



</article>

</main>


<?php get_footer(); ?>

