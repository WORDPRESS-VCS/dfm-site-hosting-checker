<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\ACTIONS\ACTIVATION;

use KHALIF\XDfmSHC\ACTIONS\ACTIVATION\Actions\CreateDatabaseTable;

/**
 *  What Will Happen After Being Actived
 */

class Activation {
    /**
     * Class construcotr
     */
    public function __construct() {
        new CreateDatabaseTable;
    }
}
