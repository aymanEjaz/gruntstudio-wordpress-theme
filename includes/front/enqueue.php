<?php

function ju_enqueue(){

    $uri    =   get_theme_file_uri();
    $ver    =   JU_DEV_MODE ? time() : false;  //if dev mode is on, set the version on the value returned by the time function // casche issue solved!

    wp_register_style( 'ju_google_font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' , [] , $ver );
    wp_register_style( 'ju_icomoon', $uri . '/assets/fonts/icomoon/style.css'  , [] , $ver  );
    wp_register_style( 'ju_bootstrap', $uri . '/assets/css/bootstrap.min.css'  , [] , $ver );
    wp_register_style( 'ju_animate', $uri . '/assets/css/animate.css'  , [] , $ver );
    wp_register_style( 'ju_carousel', $uri . '/assets/css/owl.carousel.min.css'  , [] , $ver );
    wp_register_style( 'ju_theme_default', $uri . '/assets/css/owl.theme.default.min.css'  , [] , $ver );
    wp_register_style( 'ju_bootstrap_datepicker', $uri . '/assets/css/bootstrap-datepicker.css'  , [] , $ver );
    wp_register_style( 'ju_flaticon', $uri . '/assets/fonts/flaticon/font/flaticon.css' , [] , $ver );
    wp_register_style( 'ju_aos', $uri . '/assets/css/aos.css'  , [] , $ver );
    wp_register_style( 'ju_jquery', $uri . '/assets/css/jquery.fancybox.min.css'  , [] , $ver );
    wp_register_style( 'ju_style', $uri . '/assets/css/style.css'  , [] , $ver );
    
    wp_enqueue_style( 'ju_google_font');
    wp_enqueue_style( 'ju_icomoon');
    wp_enqueue_style( 'ju_bootstrap');
    wp_enqueue_style( 'ju_animate');
    wp_enqueue_style( 'ju_carousel');
    wp_enqueue_style( 'ju_theme_default');
    wp_enqueue_style( 'ju_bootstrap_datepicker');
    wp_enqueue_style( 'ju_flaticon');
    wp_enqueue_style( 'ju_aos');
    wp_enqueue_style( 'ju_jquery');
    wp_enqueue_style( 'ju_style');
    

    wp_register_script( 'popper' , $uri . '/assets/js/jquery-3.3.1.min.js' ,  , [] , $ver , true );
    wp_register_script( 'bootstrap' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver   , true );
    wp_register_script( 'carousel' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver   , true );
    wp_register_script( 'aos' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver   , true );
    wp_register_script( 'sticky' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver   , true );
    wp_register_script( 'stickyfill' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver   , true );
    wp_register_script( 'easing' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver  , true );
    wp_register_script( 'isotope' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver  , true );
    wp_register_script( 'fancybox' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver , true );
    wp_register_script( 'main' , $uri . '/assets/js/jquery-3.3.1.min.js' , [], $ver , true );

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'popper');
    wp_enqueue_script( 'bootstrap');
    wp_enqueue_script( 'carousel');
    wp_enqueue_script( 'aos');
    wp_enqueue_script( 'sticky');
    wp_enqueue_script( 'stickyfill');
    wp_enqueue_script( 'easing');
    wp_enqueue_script( 'isotope');
    wp_enqueue_script( 'fancybox');
    wp_enqueue_script( 'main');

}