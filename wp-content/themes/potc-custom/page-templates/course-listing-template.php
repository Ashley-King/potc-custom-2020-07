<?php
/**
* Template Name: Course Listing Template
* Template Post Type: page
* 
*/

get_header();
$bg_image = get_field('course_listing_hero_image');
$headline = get_field('course_listing_headline');
$cta = get_field('course_listing_cta');
$list= get_field('course_listing_list_id');
$courses = get_field('courses');

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

<section class="course-listing__hero "
  style="background: linear-gradient(rgba(0,0,0, 0.75)

, rgba(0,0,0,0.75)

), url(<?php echo $bg_image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
  <div class="course-listing__hero__text container">
    <?php echo $headline ?>
    <div class="course-listing__hero__cta flex-col justify-center align-center">
      <a href="#" class="pill-button hero-button" id="modal-courses-open"><?php echo $cta_text ?></a></div>
  </div>

  </div>
  <!--MODAL-->
  <div class="modal micromodal-slide" id="modal-courses" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-courses-title">

        <header class="modal__header">
          <div class="modal__close" aria-label="Close modal" data-micromodal-close>
            <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
          </div>
        </header>

        <main class="modal__content" id="modal-courses-content">
          <div class="modal__content__header">
            <h2>Be the boss of <span class="white-space">Your therapy career</span></h2>
            <h3>(not the other way around)</h3>
            <p>Our emails have more awesome ideas than you can shake a stick at.</p>


          </div>
          <div class="modal__content__form">
            <form id="modal-courses-form">
              <input type="text" placeholder="First Name" name="first_name" required />
              <input type="email" placeholder="Email" name="email" required />
              <!-- no botz please -->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                  name="license" " tabindex=" -1" value="" autocomplete="offload" /></div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list"
                  tabindex="-1" value="<?php echo $list_id ?>" autocomplete="offload" /></div>
              <button type="submit" class="form-submit" id="modal-courses-submit">Sign Me Up!</button>
            </form>
          </div>
          </main>
       
      </div>
    </div>
  </div>
          <!--MODAL-->

</section><!-- course-listing__hero -->
<section class="course-listing__content main-content container">
  <div class="courses-headline">
    <h2>On Demand Training for <span class="white-space">Pediatric OT's</span></h2>
    <div class="divider"></div>
  </div><!-- courses-headline-->
  <div class="course-listing__courses flex-row justify-between align-start">
    <?php foreach($courses as $course): ?>

    <div class="course-box flex-col">
      <div class="course-name">
        <?php echo $course['course_name'] ?>
      </div><!-- ccourse-name -->
      <div class="course-image" style="background-image:url('<?php echo $course['course_image']['url'] ?>');">
        

      </div><!-- ccourse-image -->
      <div class="course-description">
        <?php echo $course['course_description'] ?>
      </div><!-- ccourse-description -->
      <div class="course-learn-more flex-row justify-start align-center">
        <div class="learn-more__image">
        <svg xmlns="http://www.w3.org/2000/svg" width="24.801" height="14.273" viewBox="0 0 24.801 14.273">
  <g id="down-arrow" transform="translate(0 116.571) rotate(-90)">
    <g id="Group_1" data-name="Group 1" transform="translate(102.298 0)">
      <path id="Path_1" data-name="Path 1" d="M104.758,12.407,116.272,1.629a.912.912,0,0,0,0-1.349,1.07,1.07,0,0,0-1.442,0L102.6,11.732a.912.912,0,0,0,0,1.349l12.235,11.452a1.069,1.069,0,0,0,1.442-.023.911.911,0,0,0,0-1.326Z" transform="translate(-102.298 0)" fill="#ff8247"/>
    </g>
  </g>
</svg>

        </div><!-- learn-more__image -->
        
        <p class="learn-more__text">More Info</p>
      </div><!-- course-learn-more -->
        
      <div class="course-content">
        <?php echo $course['course_content'] ?>
      </div><!-- ccourse-content -->
      <div class="course-cta flex-col justify-start align-start">
        <a href="#" class="course-cta-button"id="<?php echo $course['course_class'] ?>-open"><?php echo $course['course_cta']?></a>

      </div><!-- course-cta -->
<!--MODAL-->
<div class="modal micromodal-slide course-box-modal" id="<?php echo $course['course_class'] ?>" aria-hidden="true">
     <div class="modal__overlay" tabindex="-1" data-micromodal-close>
         <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-courses-title">

             <header class="modal__header">
                 <div class="modal__close" aria-label="Close modal" data-micromodal-close>
                     <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
                 </div>
             </header>
             <div class="modal__content" id="<?php echo $course['course_class'] ?>">
                 <div class="modal__content__header">
                     <h2>Join The Waitlist for <?php echo strip_tags($course['course_name'])?>!</h2>
                     <h2 class="success-message">You're In!</h2>
                 </div>
                 <!-- header -->
                <div class="modal__content__form">
                    <form id="<?php echo $course['course_class'] ?>-form">
                        <input type="text" placeholder="First Name" name="first_name" required />
                        <input type="email" placeholder="Email" name="email" required />
                        <!-- no botz please -->
                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                         name="license" " tabindex=" -1" value="" autocomplete="offload" /></div>
                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list"
                         tabindex="-1" value="<?php echo $course['course_list'] ?>" autocomplete="offload" />
                 </div>
                 <button type="submit" class="form-submit" id="<?php echo $course['course_class'] ?>-submit">Sign Me Up!</button>
                 </form>
         </div><!-- form-->

        </div><!-- modal-content-->

     </div>
 </div>
 </div>

 <!--MODAL-->
     


          </div><!-- course-box -->
          <?php endforeach ?>


        </div><!-- course-listing__content -->


</section><!-- course-listing__content -->
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>