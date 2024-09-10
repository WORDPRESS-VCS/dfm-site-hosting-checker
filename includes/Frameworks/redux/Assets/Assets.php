<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\redux\Assets;

use KHALIF\XDfmSHC as ROOT;

class Assets {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('admin_enqueue_scripts', [$this, 'admin_assets_redux']);
    }

    // Admin
    function admin_assets_redux() {

        // Redux Framework Css
        $redux_screen = get_current_screen();
        // echo '<pre>';
        // print_r( $redux_screen );
        // echo '</pre>';
        // die();

        if ('toplevel_page_XDfmSHC_options' === $redux_screen->id) {
            wp_enqueue_style('redux_framework_css', ROOT\DIR_URL . 'includes/Frameworks/redux/Assets/assets/redux_framework_css.css', [], ROOT\VERSION, 'all');
        }
    }
}
