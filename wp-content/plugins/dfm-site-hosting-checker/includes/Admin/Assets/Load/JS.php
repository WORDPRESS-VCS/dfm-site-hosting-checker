<?php

namespace KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Load;

use KHALIF\XDfmSHC as ROOT;

class JS {
    function __construct() {
        function Get_admin_Js() {
            return [

                'admin_main' => [
                    'src'                      => ROOT\DIR_URL . 'assets/admin/js/admin.js',
                    'deps'                     => [],
                    'version'                  => ROOT\VERSION,
                    'is_footer'                => 'true',
                    'is_admin_enqueue_scripts' => true,
                    'is_enqueue_here'          => true,
                ],

            ];
        }
    }
}
