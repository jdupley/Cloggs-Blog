<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.4
**/
global $ti_option;
if ( $ti_option['site_sidebar_fixed'] == true ) { $sidebar_fixed = ' sidebar-fixed'; }
?>
<div class="grid-4 column-2<?php echo isset( $sidebar_fixed ) ? $sidebar_fixed : ''; ?>">
    <aside class="sidebar" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
        <?php
        // Output sidebar for pages besides homepage
        if ( is_page() && !is_page_template( 'page-composer.php' )) {
            if ( is_active_sidebar( 'sidebar-2' ) ) {
                dynamic_sidebar( 'sidebar-2' );
            }
        // Output sidebar for homepage, categories and posts
        } else { 
            if ( is_active_sidebar( 'sidebar-1' ) ) {
                dynamic_sidebar( 'sidebar-1' );
            }
        }
        ?>
    </aside><!-- .sidebar -->
</div>