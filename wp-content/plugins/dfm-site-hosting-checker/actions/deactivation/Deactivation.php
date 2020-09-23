<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\ACTIONS\DEACTIVATION;

use KHALIF\XDfmSHC\ACTIONS\DEACTIVATION\Actions\DeleteDatabasetable;

/**
 *  What Will Happen After Being Deactived
 */

class Deactivation {
    /**
     * Class construcotr
     */
    public function __construct() {
        new DeleteDatabasetable;
        // Clear the permalinks to remove our post type's rules from the database.
        flush_rewrite_rules();
    }
}
