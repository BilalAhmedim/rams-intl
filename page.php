<?php
  get_header();

  while(have_posts()){
    the_post()
    ?>
    <h1>This is page not the post</h1>
    <h1><?php the_title() ?></h1>
    <p><?php the_content()?></p>
    <?php
  }

  get_footer();
?>