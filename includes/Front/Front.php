<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Front;

use KHALIF\XDfmSHC\INCLUDES\Front\Assets\Assets;
use KHALIF\XDfmSHC\INCLUDES\Front\ShortCode\ShortCode;

class Front {
    /**
     * Class construcotr
     */
    public function __construct() {
        new Assets;
        new ShortCode;
    }
}
