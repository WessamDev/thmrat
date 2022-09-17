<div class = "posts-paginations">
                
                <?php if(get_previous_post_link()) {
     
                  previous_post_link('%link', '<i class="fa fa-chevron-right fa-fw"></i> %title',true,'','category');
     
                } else {
     
                   echo '<span class = "post-prev-alert"> لا يوجد مقالات جديدة</span> ';
     
                }
                
     
                if(get_next_post_link()) {
     
                 next_post_link('%link', '%title <i class="fa fa-chevron-left fa-fw"></i>',true,'','category');
                
                 }else {
      
                   echo '<span class = "post-next-alert">لا يوجد مقالات سابقة </span>';
      
                 }  ?>
 </div> 

