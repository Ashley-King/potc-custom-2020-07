<?php
/**
* Template Name: No Image Template
* Template Post Type: page
* 
*/

get_header();


$content = get_field('no_image_content');
?>

<section class="no-image__content main-content container">
    <?php echo $content ?>
</section>
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>