<?php

namespace KHALIF\XDfmSHC\INCLUDES\CptCt\Ct\Files;

class Demo_ct {
    /**
     * Taxonomy: democats.
     */
    public function __construct() {
        add_action('init', [$this, 'cptui_register_my_taxes_democat']);
    }

    /**
     * Taxonomy: democats Function
     */
    function cptui_register_my_taxes_democat() {
        $labels = [
            'name'          => __('democats', 'phyllo'),
            'singular_name' => __('democat', 'phyllo'),
        ];
        $args = [
            'label'                 => __('democats', 'phyllo'),
            'labels'                => $labels,
            'public'                => true,
            'publicly_queryable'    => true,
            'hierarchical'          => false,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'query_var'             => true,
            'rewrite'               => ['slug' => 'democat', 'with_front' => true],
            'show_admin_column'     => false,
            'show_in_rest'          => true,
            'rest_base'             => 'democat',
            'rest_controller_class' => 'WP_REST_Terms_Controller',
            'show_in_quick_edit'    => false,
        ];
        register_taxonomy('democat', ['demo'], $args);
    }
}
