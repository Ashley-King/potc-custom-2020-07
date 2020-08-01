<?php
/**
* Template Name: Top Image Template
* Template Post Type: page
* 
*/

get_header();
$bg_image = get_field('top_image_hero_image');
$headline = get_field('top_image_headline');
$content = get_field('top_image_content');
?>

<section class="top-image__hero " style="background: linear-gradient(rgba(69, 159, 221, 0.8)

, rgba(69, 159, 221, 0.8)

), url(<?php echo $bg_image['url'] ?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <?php echo $headline ?>

</section>
<section class="top-image__content main-content container">
    <?php echo $content ?>
</section>
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>