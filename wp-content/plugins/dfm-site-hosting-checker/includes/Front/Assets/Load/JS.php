<?php

namespace KHALIF\XDfmSHC\INCLUDES\Front\Assets\Load;

use KHALIF\XDfmSHC as ROOT;

class JS {
    function __construct() {
        function Get_front_Js() {
            return [

                'front_main' => [
                    'src'                   => ROOT\DIR_URL . 'assets/front/js/front.js',
                    'deps'                  => [],
                    'version'               => ROOT\VERSION,
                    'is_footer'             => 'true',
                    'is_wp_enqueue_scripts' => true,
                    'is_enqueue_here'       => true,
                ],

            ];
        }
    }
}
