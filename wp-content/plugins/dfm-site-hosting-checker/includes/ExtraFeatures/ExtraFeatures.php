<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\ExtraFeatures;

use KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\Features\GetyoutubeVideoIdFromUrl;
use KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\Features\GutenbergEnableDisable;

// use KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\Features\RemoveDisplaySiteTitle_and_TaglineCheckbox_from_Customizer;

class ExtraFeatures {
    /**
     *
     */
    public function __construct() {
        // new RemoveDisplaySiteTitle_and_TaglineCheckbox_from_Customizer;
        new GutenbergEnableDisable;
        new GetyoutubeVideoIdFromUrl;
    }
}
