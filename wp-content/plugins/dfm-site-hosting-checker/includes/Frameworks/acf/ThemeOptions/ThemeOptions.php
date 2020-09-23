<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\ThemeOptions;

class ThemeOptions {
    /**
     * Class constructor.
     */
    public function __construct() {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page([
                'page_title' => 'Theme Settings',
                'menu_title' => 'Theme Settings',
                'menu_slug'  => 'phyllo-theme-acf-settings',
                'capability' => 'edit_posts',
                'redirect'   => false,
            ]);
            // acf_add_options_sub_page(array(
            //     'page_title'     => 'Theme Header Settings',
            //     'menu_title'    => 'Header',
            //     'parent_slug'    => 'theme-general-settings',
            // ));
        }
    }
}
