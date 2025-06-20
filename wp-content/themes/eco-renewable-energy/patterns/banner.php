<?php
/**
 * Banner Section
 * 
 * slug: eco-renewable-energy/banner
 * title: Banner
 * categories: eco-renewable-energy
 */

return array(
    'title'      =>__( 'Banner', 'eco-renewable-energy' ),
    'categories' => array( 'eco-renewable-energy' ),
    'content'    => '<!-- wp:group {"className":"slider-main-box","style":{"color":{"background":"#101114"},"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
    <div class="wp-block-group slider-main-box has-background" style="background-color:#101114;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":100,"dimRatio":0,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","className":"banner-section wow zoomIn","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
    <div class="wp-block-cover banner-section wow zoomIn" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-100" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
    <div class="wp-block-column" style="flex-basis:15%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"70%","className":"main-column","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-column is-vertically-aligned-center main-column" style="flex-basis:70%"><!-- wp:heading {"level":1,"className":"banner-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"45px","letterSpacing":"0.78px","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"textColor":"background","fontFamily":"outfit"} -->
    <h1 class="wp-block-heading banner-heading has-background-color has-text-color has-link-color has-outfit-font-family" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);font-size:45px;font-style:normal;font-weight:700;letter-spacing:0.78px;line-height:1.3">'. esc_html__('Biggest Produces Of Wild And Solar Energy','eco-renewable-energy').'</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"banner-text","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5","fontSize":"18px"},"spacing":{"padding":{"top":"15px","bottom":"20px","right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"outfit"} -->
    <p class="banner-text has-background-color has-text-color has-link-color has-outfit-font-family" style="padding-top:15px;padding-right:0;padding-bottom:20px;padding-left:0;font-size:18px;font-style:normal;font-weight:500;line-height:1.5">'. esc_html__('We care for the growing needs of our community. We build systems for providing health services for individuals, families, communities and populations in general.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"banner-button","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
    <div class="wp-block-buttons banner-button" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"},"border":{"radius":"5px"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"extra-small","fontFamily":"outfit"} -->
    <div class="wp-block-button has-custom-font-size has-outfit-font-family has-extra-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)">'. esc_html__('Learn More','eco-renewable-energy').'</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"textColor":"white","style":{"color":{"background":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent)"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"},"border":{"radius":"5px"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"extra-small","fontFamily":"sourcecodepro"} -->
    <div class="wp-block-button has-custom-font-size has-sourcecodepro-font-family has-extra-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px"><a class="wp-block-button__link has-white-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)">'. esc_html__('Free Quote','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"15%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:15%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->',
);