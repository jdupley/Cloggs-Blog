<?php
/**
 * The Header for the theme
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.0
**/
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html <?php language_attributes(); ?> class="oldie"><![endif]-->
<!--[if (gte IE 9) | !(IE)]><!--><html <?php language_attributes(); ?> class="modern"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php global $ti_option; ?>
<link rel="shortcut icon" href="<?php echo $ti_option['site_favicon']['url']; ?>" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $ti_option['site_retina_favicon']['url']; ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div id="pageslide" class="st-menu st-effect">
    	<a href="#" id="close-pageslide"><i class="icomoon-remove-sign"></i></a>
    </div><!-- Sidebar in Mobile View -->
    
	<?php
    // Check for a layout options: Full Width or  Boxed
    if ( $ti_option['site_layout'] == '2' ) { $site_layout = ' class="layout-boxed"'; } else { $site_layout = ' class="layout-full"'; } ?>
    <section id="site"<?php echo isset( $site_layout ) ? $site_layout : ''; ?>>
        <div class="site-content">

			<!--
			  ___. __. .___ .__  _,
			 /  _\/ __\|  _\|  \| |
			|  (__\__ \| ._/|     |
			 \___//___/|_|  |_|\__| HTML
			CLOTHINGSITES PORTABLE NAVIGATION (HEADER)
			-->
				<link rel="stylesheet" type="text/css" href="http://blog.cloggs.co.uk/wp-content/themes/cloggs-simplemag-theme/css/CSPN-cloggs.css?136">
				<link rel="stylesheet" type="text/css" href="http://blog.cloggs.co.uk/wp-content/themes/cloggs-simplemag-theme/css/footer-style.css?27">
				
				<!-- 0 = woodhouse / 1 = bbclothing / 2 = cloggs -->
				<div id="CSPN-header" data-site="2"><!-- default content, replaced on successful content load --></div>
			<!-- END CLOTHINGSITES PORTABLE NAVIGATION -->
			<!-- update 270116 -->
    
            <header id="masthead" role="banner" class="clearfix<?php if ( $ti_option['site_main_menu'] == true ) { echo ' with-menu'; } ti_top_strip_class(); ?>" itemscope itemtype="http://schema.org/WPHeader">
            </header><!-- #masthead -->
            <div id="after-header" class="info-message" style="padding:10px; background-color:#EDEDED;">
				<style>
					.info-message .responsys-newsletter-sign-up .form-subscribe-header{
						line-height: 1;
						display: inline;
						margin: 0 1em;
					}
						.info-message .responsys-newsletter-sign-up .form-subscribe-header label{
							/* padding and font-size adds to 40px */
							font-size: 16px;
							padding: 13px 0;
							font-weight: normal;
							line-height: 1;
							letter-spacing: 0.15em;
						}
					.info-message .responsys-newsletter-sign-up .form-subscribe-input,
					.info-message .responsys-newsletter-sign-up .form-subscribe-input .actions{
						display: inline;
					}
						.info-message .responsys-newsletter-sign-up .form-subscribe-input .input-box{
							padding: 0px;
							line-height: 1;
							display: inline;
							-webkit-flex: initial !important;
							flex: initial !important;
						}
							.info-message .responsys-newsletter-sign-up .form-subscribe-input .input-box:after{
								content: initial;
							}
							.info-message .responsys-newsletter-sign-up .form-subscribe-input .input-box input{
								height: auto;
								padding: 7px 10px;
								width: 250px;
								max-width: initial;
								border: 1px solid black;
								box-sizing: border-box;
							}
							.responsys-newsletter-sign-up .form-subscribe-button{
								font-size: 11px !important;
								display: inline-block;
								height: 40px;
								width: 40px;
								-webkit-border-radius: 100%;
								-moz-border-radius: 100%;
								border-radius: 100%;
								padding: 0px;
								margin-left: 10px;	
								background-color: #25282A;
								color: white;
								border: none;
								letter-spacing: 0.1em;
							}
					@media screen and (max-width:770px){
						.info-message .responsys-newsletter-sign-up{
							-webkit-flex-direction: column;
							flex-direction: column;
						}
						.info-message .responsys-newsletter-sign-up .form-subscribe-header{
							width: 100%;
							margin: 0;
						}
							.info-message .responsys-newsletter-sign-up .form-subscribe-header label{
								width: 100%;
								padding-top: 0px;
							}
							.info-message .responsys-newsletter-sign-up .form-subscribe-header label strong{
								display: inherit;
							}
						.info-message .responsys-newsletter-sign-up .form-subscribe-input{
							margin: 0 auto;
							display: inline;
						}
							.info-message .responsys-newsletter-sign-up .form-subscribe-input .input-box input{
								margin: 0px auto;
								width: 200px;
							}		
					}
				</style>
				<form method="post" action="https://email.clothingsites.co.uk/pub/rf">
					<div class="responsys-newsletter-sign-up">
						<div class="form-subscribe-header">
							<label for="newsletter-signup"><strong>SIGN UP NOW</strong> FOR STYLE NEWS</label>
						</div>
						<div class="form-subscribe-input">
							<div class="input-box">
								<input type="email" name="EMAIL_ADDRESS_" id="newsletter-signup" placeholder="Join our mailing list" title="Sign up for our newsletter" class="input-text required-entry validate-email">
							</div>
							<div class="actions">
								<button type="submit" title="Submit" class="button form-subscribe-button" onclick="dataLayer.push({'event': 'newsletter'});">JOIN</button>
							</div>
						</div>
					</div>
					<input type="hidden" value="Y" name="WOODHOUSE" />
					<input type="hidden" value="X0Gzc2X%3DYQpglLjHJlTQGoT5ghydRuzglq0X86ItEIomcHAEzb8S0rVwjpnpgHlpgneHmgJoXX0Gzc2X%3DYQpglLjHJlTQGooKYW976zeBOFzdJYzcl7N4sDmzaXAI6szgd" name="_ri_" />
					<input type="hidden" value="" name="_RequiredFields_" />
					<input type="hidden" value="" name="_EMailFields_" />
					<input type="hidden" value="" name="_RealFields_" />
					<input type="hidden" value="" name="_IntegerFields_" />
					<input type="hidden" value="FALSE" name="_BannedFields_" />
					<input type="hidden" value="bb_subscribe" name="CAMPAIGN_" />
					<input type="hidden" value="UTF-8" name="charset_" />
					<input type="hidden" value="2016-01-27 04:27:55.412" name="_Sent_" />
					<input type="hidden" value="12842" name="_LID_" />
					<input type="hidden" value="Etxj-gVD0G1lRUsgQcuY-h8" name="_ei_" />
					<input type="hidden" value="WOODHOUSE;_ri_;_RequiredFields_;_EMailFields_;_RealFields_;_IntegerFields_;_BannedFields_;CAMPAIGN_;charset_;_Sent_;_LID_;_ei_;__HIDDEN_FIELD_NAMES__" name="__HIDDEN_FIELD_NAMES__" />
				</form>
            </div><!-- end #after-header.info-message -->
            
            <div class="wrapper">
                <div id="blogsearch">
                    <div id="searchContainer">
                        <h4>Search the blog</h4>
                        <div id="searchLeft">
                            <h5>Search by Keyword</h5>
                            <form method="get" id="searchform" action="<?php echo get_site_url(); ?>">
                            <div><input type="text" size="18" name="s" placeholder="YOUR KEYWORDS" id="s" />
                            <input type="submit" id="searchsubmit" value="FIND IT" class="btn" />
                            </div>
                            </form>
                        </div>
                        <div id="searchMid">
                        - or -
                        </div>
                        <div id="searchRight">
                            <h5>Browse Archives</h5>
                            <div class="selectfix">
                                <select name="archive-menu" onChange="document.location.href=this.options[this.selectedIndex].value;">
                                    <option value="">Select month</option>
                                    <?php wp_get_archives('type=monthly&format=option'); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 