
<?php get_header(); ?>

<!-- Start Landing Section -->
<div class="landing">

  <div class="container">
    <main class="main-header">
      <h1 class="main-title"><?php bloginfo('name')?></h1>
      <p class="main-info"><?php bloginfo('description')?></p>
    </main>
  </div>
</div>
<!-- End Landing Section -->

<!-- Start Blogs Sections -->
<section class="home blogs">
    <div class="container">
      <!-- Start Heading Component Section -->
      <div class="head-component">
            <h2 class="title">أحدث المقالات </h2>
      </div> <!-- End Heading Component Section -->
      <!-- Start Feat-Container Section -->
      <div class="blog-container">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                 get_template_part('content');
             endwhile; // endwhile loop
            else : 
              echo "لا يوجد مقالات حاليا ...... "; // end else if statement?
          endif // End if statement?> 
        </div> <!-- End OF blog-Container -->

          <!-- Start Paginations Pagenumber -->
          <?php  get_template_part('template-part/home', 'paginations');?>
          
    </div> <!-- End OF Container  -->
</section>
<!-- End Blogs Sections -->

<?php get_footer(); ?>
