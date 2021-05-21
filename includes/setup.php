<?php

function ju_setup_theme(){
    register_nav_menu('primary', __('Primary Menu' , 'guntstudio'));


}
function business_customize_register($wp_customize){
    //banner Section
    $wp_customize->add_section('banner' , array(
        'title' => __('Banner' , 'business'),
        'description' => sprintf(__('option for homepage banner', 'gruntstudio')),
        'priorty' => 130
    )); 

    //heading setting
    $wp_customize-> add_setting ('banner_heading' , array(
        'default'   => _X('banner_heading' , 'gruntstudio'),
        'type'      =>'theme_mod'

    ));

    //heading control
    $wp_customize-> add_control ('banner_heading' , array(
        'label'         => _X('Heading' , 'gruntstudio'),
        'section'       =>'banner',
        'priority'      => 20

    ));


    
    //text setting
    $wp_customize-> add_setting ('banner_text' , array(
        'default'   => _X('hello welcome to grunt studio :)' , 'gruntstudio'),
        'type'      =>'theme_mod'

    ));

    //text control
    $wp_customize-> add_control ('banner_text' , array(
        'label'         => _X('Text' , 'gruntstudio'),
        'section'       =>'banner',
        'priority'      => 20

    ));





        
    //Button Text Setting
    $wp_customize-> add_setting ('banner_btn_text' , array(
        'default'   => _X('Sign Up' , 'gruntstudio'),
        'type'      =>'theme_mod'

    ));

    //Button Text control
    $wp_customize-> add_control ('banner_btn_text' , array(
        'label'         => _X('Button Text' , 'gruntstudio'),
        'section'       =>'banner',
        'priority'      => 20

    ));


        
    //Button URL setting
    $wp_customize-> add_setting ('banner_btn_URL' , array(
        'default'   => _X('http://test.com' , 'gruntstudio'),
        'type'      =>'theme_mod'

    ));

    //Button URL control
    $wp_customize-> add_control ('banner_btn_URL' , array(
        'label'         => _X('Button URL ' , 'gruntstudio'),
        'section'       =>'banner',
        'priority'      => 20

    ));

            
    //Button URL setting
    $wp_customize-> add_setting ('banner_image' , array(
        'default'   => get_bloginfo('template_directory').'/assets/images/banner.jpg' ,
        'type'      =>'theme_mod'

    ));

    //Button URL control
    $wp_customize-> add_control(new WP_Customize_Image_Control
(
        $wp_customize, 'banner_image' , array(
            'label'         => __('Background Image' , 'gruntstudio'),
            'section'       =>'banner',
            'setting'       => 'banner_image'
    ) ));

}



















