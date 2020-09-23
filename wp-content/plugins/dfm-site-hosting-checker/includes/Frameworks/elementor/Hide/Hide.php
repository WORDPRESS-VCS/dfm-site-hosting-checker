<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\elementor\Hide;

class Hide {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('admin_menu', [$this, 'remove_elementor_submenu'], 999);
    }

    function remove_elementor_submenu() {
        remove_submenu_page('elementor', 'elementor-getting-started');
        remove_submenu_page('elementor', 'elementor-role-manager');
        remove_submenu_page('elementor', 'go_knowledge_base_site');
        remove_submenu_page('elementor', 'elementor_custom_fonts');
        remove_submenu_page('elementor', 'go_elementor_pro');
        remove_submenu_page('elementor_library', 'popup_templates');
        remove_submenu_page('edit.php?post_type=elementor_library', 'theme_templates');
        remove_submenu_page('edit.php?post_type=elementor_library', 'popup_templates');
    }
}
