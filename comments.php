
<!-- Start Comments Page -->
<div class="comment-page">

    <?php
        if( comments_open() ) { ?>

            <!-- title comments number -->
            <h3 class="comments-number-title"> عدد التعليقات : 
                <?php  comments_number('0 تعليقات', '1 تعليق', '% تعليق' ) ; ?> 
            </h3> 

               

            
        <?php 
            $comments_args = array(

                'walker'            => null,
                'max_depth'         => 3,
                'style'             => 'ul',
                'callback'          => null,
                'end-callback'      => null,
                'type'              => 'comment',
                'page'              => '',
                'per_page'          => '',
                'avatar_size'       => 64,
                'reverse_top_level' => true,
                'reverse_children'  => '',
                'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                'short_ping'        => false,   // @since 3.6
                'echo'              => true     // boolean, default is true

            );

           wp_list_comments($comments_args);

        } else {

            echo 'comment is close';
        }

    ?>    
</div>






