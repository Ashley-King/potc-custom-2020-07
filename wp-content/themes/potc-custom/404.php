<?php
get_header();
$list = get_field('blog_list');
if(!$list){
    $list = '';
}
?>

<section class="error-page">
<div class="error-page__content">
<h1 class="error-page__title">Oops...there's nothing here.</h1>
    <p class="error-page__link">Head back <a href="/">home</a>.</p>
    <a href="#" class="pill-button" id="modal-error-open">Join Us!</a>
</div>
  <!--MODAL-->
<div class="modal micromodal-slide" id="modal-error" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-home-title">
          
        <header class="modal__header">
          <div class="modal__close" aria-label="Close modal" data-micromodal-close>
              <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
          </div>
        </header>
        <main class="modal__content" id="modal-error-content">
            <div class="modal__content__header">
            <h2>Be the boss of <span class="white-space">Your therapy career</span></h2>
          <h3>(not the other way around)</h3>
          <p>Our emails have more awesome ideas than you can shake a stick at.</p>
         
          
            </div>
            <div class="modal__content__form">
              <form id="modal-error-form">
              <input type="text" placeholder="First Name" name="first_name" required />
<input type="email" placeholder="Email" name="email" required />
<!-- no botz please -->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="license" tabindex="-1" value="" autocomplete="offload" /></div>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list" tabindex="-1" value="<?php echo $list ?>" autocomplete="offload" /></div>
                  <button type="submit" class="form-submit" id="modal-error-submit">Sign Me Up!</button>
              </form>
          </div>
</section>



<?php get_footer() ?>