<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\acf;

// use KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\Hide\Hide;

use KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\Assets\Assets;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\CodeBinding\CodeBinding;
use KHALIF\XDfmSHC\INCLUDES\Frameworks\acf\ThemeOptions\ThemeOptions;

class acf {
    public static function acf() {
        /**
         *
         * Acf Assets Load
         *
         */
        new Assets;
        /**
         *
         * Acf Code Binding
         *
         */
        new CodeBinding;
        /**
         *
         * Acf Hide
         *
         */
        // new Hide;
        /**
         *
         * Acf Theme Option
         *
         */
        new ThemeOptions;
    }
}
