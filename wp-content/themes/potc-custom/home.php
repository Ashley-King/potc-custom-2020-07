<?php

get_header();
$list = get_field('blog_list');
if(!$list){
    $list = '';
}

?>
<section class="blog__hero" style="background: linear-gradient(rgba(69, 159, 221, 0.7)

, rgba(69, 159, 221, 0.6)

), url('/wp-content/themes/potc-custom/images/girl-sidewalk-chalk.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    
    <div class="blog__hero__text container">
    <div class="blog__hero__text__wrapper">
    <h1>Our Latest Posts</h1>
    
        <div class="blog__hero__cta"><a href="#" class="pill-button" id="modal-blog-open">Join Us!</a></div>
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

<!--MODAL-->
<div class="modal micromodal-slide" id="modal-blog" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-home-title">
          
        <header class="modal__header">
          <div class="modal__close" aria-label="Close modal" data-micromodal-close>
              <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
          </div>
        </header>
        <main class="modal__content" id="modal-blog-content">
            <div class="modal__content__header">
            <h2>Be the boss of <span class="white-space">Your therapy career</span></h2>
          <h3>(not the other way around)</h3>
          <p>Our emails have more awesome ideas than you can shake a stick at.</p>
         
          
            </div>
            <div class="modal__content__form">
              <form id="modal-blog-form">
              <input type="text" placeholder="First Name" name="first_name" required />
<input type="email" placeholder="Email" name="email" required />
<!-- no botz please -->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="license" tabindex="-1" value="" autocomplete="false" /></div>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list" tabindex="-1" value="<?php echo $list ?>" autocomplete="false" /></div>
                  <button type="submit" class="form-submit" id="modal-blog-submit">Sign Me Up!</button>
              </form>
          </div>
        </main>
       
      </div>
    </div>
  </div>

</section>


<?php

get_footer();
