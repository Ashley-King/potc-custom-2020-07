<?php
/**
* Template Name: Course Listing Template
* Template Post Type: page
* 
*/

get_header();
$bg_image = get_field('top_image_hero_image');
$headline = get_field('top_image_headline');
$content = get_field('top_image_content');
$list="";
if(!$list){
    $list = '';
}
?>

<section class="top-image__hero " style="background: linear-gradient(rgba(0,0,0, 0.75)

, rgba(0,0,0,0.75)

), url(<?php echo $bg_image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="top-image__hero__text container">
    <?php echo $headline ?>
    <div class="top-image__hero__cta flex-col justify-center align-center">
    <a href="#" class="pill-button hero-button" id="modal-page-open">Join Us!</a></div>
    </div>
   
    </div>
    
</section>
<section class="top-image__content main-content container">
  <div class="max-width">
  <?php echo $content ?>
  </div>
    
    <div class="modal micromodal-slide" id="modal-page" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-page-title">
          
        <header class="modal__header">
          <div class="modal__close" aria-label="Close modal" data-micromodal-close>
              <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
          </div>
        </header>
        <main class="modal__content" id="modal-page-content">
            <div class="modal__content__header">
            <h2>Be the boss of <span class="white-space">Your therapy career</span></h2>
          <h3>(not the other way around)</h3>
          <p>Our emails have more awesome ideas than you can shake a stick at.</p>
         
          
            </div>
            <div class="modal__content__form">
              <form id="modal-page-form">
              <input type="text" placeholder="First Name" name="first_name" required />
<input type="email" placeholder="Email" name="email" required/>
<!-- no botz please -->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="license"
" tabindex="-1" value="" autocomplete="offload" /></div>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list" tabindex="-1" value="<?php echo $list ?>" autocomplete="offload" /></div>
                  <button type="submit" class="form-submit" id="modal-page-submit">Sign Me Up!</button>
              </form>
          </div>
          <!--MODAL-->
</section>
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>