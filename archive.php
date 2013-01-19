<?php get_header(); ?>


<div id="main">
    <div class="article_list">
    <?php
    //load in dynamic post content
    //create a 'while' loop  to give instructions about what to do if it finds posts in the database

        while(have_posts()):
        the_post();
        ?>
        <article>
   <div class="article_title">

     


     <h2>
        <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a>
    </h2>



 </div> <!-- article title -->

    <div class="article_details">
       <p class="date">
        <?php 
        the_date();
        ?>
        </p> <!--date-->
        <p class="category">
            <?php 
            the_tags();
             ?>
        </p>
    </div><!--article details-->
        <div class="content">
        
            <!-- display article content -->
            <?php the_excerpt(); ?>
     <p>
        <a href="<?php the_permalink(); ?>">
       Read More... 
        </a>
    </p>


         </div>

      
    

        <!-- display each post title -->
    <?php
        endwhile;
    ?>

    <?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?> 
    <!-- adding next/prev options -->

</article>
    </div> <!--article list-->
    
    <?php get_sidebar(); ?>
</div> <!-- #main -->

<?php get_footer(); ?>