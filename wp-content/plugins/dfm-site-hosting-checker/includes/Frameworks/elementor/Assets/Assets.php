<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\elementor\Assets;

use KHALIF\XDfmSHC as ROOT;

class Assets {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('elementor/element/before_section_start', [$this, 'elementor_assets']);
    }

    function elementor_assets() {
        wp_enqueue_style(
            'elementor-preview-style',
            ROOT\DIR_URL . 'includes/Frameworks/elementor/Assets/assets/css/elementor.css',
            [],
            ROOT\VERSION,
            'all'
        );
    }
}
