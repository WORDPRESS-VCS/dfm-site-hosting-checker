<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Front\ShortCode\Bmi_Bmr;

use KHALIF\XDfmSHC as ROOT;

class Bmi_Bmr {
    public function __construct() {
        /**
         * Bmi_Bmr Shortcode
         */
        add_shortcode(
            'HUMAN_BMI_BMR',
            function () {
                require_once ROOT\DIR_PATH . 'includes/Front/ShortCode/Bmi_Bmr/views/bmi-bmr-form.php';
                ob_start();
                $bmi_bmr_form_templates = ob_get_contents();
                return $bmi_bmr_form_templates;
                ob_get_clean();
            }
        );
    }
}
