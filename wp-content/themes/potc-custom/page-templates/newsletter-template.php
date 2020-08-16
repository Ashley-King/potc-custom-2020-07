<?php
/**
* Template Name: Newsletter Template
* Template Post Type: newsletter
* 
*/

get_header();
 $headline = get_field('title');
 $content = get_field('content');
?>

<section class="newsletter__content main-content container">
    <div class="newsletter__headline">
    <?php echo $headline ?>
    
    </div>
    <div class="newsletter__post">
    <?php echo $content ?>
    </div>

    
    
</section>
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>