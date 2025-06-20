<?php
/**
 * Category Section
 * 
 * slug: eco-renewable-energy/project-section
 * title: Project Section
 * categories: eco-renewable-energy
 */

return array(
    'title'      =>__( 'Project Section', 'eco-renewable-energy' ),
    'categories' => array( 'eco-renewable-energy' ),
    'content'    => '<!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group service-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontFamily":"outfit"} -->
    <h1 class="wp-block-heading has-primary-color has-text-color has-link-color has-outfit-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:700">'. esc_html__('See Our Project','eco-renewable-energy').'</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"banner-text","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.5"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"#141414"}}},"color":{"text":"#141414"}},"fontSize":"medium","fontFamily":"outfit"} -->
    <p class="banner-text has-text-color has-link-color has-outfit-font-family has-medium-font-size" style="color:#141414;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:300;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"className":"project-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns project-section" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"className":"project-col01 wow pulse animated","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column project-col01 wow pulse animated" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"project-inner-column"} -->
    <div class="wp-block-columns project-inner-column"><!-- wp:column {"className":"project-inner-column01"} -->
    <div class="wp-block-column project-inner-column01"><!-- wp:image {"id":99,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/project01.png" alt="" class="wp-image-99" style="aspect-ratio:1;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:columns {"className":"inner-column","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"backgroundColor":"white"} -->
    <div class="wp-block-columns inner-column has-white-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"project-heading","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
    <h2 class="wp-block-heading has-text-align-center project-heading has-outfit-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:20px">'. esc_html__('Solar Panels Uses In Row Houses','eco-renewable-energy').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"project-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontSize":"small"} -->
    <p class="has-text-align-center project-text has-text-color has-link-color has-small-font-size" style="color:#9ea1ac;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html__('Lorem Ipsum is simply dummy text of the printing.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"project-button","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons project-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}},"fontSize":"small","fontFamily":"inter"} -->
    <div class="wp-block-button has-custom-font-size has-inter-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)" rel="#">'. esc_html__('Know More','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"project-col01 wow pulse animated","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column project-col01 wow pulse animated" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"project-inner-column"} -->
    <div class="wp-block-columns project-inner-column"><!-- wp:column {"className":"project-inner-column01"} -->
    <div class="wp-block-column project-inner-column01"><!-- wp:image {"id":98,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/project02.png" alt="" class="wp-image-98" style="aspect-ratio:1;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:columns {"className":"inner-column","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"backgroundColor":"white"} -->
    <div class="wp-block-columns inner-column has-white-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"project-heading","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
    <h2 class="wp-block-heading has-text-align-center project-heading has-outfit-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:20px">'. esc_html__('Technical Excellence In Execution','eco-renewable-energy').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"project-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontSize":"small"} -->
    <p class="has-text-align-center project-text has-text-color has-link-color has-small-font-size" style="color:#9ea1ac;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html__('Lorem Ipsum is simply dummy text of the printing.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"project-button","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons project-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}},"fontSize":"small","fontFamily":"inter"} -->
    <div class="wp-block-button has-custom-font-size has-inter-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)" rel="#">'. esc_html__('Know More','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"project-col01 wow pulse animated","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column project-col01 wow pulse animated" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"project-inner-column"} -->
    <div class="wp-block-columns project-inner-column"><!-- wp:column {"className":"project-inner-column01"} -->
    <div class="wp-block-column project-inner-column01"><!-- wp:image {"id":97,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/project03.png" alt="" class="wp-image-97" style="aspect-ratio:1;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:columns {"className":"inner-column","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"backgroundColor":"white"} -->
    <div class="wp-block-columns inner-column has-white-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"project-heading","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
    <h2 class="wp-block-heading has-text-align-center project-heading has-outfit-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:20px">'. esc_html__('Project Execution Its Best','eco-renewable-energy').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"project-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontSize":"small"} -->
    <p class="has-text-align-center project-text has-text-color has-link-color has-small-font-size" style="color:#9ea1ac;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html__('Lorem Ipsum is simply dummy text of the printing.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"project-button","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons project-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}},"fontSize":"small","fontFamily":"inter"} -->
    <div class="wp-block-button has-custom-font-size has-inter-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)" rel="#">'. esc_html__('Know More','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"project-col01 wow pulse animated","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column project-col01 wow pulse animated" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"project-inner-column"} -->
    <div class="wp-block-columns project-inner-column"><!-- wp:column {"className":"project-inner-column01"} -->
    <div class="wp-block-column project-inner-column01"><!-- wp:image {"id":96,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/project04.png" alt="" class="wp-image-96" style="aspect-ratio:1;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:columns {"className":"inner-column","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"backgroundColor":"white"} -->
    <div class="wp-block-columns inner-column has-white-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"project-heading","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
    <h2 class="wp-block-heading has-text-align-center project-heading has-outfit-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:20px">'. esc_html__('Efficient Solar Power Integration','eco-renewable-energy').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"project-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontSize":"small"} -->
    <p class="has-text-align-center project-text has-text-color has-link-color has-small-font-size" style="color:#9ea1ac;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html__('Lorem Ipsum is simply dummy text of the printing.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"project-button","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons project-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}},"fontSize":"small","fontFamily":"inter"} -->
    <div class="wp-block-button has-custom-font-size has-inter-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)" rel="#">'. esc_html__('Know More','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"project-col01 wow pulse animated","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column project-col01 wow pulse animated" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"project-inner-column"} -->
    <div class="wp-block-columns project-inner-column"><!-- wp:column {"className":"project-inner-column01"} -->
    <div class="wp-block-column project-inner-column01"><!-- wp:image {"id":95,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/project05.png" alt="" class="wp-image-95" style="aspect-ratio:1;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:columns {"className":"inner-column","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"backgroundColor":"white"} -->
    <div class="wp-block-columns inner-column has-white-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"project-heading","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
    <h2 class="wp-block-heading has-text-align-center project-heading has-outfit-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:20px">'. esc_html__('Roof-Top Solar Installation','eco-renewable-energy').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"project-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontSize":"small"} -->
    <p class="has-text-align-center project-text has-text-color has-link-color has-small-font-size" style="color:#9ea1ac;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html__('Lorem Ipsum is simply dummy text of the printing.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"project-button","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons project-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}},"fontSize":"small","fontFamily":"inter"} -->
    <div class="wp-block-button has-custom-font-size has-inter-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)" rel="#">'. esc_html__('Know More','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"project-col01 wow pulse animated","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column project-col01 wow pulse animated" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"project-inner-column"} -->
    <div class="wp-block-columns project-inner-column"><!-- wp:column {"className":"project-inner-column01"} -->
    <div class="wp-block-column project-inner-column01"><!-- wp:image {"id":94,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/project06.png" alt="" class="wp-image-94" style="aspect-ratio:1;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:columns {"className":"inner-column","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"backgroundColor":"white"} -->
    <div class="wp-block-columns inner-column has-white-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"project-heading","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
    <h2 class="wp-block-heading has-text-align-center project-heading has-outfit-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:20px">'. esc_html__('On-Site Solar Panel Collaboration','eco-renewable-energy').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"project-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontSize":"small"} -->
    <p class="has-text-align-center project-text has-text-color has-link-color has-small-font-size" style="color:#9ea1ac;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html__('Lorem Ipsum is simply dummy text of the printing.','eco-renewable-energy').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"project-button","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons project-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}},"fontSize":"small","fontFamily":"inter"} -->
    <div class="wp-block-button has-custom-font-size has-inter-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)" rel="#">'. esc_html__('Know More','eco-renewable-energy').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);