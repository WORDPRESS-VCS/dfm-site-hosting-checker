<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Front\ShortCode;

use KHALIF\XDfmSHC\INCLUDES\Front\ShortCode\Bmi_Bmr\Bmi_Bmr;

class ShortCode {
    function __construct() {
        new Bmi_Bmr;
    }
}
