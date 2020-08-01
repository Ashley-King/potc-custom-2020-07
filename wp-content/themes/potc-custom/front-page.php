<?php
$info = get_field('home_info');
$image = get_field('home_hero_bg_image');
get_header();

?>
<section class="home__hero" style="background: linear-gradient(rgba(39, 118, 160, 0.7), rgba(39, 118, 160, 0.7)), url(<?php echo $image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    
    <div class="home__hero__text container">
        <h1>It's time to focus on <span>your</span> potential for a change.</h1>
        <p>Join our list and be the first to know about new courses and course discounts. Get the best ideas in pediatric therapy, business and life. Be the boss of your career <span class="white-space">(not the other way around)!</span></p>
        <div class="home__hero__cta "><a href="#" class="pill-button" id="modal-home-open">Join Us!</a></div>
    </div>
    
</section>
<section class="home__info">
    <div class="home__info__boxes container ">
    <?php foreach ($info as $box): ?>
        <div class="home__info__boxes__box">
            <div class="info-box__image">
                <img src="<?php echo $box['icon']['url'] ?>" alt="icon">
            </div>
            <div class="info-box__text">
                <?php echo $box['title'] ?>
                <?php echo $box['text'] ?>
            </div>
        </div>
    <?php endforeach?>

    </div>
</section>
<?php get_template_part('/optins/side-image-optin') ?>

<!--MODAL-->
<div class="modal micromodal-slide" id="modal-home" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-home-title">
        <header class="modal__header">
          <h2 class="modal__title" id="modal-1-title">
            Micromodal
          </h2>
          <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </header>
        <main class="modal__content" id="modal-home-content">
          <p>
            Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
          </p>
        </main>
        <footer class="modal__footer">
          <button class="modal__btn modal__btn-primary">Continue</button>
          <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
        </footer>
      </div>
    </div>
  </div>
  <?php
get_footer();