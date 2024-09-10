<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\elementor;

use KHALIF\XDfmSHC\INCLUDES\Frameworks\elementor\Assets\Assets;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\elementor\Hide\Hide;

class elementor {
    public static function elementor() {
        new Hide;
        new Assets;
    }
}
