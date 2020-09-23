<?php

/**
 *
 * @author Xplantr Ltd. -- https://khalifalmahmud.com/ --
 * @package XDfmSHC
 *
 */
/*
 * Field Start From here
 */
Redux::setSection($opt_name, [
    'title' => __('Basic Fields', 'XDfmSHC'),
    'id'    => 'basic',
    'desc'  => __('Basic fields as subsections.', 'XDfmSHC'),
    'icon'  => 'el el-home',
]);
Redux::setSection($opt_name, [
    'title'      => __('Text', 'XDfmSHC'),
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
    'id'         => 'opt-text-subsection',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'text-example',
            'type'     => 'text',
            'title'    => __('Text Field', 'XDfmSHC'),
            'subtitle' => __('Subtitle', 'XDfmSHC'),
            'desc'     => __('Field Description', 'XDfmSHC'),
            'default'  => 'Default Text',
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Text Area', 'XDfmSHC'),
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
    'id'         => 'opt-textarea-subsection',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'textarea-example',
            'type'     => 'textarea',
            'title'    => __('Text Area Field', 'XDfmSHC'),
            'subtitle' => __('Subtitle', 'XDfmSHC'),
            'desc'     => __('Field Description', 'XDfmSHC'),
            'default'  => 'Default Text',
        ],
    ],
]);
// Gutenberg Editor ON / OFF
Redux::setSection($opt_name, [
    'title'  => __('Gutenberg Editor', 'XDfmSHC'),
    'id'     => 'gutenbergeditor',
    'desc'   => __('Gutenberg Editor On/Off', 'XDfmSHC'),
    'fields' => [
        [
            'id'      => 'gutenbergeditorId',
            'type'    => 'switch',
            // 'title'    => __( 'Gutenberg Editor', 'XDfmSHC' ),
            // 'subtitle' => __( 'Gutenberg Editor On/Off', 'XDfmSHC' ),
            'default' => 0,
            'on'      => 'Enabled',
            'off'     => 'Disabled',
        ],
    ],
]);
/*
 * <--- END SECTIONS
 */
