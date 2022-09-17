<div class="posts-box">
  <?php 
    if(is_admin() || is_user_logged_in()) :
      edit_post_link( 'تعديل   <i class="fas fa-pencil edit-icon"></i>' ); 
  
    endif;
  ?>
  <div class="post-title">
  
    <?php the_title(); ?>
    </a>
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

  <div class="post-content">
    <?php the_content(); ?>
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


<div class="single-sidebar">
  sidrbar
</div>

   

</div>