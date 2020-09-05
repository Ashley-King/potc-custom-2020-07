<?php
/**
* Template Name: Single Post Template
* Template Post Type: post
* 
*/

get_header();
 the_post();
$headline = get_field('single_post_headline');
$content = get_field('single_post_content');
?>

<section class="single-post__content main-content container">
    <div class="single-post__headline">
    <?php echo $headline ?>
    <p class="post-date">Last updated on <?php echo get_the_date('F d, Y');?> - <a href="/tbl">Try our FREE newsletter</a> 👀</p>
    </div>
    <div class="single-post__post">
    <?php echo $content ?>
    </div>
    
</section>
<?php get_template_part('/optins/side-image-optin') ?>

<?php get_footer() ?>