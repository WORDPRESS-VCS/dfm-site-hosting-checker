<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\Features;

class GutenbergEnableDisable {
    /**
     * Class constructor.
     */
    public function __construct() {
        // disable for posts
        add_filter('use_block_editor_for_post', '__return_false', 10);
        // disable for post types
        add_filter('use_block_editor_for_post_type', '__return_false', 10);
    }
}
