<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\Hide;

use KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\Hide\actions\hide_Acf_Menu_CUSTOM_FIELDS_from_dashboard;

class Hide {
    /**
     * Class constructor.
     */
    public function __construct() {
        new hide_Acf_Menu_CUSTOM_FIELDS_from_dashboard;
    }
}
