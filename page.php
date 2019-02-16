<?php
  get_header();
  while(have_posts()){
    the_post();
    //echo wp_get_post_parent_id(get_the_ID());
    echo get_the_ID();
    ?>
    <div class="<?php the_title();?>">
      <div class=<?php echo the_title().'__wrapper';?>>
        <div class="section-header">
          <h1>
            <?php the_title();?>
          </h1>
          <p><?php the_content()?></p>
        </div>
      </div>
    </div>
    <?php
  }

  get_footer();
?>
