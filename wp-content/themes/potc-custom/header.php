<?php
/**
 * Header file for the POTC custom theme.
 *
 * 
 */
    $body_class = get_field('body_class');
    $nav_class = get_field('nav_class');
    $body_classes="";
    $nav_classes="";
    if($body_class){
        $body_classes = $body_class;
    }
    if($nav_class){
        $nav_classes = $nav_class;
    }
    if(is_home() || is_404() ){
        $nav_classes = 'nav--transparent';
    }
    if ( ! defined( 'ABSPATH' ) ) 
     exit;
?>
<!DOCTYPE html>

<html >

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class($body_classes); ?>>

		<?php
		wp_body_open();
		?>
        
		<header id="site-header" class="site-header" >
        <div class="nav__mobile__background">
        <div class="nav__wrapper--mobile container">
           
           <?php $defaults = array(
       'theme_location'  => 'primary',
       'menu'            => 'primary-menu',
       'container'       => 'nav',
       'container_class' => 'main-menu-container--mobile',
       'container_id'    => '',
       'menu_class'      => '',
       'menu_id'         => '',
       'echo'            => true,
       'fallback_cb'     => 'wp_page_menu',
       'items_wrap'      => '<ul id="main-menu-items" class=" main-menu-items">%3$s</ul>',
       'depth'           => 0,
   );
   ?>
    
   <?php wp_nav_menu( $defaults ); ?>
           
   
   
               </div>
        </div>
            <div class="nav__wrapper--main container <?php echo $nav_classes?>">
            <div class="nav__logo">
                <a href="/">
                <?php if ($nav_classes =="nav--transparent"):?>
                    <img src="/wp-content/themes/potc-custom/images/logo-white.png" alt="potc logo">
                <?php else: ?>
                <img src="/wp-content/themes/potc-custom/images/logo-orange.png" alt="potc logo">
                <?php endif ?>
            </a>
            
        </div>
        <?php $defaults = array(
    'theme_location'  => 'primary',
    'menu'            => 'primary-menu',
    'container'       => 'nav',
    'container_class' => 'main-menu-container container',
    'container_id'    => '',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '<ul id="main-menu-items" class=" main-menu-items">%3$s</ul>',
    'depth'           => 0,
);
?>
 
<?php wp_nav_menu( $defaults ); ?>
        
<div class="nav__wrapper--mobile-button">
     <span class="nav__mobile--top"></span>
     <span class="nav__mobile--middle"></span>
     <span class="nav__mobile--bottom"></span>
 </div>	

            </div>
            
        
            
		</header><!-- #site-header -->

		<?php
		
