<?php

namespace KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Load;

use KHALIF\XDfmSHC as ROOT;

class CSS {
    function __construct() {
        function Get_admin_Css() {
            return [

                'admin_main' => [
                    'src'                      => ROOT\DIR_URL . 'assets/admin/css/admin.css',
                    'deps'                     => [],
                    'version'                  => ROOT\VERSION,
                    'media'                    => 'all',
                    'is_admin_enqueue_scripts' => true,
                    'is_enqueue_here'          => true,
                ],

            ];
        }
    }
}
