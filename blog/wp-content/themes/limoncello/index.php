<?php get_header(); ?>

    <div class="row">
        <div class="index col-sm-8" id="main-content">
           <div class="titulo_blog blanco sancreek-font size36 text-center">
                    
                </div>
              
           <?php 
                $numpost=0;
                if ( have_posts() ) {
                        while ( have_posts() ) {
                                the_post(); 
                                $numpost++;
                               
                                echo '<div class="item shadow post" >';
                                    get_template_part( 'content', get_post_format() );
                                echo '</div>';
                                echo'<hr>';
                        } // end while
                } // end if

            ?>
        </div>
            <div class="col-sm-3"  id="sidebar-outer" >
           
           <?php get_sidebar(); ?>


        </div>
    </div>
    
    
<?php get_footer(); ?>