<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\Features;

class RemoveDisplaySiteTitle_and_TaglineCheckbox_from_Customizer {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('customize_register', [$this, 'de_register'], 11);
    }

    function de_register($wp_customize) {
        $wp_customize->remove_control('display_header_text');
    }
}
