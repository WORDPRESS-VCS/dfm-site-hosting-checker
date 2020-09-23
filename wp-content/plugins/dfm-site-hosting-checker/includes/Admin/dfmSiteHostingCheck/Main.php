<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */



namespace KHALIF\XDfmSHC\INCLUDES\Admin\dfmSiteHostingCheck;

use wp_mail;

class Main {
    /**
     * Class construcotr
     */
    public function __construct() {
        getIDfromURL('www.xplantr.com', '23.185.0.41');
    }
}
function getIDfromURL($SiteUrl = NULL, $ProviderIP) {
    $SiteIP = gethostbyname($SiteUrl);
    if ($ProviderIP == $SiteIP) {
        echo 'Milcha';
    } else {
        //    Send Email 
        $to = 'khalif@digitalfireflymarketing.com';
        $subject = 'The subject';
        $message = 'The email body content';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        wp_mail($to, $subject, $message, $headers);
    }
}
