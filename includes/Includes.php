<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES;

use KHALIF\XDfmSHC\INCLUDES\Admin\Admin;
use KHALIF\XDfmSHC\INCLUDES\CptCt\CptCt;
use KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\ExtraFeatures;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\Frameworks;
use KHALIF\XDfmSHC\INCLUDES\Front\Front;

class Includes {
    /**
     * Class construcotr
     */
    public function __construct() {
        $this->admin_public();
        new ExtraFeatures;
        new Frameworks;
        new CptCt;
    }

    /**
     * Function admin_public
     */
    public function admin_public() {
        if (is_admin()) {
            new Admin;
        } else {
            new Front;
        }
    }
}
