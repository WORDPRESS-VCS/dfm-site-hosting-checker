<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Admin\Menu;

use KHALIF\XDfmSHC as ROOT;

class Menu {

    function __construct() {
        add_action('admin_menu', [$this, 'dfm_s_h_c_submenu'], 11);
    }
    /**
     * Adds a submenu page under a custom post type parent.
     */
    function dfm_s_h_c_submenu() {
        add_submenu_page(
            'dfm-s-h-c-main-page',
            __('DFM Hosting Check', 'textdomain'),
            __('Check', 'textdomain'),
            'manage_options',
            'dfm-s-h-c-add-page',
            function () {
                ob_start();
                require_once ROOT\DIR_PATH . 'includes/Admin/Menu/views/domainlist.php';
                $domainlistview = ob_get_contents();
                ob_get_clean();
                echo $domainlistview;
            }
        );
    }
}
