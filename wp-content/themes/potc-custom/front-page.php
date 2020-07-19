<?php
$info = get_field('home_info');

get_header();

?>
<section class="home__hero">
    
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
<?php

get_footer();