<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\ACTIONS\DEACTIVATION\Actions;

class DeleteDatabasetable {
    /**
     * Class construcotr
     */
    public function __construct() {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $table_name      = $wpdb->prefix . 'test_activation_table';
        $wpdb->query("DROP TABLE $table_name");
    }
}
