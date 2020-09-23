<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\cmb2\CodeBinding\Codes;

class CodeOne {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_action('cmb2_init', [$this, 'CodeOne']);
    }

    /**
     * Main Code
     */
    function CodeOne() {
        $prefix = '_cmb_';
        $cmb    = new_cmb2_box([
            'id'           => $prefix . '123',
            'title'        => __('Metabox Title', 'XDfmSHC'),
            'object_types' => ['page', 'post'],
            'context'      => 'normal',
            'priority'     => 'default',
        ]);
        $cmb->add_field([
            'name'    => __('Title', 'XDfmSHC'),
            'id'      => $prefix . 'qwe',
            'type'    => 'text',
            'default' => 'default',
            'desc'    => __('value', 'XDfmSHC'),
        ]);
    }
}
