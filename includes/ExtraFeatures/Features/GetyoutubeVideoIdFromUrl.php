<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\ExtraFeatures\Features;

class GetyoutubeVideoIdFromUrl {
    /**
     * Class constructor.
     */
    public function __construct() {
        function getYouTubeIdFromURL($url) {
            $url_string = parse_url($url, PHP_URL_QUERY);
            parse_str($url_string, $args);
            return isset($args['v']) ? $args['v'] : false;
        }

        // Calling Way

        // $youtube_id = getYouTubeIdFromURL("https://www.youtube.com/watch?time_continue=3&v=licbdVBadbE");
        // echo $youtube_id;
    }
}
