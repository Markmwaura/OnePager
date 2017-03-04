<?php
function onepage_enqueue()
{
    wp_register_style('onepage_bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');

    wp_register_style('onepage_fontawesome', get_template_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.min.css');

    wp_register_style('onepage_opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

    wp_register_style('onepage_merritweather', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');

    wp_register_style('onepage_magnificpopup', get_template_directory_uri().'/assets/vendor/magnific-popup/magnific-popup.css');

    wp_register_style('onepage_creativecss', get_template_directory_uri().'/assets/css/creative.min.css');
    wp_enqueue_style('onepage_bootstrap');
    wp_enqueue_style('onepage_fontawesome');
    wp_enqueue_style('onepage_opensans');
    wp_enqueue_style('onepage_merritweather');
    wp_enqueue_style('onepage_magnificpopup');
    wp_enqueue_style('onepage_creativecss');

    // Register scripts
    wp_register_script('onepage_jquery',get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js',array(),false,true);
    wp_register_script('onepage_boostrapjs',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js',array(),false,true);
    wp_register_script('Onepage_easingjs','https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',array(),false,true);
    wp_register_script('Onepage_scrollreveal',get_template_directory_uri().'/assets/vendor/scrollreveal/scrollreveal.min.js',array(),false,true);
    wp_register_script('Onepage_magnificpopupjs',get_template_directory_uri().'/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',array(),false,true);
    wp_register_script('Onepage_creativejs',get_template_directory_uri().'/assets/js/creative.min.js',array(),false,true);

    wp_enqueue_script('onepage_jquery');
    wp_enqueue_script('onepage_boostrapjs');
    wp_enqueue_script('Onepage_easingjs');
    wp_enqueue_script('Onepage_scrollreveal');
    wp_enqueue_script('Onepage_magnificpopupjs');
    wp_enqueue_script('Onepage_creativejs');

}
