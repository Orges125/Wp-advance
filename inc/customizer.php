<?php


function wpdevs_customizer($wp_customize){

      $wp_customize -> add_section(
        'sec_copyright' ,
        array(
            'title' => 'Copyright Settings' ,
            'description' => 'Copyright Settings'

        ));

     $wp_customize -> add_setting(
        'sec_copyright',
        array(
            'type'=>'theme_mod',
            'default' => 'Copyright X - All rights Reserved',
            'sanitize_callback' => 'saintize_text-field'
        ));
        
        $wp_customize -> add_control(
            'src_copyright' ,
            array(
                'label' => 'Copyright information',
                'description' => 'Please, type your copyright here',
                'section' => 'sec copyright',
                'type' => 'text'
            ));
   }

   add_action('customize_register','wpdevs_customizer');




?>