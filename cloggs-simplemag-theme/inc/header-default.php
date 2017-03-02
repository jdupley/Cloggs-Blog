<?php
/**
 * Defult Header
 * Centered Logo
 *
 * @package SimpleMag
 * @since 	SimpleMag 3.0
**/
global $ti_option;
?>

<div class="header header-default">

    <a class="logo" href="http://www.woodhouseclothing.com"><!-- echo home_url( '/' ); -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" width="200" />
    </a><!-- Logo -->
    
    <?php 
    // Show or Hide site tagline under the logo based on Theme Options
    if( $ti_option['site_tagline'] == true ) {
    ?>
    <span class="tagline" itemprop="description"><?php bloginfo( 'description' ); ?></span>
    <?php } ?>

</div><!-- .header-default -->