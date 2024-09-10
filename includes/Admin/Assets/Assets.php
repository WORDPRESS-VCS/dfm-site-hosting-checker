<?php

namespace KHALIF\XDfmSHC\INCLUDES\Admin\Assets;

use function KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Load\Get_admin_Css;
use function KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Load\Get_admin_Js;
use KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Load\CSS;
use KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Load\JS;

class Assets {

    function __construct() {
        /**
         * Get All CSS from Load Folder
         * @return Initialization
         * @todo
         */
        new CSS;
        /**
         * Get All JS from Load Folder
         * @return Initialization
         * @todo
         */
        new JS;
        add_action('admin_enqueue_scripts', [$this, 'admin_assets']);
    }

    function admin_assets() {
        /**
         * All Admin Default CSS Load
         * @return css url
         * @todo
         */
        $styles = Get_admin_Css();
        foreach ($styles as $handle => $style) {
            $dependencies = isset($style['deps']) ? $style['deps'] : false;
            if ($style['is_admin_enqueue_scripts']) {
                /**
                 * Register CSS
                 * @return
                 * @todo
                 */
                wp_register_style($handle, $style['src'], $dependencies, $style['version'], $style['media']);
                /**
                 * Enqueue CSS
                 * @return
                 * @todo
                 */
                if ($style['is_enqueue_here']) {
                    wp_enqueue_style($handle);
                }
            }
        }
        /**
         * All Admin Default JS Load
         * @return js url
         * @todo
         */
        $scripts = Get_admin_Js();
        foreach ($scripts as $handle => $script) {
            $dependencies = isset($script['deps']) ? $script['deps'] : false;
            if ($script['is_admin_enqueue_scripts']) {
                /**
                 * Register JS
                 * @return
                 * @todo
                 */
                wp_register_script($handle, $script['src'], $dependencies, $script['version'], $script['is_footer']);
                /**
                 * Enqueue JS
                 * @return
                 * @todo
                 */
                if ($script['is_enqueue_here']) {
                    wp_enqueue_script($handle);
                }
            }
        }
    }
}
