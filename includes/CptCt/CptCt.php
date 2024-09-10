<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\CptCt;

use KHALIF\XDfmSHC\INCLUDES\CptCt\Cpt\Cpt;
use KHALIF\XDfmSHC\INCLUDES\CptCt\Ct\Ct;

class CptCt {
    /**
     * Class constructor.
     */
    public function __construct() {
        new Cpt;
        new Ct;
    }
}
