<?php
$info = get_field('home_info');
$image = get_field('home_hero_bg_image');
get_header();

?>
<section class="home__hero" style="background: linear-gradient(rgba(69, 159, 221, 0.8)

, rgba(69, 159, 221, 0.8)

), url(<?php echo $image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    
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
          <div class="modal__close" aria-label="Close modal" data-micromodal-close></div>
        </header>
        <main class="modal__content" id="modal-home-content">
            <div class="modal__content__header">
            <h2>Be the boss of <span class="white-space">Your career</span></h2>
          <h3>(not the other way around)</h3>
          <p>Our emails have more awesome ideas than you shake a stick at.</p>
          
          
            </div>
          
        </main>
        
      </div>
    </div>
  </div>
  <?php
get_footer();