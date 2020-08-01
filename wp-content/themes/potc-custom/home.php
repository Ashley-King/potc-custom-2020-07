<?php

get_header();

?>
<section class="blog__hero" style="background: linear-gradient(rgba(69, 159, 221, 0.8)

, rgba(69, 159, 221, 0.8)

), url('/wp-content/themes/potc-custom/images/girl-sidewalk-chalk.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    
    <div class="blog__hero__text container">
    <div class="blog__hero__text__wrapper">
    <h1>Our Latest Posts</h1>
       
        <div class="blog__hero__cta"><a href="#" class="pill-button">Join Us</a></div>
    </div>
        
    </div>
    
</section>
<section class="blog__listing ">
    <div class="blog__listing__wrapper container">
        <?php
    if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    $categories = get_the_category();
    $category = $categories[0] -> cat_name;
    $cat_id = $categories[0] -> cat_ID;
    $cat_link = get_category_link($cat_id);
    
         ?>
         
         <div class="blog__post-box">
             <div class="blog__post__image">
                 <a href="<?php echo esc_url( get_permalink() ); ?>">
                 <?php the_post_thumbnail(); ?>
                 </a>  
                 
             </div> <!--image-->
             <div class="blog__post__title">
             <p class="blog__post__category category-<?php  echo strtolower($category) ?>"><span><?php  echo strtolower($category)  ?></span>
                 </p>  
                 <a href="<?php echo esc_url( get_permalink() ); ?>">
             <?php the_title(); ?>
             </a>
             </div> <!--title-->
             
         </div> <!--box-->
         <?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
    </div>

</section>


<?php

get_footer();
