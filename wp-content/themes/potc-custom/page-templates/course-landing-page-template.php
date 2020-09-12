<?php
/**
* Template Name: Course Landing Template
* Template Post Type: page
* 
*/

get_header();
$bg_image = get_field('course_landing_hero_image');
$headline = get_field('course_landing_headline');
$course_headline = get_field('course_headline');
$cta = get_field('course_landing_cta');
$list= get_field('course_landing_list_id');
$course_class = get_field('course_class');
$course_name = get_field('course_name');
$course_content = get_field('course_landing_content');
$course_cta_bottom = get_field('course_cta_bottom');


$cta_text = "";
$list_id = '';
if(!$list){
  $list_id = '17065';
}else{
$list_id = $list;
}
if(!$cta){
$cta_text = "Join Us!";
}else{
$cta_text = $cta;
}

?>

<section class="course-landing__hero "
  style="background: linear-gradient(rgba(0,0,0, 0.75)

, rgba(0,0,0,0.75)

), url(<?php echo $bg_image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
  <div class="course-landing__hero__text container">
    <?php echo $headline ?>
    <div class="course-landing__hero__cta flex-col justify-center align-center">
      <a href="#" class="pill-button hero-button" id="<?php echo $course_class ?>-open"><?php echo $cta_text ?></a>
    </div>
  </div>

  </div>
  <!--MODAL-->
<div class="modal micromodal-slide course-box-modal" id="<?php echo $course_class ?>" aria-hidden="true">
     <div class="modal__overlay" tabindex="-1" data-micromodal-close>
         <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-courses-title">

             <header class="modal__header">
                 <div class="modal__close" aria-label="Close modal" data-micromodal-close>
                     <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
                 </div>
             </header>
             <div class="modal__content" id="course-<?php echo $course_class ?>">
                 <div class="modal__content__header">
                     <h2 class="join-message">Join The Waitlist for <?php echo strip_tags($course_name)?>!</h2>
                     <h2 class="success-message">You're In!</h2>
                     <p class="success-confirm">Please check your email to confirm your subscription.</p>
                 </div>
                 <!-- header -->
                <div class="modal__content__form">
                    <form id="form-<?php echo $course_class ?>-form">
                        <input type="text" placeholder="First Name" name="first_name" required />
                        <input type="email" placeholder="Email" name="email" required />
                        <!-- no botz please -->
                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                         name="license" " tabindex=" -1" value="" autocomplete="offload" /></div>
                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list"
                         tabindex="-1" value="<?php echo $list_id ?>" autocomplete="offload" />
                 </div>
                 <button type="submit" class="course-form-submit" id="button-<?php echo $course_class ?>-submit">Sign Me Up!</button>
                 </form>
         </div><!-- form-->

        </div><!-- modal-content-->

     </div>
 </div>
 </div>

 <!--MODAL-->

</section><!-- course-landing__hero -->

<section class="course-landing__content__headline main-content">
  <div class="courses-headline container">
    <?php echo $course_headline ?>
   
  </div><!-- courses-headline-->
  
  </section><!-- course-landing__content__headline -->
  <section class="course-landing__content__content main-content">
  <div class="course__content container ">
<?php echo $course_content ?>
</div><!-- course_content-->
  </section><!-- course-landing__content__content -->
<section class="course-landing__cta--bottom">
    <div class="course__cta--bottom container">
        <?php echo $course_cta_bottom ?>
    </div>
    <div class="course-landing__hero__cta flex-col justify-center align-center">
      <a href="#" class="pill-button hero-button" id="bottom-<?php echo $course_class ?>-open"><?php echo $cta_text ?></a>
    </div>

      <!--MODAL-->
<div class="modal micromodal-slide course-box-modal" id="bottom-<?php echo $course_class ?>" aria-hidden="true">
     <div class="modal__overlay" tabindex="-1" data-micromodal-close>
         <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-courses-title">

             <header class="modal__header">
                 <div class="modal__close" aria-label="Close modal" data-micromodal-close>
                     <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
                 </div>
             </header>
             <div class="modal__content" id="bottom-course-<?php echo $course_class ?>">
                 <div class="modal__content__header">
                     <h2 class="join-message">Join The Waitlist for <?php echo strip_tags($course_name)?>!</h2>
                     <h2 class="success-message">You're In!</h2>
                     <p class="success-confirm">Please check your email to confirm your subscription.</p>
                 </div>
                 <!-- header -->
                <div class="modal__content__form">
                    <form id="bottom-form-<?php echo $course_class ?>-form">
                        <input type="text" placeholder="First Name" name="first_name" required />
                        <input type="email" placeholder="Email" name="email" required />
                        <!-- no botz please -->
                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                         name="license" " tabindex=" -1" value="" autocomplete="offload" /></div>
                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list"
                         tabindex="-1" value="<?php echo $list_id ?>" autocomplete="offload" />
                 </div>
                 <button type="submit" class="course-form-submit" id="button-<?php echo $course_class ?>-submit">Sign Me Up!</button>
                 </form>
         </div><!-- form-->

        </div><!-- modal-content-->

     </div>
 </div>
 </div>

 <!--MODAL-->



</section><!-- course-landing__cta--bottom -->



<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>