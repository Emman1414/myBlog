<?php


function myNev_custom_post(){

// SERVICES
    $service_lable = array(
        'name'          => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'       => __('Add Service', 'textdomain'),
        'add_new_items' => __('Add New Service', 'textdomain'),
        'edit_item'     => __('Edit Service', 'textdomain'),
        'all_items'     => __('Service', 'textdomain'),
        

    );

    $service_args = array(
        'labels'            => $service_lable,
        'public'            => true,
        'capability_type'   =>'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title','editor','thumbnail','excerpt'),
    );
    register_post_type('service', $service_args);
        

// TOURS
    $tour_lable = array(
        'name'          => __('tours', 'textdomain'),
        'singular_name' => __('tour', 'textdomain'),
        'add_new'       => __('Add Tour', 'textdomain'),
        'add_new_items' => __('Add New Tour', 'textdomain'),
        'edit_item'     => __('Edit Tour', 'textdomain'),
        'all_items'     => __('Tour', 'textdomain'),
        

    );

    $tour_args = array(
        'labels'            => $tour_lable,
        'public'            => true,
        'capability_type'   =>'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title','editor','thumbnail','excerpt'),
    );
    register_post_type('tour', $tour_args);
      
        
    }

    add_action('init', 'myNev_custom_post');

