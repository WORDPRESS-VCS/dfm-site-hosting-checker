<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks;

use KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\acf;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\carbonfields\carbonfields;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\cmb2\cmb2;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\elementor\elementor;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\redux\redux;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\TGM\tgm;

class Frameworks {
    /**
     * Class constructor.
     */
    public function __construct() {
        // new tgm;
        // acf::acf();
        // cmb2::cmb2();
        // redux::redux();
        // elementor::elementor();
        new carbonfields;
    }
}
