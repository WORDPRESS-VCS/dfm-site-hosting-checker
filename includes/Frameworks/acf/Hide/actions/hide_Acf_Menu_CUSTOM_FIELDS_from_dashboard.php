<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\Hide\actions;

class hide_Acf_Menu_CUSTOM_FIELDS_from_dashboard {
    /**
     * Class constructor.
     */
    public function __construct() {

        /**
         *
         * Hide Acf From Dashboard
         *
         */
        add_filter('acf/settings/show_admin', '__return_false');
    }
}
