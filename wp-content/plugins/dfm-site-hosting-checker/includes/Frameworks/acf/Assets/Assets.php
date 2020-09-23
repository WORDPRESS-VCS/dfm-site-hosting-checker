<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\Assets;

use KHALIF\XDfmSHC as ROOT;

class Assets {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('acf/input/admin_head', [$this, 'XDfmSHC_acf_admin_enqueue_scripts']);
    }

    function XDfmSHC_acf_admin_enqueue_scripts() {

        // register style

        // wp_register_style( 'my-acf-input-css', get_stylesheet_directory_uri() . '/css/my-acf-input.css', false, '1.0.0' );

        wp_enqueue_style('XDfmSHC-acf-input-css', ROOT\DIR_URL . 'includes/Frameworks/acf/Assets/assets/css/my-acf-input.css', false, ROOT\VERSION);

        // register script

        // wp_register_script( 'my-acf-input-js', get_stylesheet_directory_uri() . '/js/my-acf-input.js', false, '1.0.0');

    }
}
