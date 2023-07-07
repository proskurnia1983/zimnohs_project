
<h1><?php the_title() ?></h1>
<div class="pre-content">
    <div class="post-author-avatar"><img src="/zimnohs/wp-content/themes/zimnohs/assets/images/rus.jpeg" alt="Post Author"></div>
    <span>Ruslan Zimnohs</span>
    <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time>
</div>
<?php
    the_content();
?>
