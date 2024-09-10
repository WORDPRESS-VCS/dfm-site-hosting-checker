<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\redux;

use KHALIF\XDfmSHC\INCLUDES\Frameworks\redux\Assets\Assets;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\redux\CodeBinding\Configaration;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\redux\Hide\Hide;

class redux {
    public static function redux() {
        new Configaration;
        new Assets;
        new Hide;
    }
}
