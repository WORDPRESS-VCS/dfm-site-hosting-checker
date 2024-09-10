<?php

namespace KHALIF\XDfmSHC\INCLUDES\Front\Assets\Load;

use KHALIF\XDfmSHC as ROOT;

class CSS {
    function __construct() {
        function Get_front_Css() {
            return [
                'front_main' => [
                    'src'                   => ROOT\DIR_URL . 'assets/front/css/front.css',
                    'deps'                  => [],
                    'version'               => ROOT\VERSION,
                    'media'                 => 'all',
                    'is_wp_enqueue_scripts' => true,
                    'is_enqueue_here'       => true,
                ],
            ];
        }
    }
}
