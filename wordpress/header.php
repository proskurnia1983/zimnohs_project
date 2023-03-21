<!DOCTYPE html>
<html lang="de-AT">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head()?>
   
  </head>
  <body <?php body_class(); ?>> 
    
      <header>
      
        <button class="toggle-menu">
        <span>
          MENU
        </span>
        <i class="icon-cross"></i>

        </button>

<?php 
wp_nav_menu(
  array(
    'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'items_wrap' => '<ul class="menu">%3$s</ul>',
  )
  );

?>
        
  </header>