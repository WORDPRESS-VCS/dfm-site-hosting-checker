<?php

namespace KHALIF\XDfmSHC\INCLUDES\Front\Assets;

use function KHALIF\XDfmSHC\INCLUDES\Front\Assets\Load\Get_front_Css;
use function KHALIF\XDfmSHC\INCLUDES\Front\Assets\Load\Get_front_Js;
use KHALIF\XDfmSHC\INCLUDES\Front\Assets\Load\CSS;
use KHALIF\XDfmSHC\INCLUDES\Front\Assets\Load\JS;

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

        add_action('wp_enqueue_scripts', [$this, 'front_assets']);
    }

    function front_assets() {
        /**
         * All Front Default CSS Load
         * @return css url
         * @todo
         */
        $styles = Get_front_Css();
        foreach ($styles as $handle => $style) {
            $dependencies = isset($style['deps']) ? $style['deps'] : false;
            if ($style['is_wp_enqueue_scripts']) {
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
         * All Front Default JS Load
         * @return js url
         * @todo
         */
        $scripts = Get_front_Js();
        foreach ($scripts as $handle => $script) {
            $dependencies = isset($script['deps']) ? $script['deps'] : false;
            if ($script['is_wp_enqueue_scripts']) {
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
