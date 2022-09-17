<div class="posts-box">
  <div class="post-img">
    <?php echo the_post_thumbnail(); ?>
  </div>
  <ul class="post-info">
    <i class="fas fa-user post-info-icon"></i>
    <li> <?php the_author_posts_link(); ?></li>
    <i class="fas fa-calendar-alt post-info-icon"></i>
    <li><?php echo get_the_date(); ?></li>

    <?php echo ' <li>'; // li for comments layout
    comments_popup_link(
      '<i class="fas fa-comments post-info-icon"></i> 0 تعليق',
      '<i class="fas fa-comment post-info-icon"></i> 1 تعليق',
      '<i class="fas fa-comments post-info-icon"></i> % تعليق',
      '',
      '<i class="fas fa-comment-slash"></i> مقفولة'
    );
    echo ' </li>';
    ?>
  </ul>

  <hr class="line-break" />

  <h3 class="post-title">
    <a href="<?php the_permalink(); ?>" target="_blank" rel="bookmark" title="الذهاب الى <?php the_title_attribute(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
  <div class="post-content">
    <?php the_excerpt(); ?>
    <a href="<?php echo get_the_permalink(); ?>">إقرأ المقالة </a>
  </div>

  <hr class="line-break" />

  <div class="post-category">
    <i class="fas fa-layer-group"></i>
    <?php the_category(' || '); ?>
  </div>
  <div class="post-tag">

    <?php the_tags(' <i class="fas fa-tags"> ', ' , ', '</i>'); ?>
  </div>

  
</div> <!-- End  -->

