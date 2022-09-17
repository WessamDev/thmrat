<div class="posts-paginations">

  <?php if (get_previous_posts_link()) {

    previous_posts_link('<i class="fa fa-chevron-right fa-fw"></i> سابق');
  } else {

    echo '<span class ="post-prev"> لا يوجد مقالات جديدة</span> ';
  }


  if (get_next_posts_link()) {

    next_posts_link(' تالى <i class="fa fa-chevron-left fa-fw"></i> ');
  } else {

    echo '<span class ="post-next">لا يوجد مقالات سابقة </span>';
  }  ?>

</div>