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
  style="background: linear-gradient(rgba(0,0,0, 0.7)

, rgba(0,0,0,0.65)

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
    <h2>On-Demand Training for <span class="white-space">Pediatric OT's</span></h2>
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
      
      
      <div class="course-cta flex-col justify-start align-start">
        <a href="<?php echo $course['course_link'] ?>" class="course-cta-button"><?php echo $course['course_link_text']?></a>

      </div><!-- course-cta -->



          </div><!-- course-box -->
          <?php endforeach ?>


        </div><!-- course-listing__content -->


</section><!-- course-listing__content -->
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>