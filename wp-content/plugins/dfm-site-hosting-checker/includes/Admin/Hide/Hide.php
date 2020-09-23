<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Admin\Hide;

class Hide {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('admin_menu', [$this, 'remove_dashboard_submenu'], 999);
    }

    function remove_dashboard_submenu() {
        remove_submenu_page('tools.php', 'tools.php');
    }
}
