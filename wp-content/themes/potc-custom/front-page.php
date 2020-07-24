<?php
$info = get_field('home_info');
$image = get_field('home_hero_bg_image');
get_header();

?>
<section class="home__hero" style="background: linear-gradient(rgba(39, 118, 160, 0.7), rgba(39, 118, 160, 0.7)), url(<?php echo $image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    
    <div class="home__hero__text container">
        <h1>It's time to focus on <span>your</span> potential for a change.</h1>
        <p>Join our list and be the first to know about new courses and course discounts. Get the best ideas in pediatric therapy, business and life. Be the boss of your career <span class="white-space">(not the other way around)!</span></p>
        <div class="home__hero__cta"><a href="#">Join Us</a></div>
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
<?php

get_footer();