<?php

namespace KHALIF\XDfmSHC\INCLUDES\CptCt\Cpt\Files;

class Demo_cpt {
    public function __construct() {
        add_action('init', [$this, 'cptui_register_my_cpts_demo']);
    }

    /**
     * Post Type: demos.
     */
    function cptui_register_my_cpts_demo() {

        $labels = [
            'name'          => __('demos', 'phyllo'),
            'singular_name' => __('demo', 'phyllo'),
        ];

        $args = [
            'label'                 => __('demos', 'phyllo'),
            'labels'                => $labels,
            'description'           => '',
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_rest'          => true,
            'rest_base'             => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive'           => false,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'delete_with_user'      => false,
            'exclude_from_search'   => false,
            'capability_type'       => 'post',
            'map_meta_cap'          => true,
            'hierarchical'          => false,
            'rewrite'               => ['slug' => 'demo', 'with_front' => true],
            'query_var'             => true,
            'supports'              => ['title', 'editor', 'thumbnail'],
        ];

        register_post_type('demo', $args);
    }
}
