<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Admin;

use KHALIF\XDfmSHC\INCLUDES\Admin\Assets\Assets;
use KHALIF\XDfmSHC\INCLUDES\Admin\dfmSiteHostingCheck\Main;
use KHALIF\XDfmSHC\INCLUDES\Admin\Hide\Hide;
use KHALIF\XDfmSHC\INCLUDES\Admin\Menu\Menu;

class Admin {
    /**
     * Class construcotr
     */
    public function __construct() {
        new Assets;
        new Hide;
        new Menu;
        new Main;
    }
}
