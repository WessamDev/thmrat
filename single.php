<?php get_header(); ?>
<!-- Start Blogs Sections -->
<section class="single ">
  <div class="container">

    <div class="single-post-title">
      <a href="<?php the_permalink(); ?>" target="_blank" rel="bookmark" title="الذهاب الى  <?php the_title_attribute(); ?>">
        <?php single_post_title(); ?>
      </a>
    </div>

    <div class="single-container">
      <!-- Start Feat-Container Section -->
      <?php if (have_posts()) : while (have_posts()) :  the_post();
      
           get_template_part('template-part/content', 'single');

           endwhile; // endwhile loop
        else :
              echo "لا يوجد مقالات حاليا ...... "; // end else if statement
      
       endif; // End if statement
      ?>

      <?php get_template_part('template-part/single', 'paginations'); ?>

      <?php comments_template(); ?>
      
    </div> <!-- End OF Container  -->
</section> <!-- End Blogs Sections -->

<?php get_footer(); ?>