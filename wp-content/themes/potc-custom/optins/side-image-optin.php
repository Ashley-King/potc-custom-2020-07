<?php 
    $text = get_field('side_image_optin_text');
    $image = get_field('side_image_optin_image');
    $list = get_field('side_image_list');
?>
<section class="in-post__section">
    <div class="in-post__section__wrapper container">
        <div class="in-post__image" >
            <div class="image__wrapper">
            <img src="<?php echo $image['url'] ?>" alt="side-image mockup">
            </div>
            
        </div>
        <div class="in-post__form">
            <div class="in-post__form__text">
                <?php echo $text ?>
            </div>
        <form method="post"  id="sideImage">
<input type="text" placeholder="First Name" name="first_name" required />
<input type="email" placeholder="Email" name="email" required />
<!-- no botz please -->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="a_password" tabindex="-1" value="" autocomplete="off" /></div>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list" tabindex="-1" value="<?php echo $list ?>" autocomplete="off" /></div>

<p><button class="form-submit" type="submit">Sign Me Up!</button></p>
</form>			
        </div>
    </div>
</section>