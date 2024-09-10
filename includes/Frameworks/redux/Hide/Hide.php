<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\redux\Hide;

use ReduxFrameworkPlugin;

class Hide {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('admin_menu', [$this, 'remove_redux_submenu'], 999);
        add_action('init', [$this, 'remove_demo_mode_from_redux_plugin']);
    }

    function remove_redux_submenu() {
        remove_submenu_page('tools.php', 'redux-about');
    }

    function remove_demo_mode_from_redux_plugin() {
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_action('plugin_row_meta', [ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'], null, 2);
        }
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_action('admin_notices', [ReduxFrameworkPlugin::get_instance(), 'admin_notices']);
        }
    }
}
