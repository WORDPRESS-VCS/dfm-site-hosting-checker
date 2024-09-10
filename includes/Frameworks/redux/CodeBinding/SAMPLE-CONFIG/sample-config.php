<?php

/**
 *
 * @author Xplantr Ltd. -- https://khalifalmahmud.com/ --
 * @package XDfmSHC
 *
 */
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'redux_XDfmSHC';

// This line is only for altering the XDfmSHC. Can be easily removed.
$opt_name = apply_filters('redux_XDfmSHC/opt_name', $opt_name);

// Background Patterns Reader
$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
$sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
$sample_patterns      = [];

if (is_dir($sample_patterns_path)) {

    if ($sample_patterns_dir = opendir($sample_patterns_path)) {
        $sample_patterns = [];

        while (($sample_patterns_file = readdir($sample_patterns_dir)) !== false) {

            if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                $name              = explode('.', $sample_patterns_file);
                $name              = str_replace('.' . end($name), '', $sample_patterns_file);
                $sample_patterns[] = [
                    'alt' => $name,
                    'img' => $sample_patterns_url . $sample_patterns_file,
                ];
            }
        }
    }
}

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = [
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => __('Sample Options', 'XDfmSHC'),
    'page_title'           => __('Sample Options', 'XDfmSHC'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => false,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => [
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => [
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ],
        'tip_position'  => [
            'my' => 'top left',
            'at' => 'bottom right',
        ],
        'tip_effect'    => [
            'show' => [
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ],
            'hide' => [
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ],
        ],
    ],
];

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = [
    'id'    => 'redux-docs',
    'href'  => 'http://docs.reduxframework.com/',
    'title' => __('Documentation', 'XDfmSHC'),
];

$args['admin_bar_links'][] = [
    //'id'    => 'redux-support',
    'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    'title' => __('Support', 'XDfmSHC'),
];

$args['admin_bar_links'][] = [
    'id'    => 'redux-extensions',
    'href'  => 'reduxframework.com/extensions',
    'title' => __('Extensions', 'XDfmSHC'),
];

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = [
    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon'  => 'el el-github',
    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
];
$args['share_icons'][] = [
    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon'  => 'el el-facebook',
];
$args['share_icons'][] = [
    'url'   => 'http://twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon'  => 'el el-twitter',
];
$args['share_icons'][] = [
    'url'   => 'http://www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-linkedin',
];

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'XDfmSHC'), $v);
} else {
    $args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'XDfmSHC');
}

// Add content after the form.
$args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'XDfmSHC');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = [
    [
        'id'      => 'redux-help-tab-1',
        'title'   => __('Theme Information 1', 'XDfmSHC'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'XDfmSHC'),
    ],
    [
        'id'      => 'redux-help-tab-2',
        'title'   => __('Theme Information 2', 'XDfmSHC'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'XDfmSHC'),
    ],
];
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'XDfmSHC');
Redux::setHelpSidebar($opt_name, $content);

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> START SECTIONS
 *
 */

/*

As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for

 */

// -> START Basic Fields
Redux::setSection($opt_name, [
    'title'            => __('Basic Fields', 'XDfmSHC'),
    'id'               => 'basic',
    'desc'             => __('These are really basic fields!', 'XDfmSHC'),
    'customizer_width' => '400px',
    'icon'             => 'el el-home',
]);

Redux::setSection($opt_name, [
    'title'            => __('Checkbox', 'XDfmSHC'),
    'id'               => 'basic-checkbox',
    'subsection'       => true,
    'customizer_width' => '450px',
    'desc'             => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
    'fields'           => [
        [
            'id'       => 'opt-checkbox',
            'type'     => 'checkbox',
            'title'    => __('Checkbox Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'default'  => '1', // 1 = on | 0 = off
        ],
        [
            'id'       => 'opt-multi-check',
            'type'     => 'checkbox',
            'title'    => __('Multi Checkbox Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value pairs for multi checkbox options
            'options'  => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            //See how std has changed? you also don't need to specify opts that are 0.
            'default'  => [
                '1' => '1',
                '2' => '0',
                '3' => '0',
            ],
        ],
        [
            'id'       => 'opt-checkbox-data',
            'type'     => 'checkbox',
            'title'    => __('Multi Checkbox Option (with menu data)', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'data'     => 'menu',
        ],
        [
            'id'       => 'opt-checkbox-sidebar',
            'type'     => 'checkbox',
            'title'    => __('Multi Checkbox Option (with sidebar data)', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'data'     => 'sidebars',
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'            => __('Radio', 'XDfmSHC'),
    'id'               => 'basic-Radio',
    'subsection'       => true,
    'customizer_width' => '500px',
    'desc'             => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/radio/" target="_blank">docs.reduxframework.com/core/fields/radio/</a>',
    'fields'           => [
        [
            'id'       => 'opt-radio',
            'type'     => 'radio',
            'title'    => __('Radio Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value pairs for radio options
            'options'  => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            'default'  => '2',
        ],
        [
            'id'       => 'opt-radio-data',
            'type'     => 'radio',
            'title'    => __('Radio Option w/ Menu Data', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'data'     => 'menu',
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Sortable', 'XDfmSHC'),
    'id'         => 'basic-Sortable',
    'subsection' => true,
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/sortable/" target="_blank">docs.reduxframework.com/core/fields/sortable/</a>',
    'fields'     => [
        [
            'id'       => 'opt-sortable',
            'type'     => 'sortable',
            'title'    => __('Sortable Text Option', 'XDfmSHC'),
            'subtitle' => __('Define and reorder these however you want.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'label'    => true,
            'options'  => [
                'Text One'   => 'Item 1',
                'Text Two'   => 'Item 2',
                'Text Three' => 'Item 3',
            ],
        ],
        [
            'id'       => 'opt-check-sortable',
            'type'     => 'sortable',
            'mode'     => 'checkbox', // checkbox or text
            'title'    => __('Sortable Text Option', 'XDfmSHC'),
            'subtitle' => __('Define and reorder these however you want.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'options'  => [
                'cb1' => 'Checkbox One',
                'cb2' => 'Checkbox Two',
                'cb3' => 'Checkbox Three',
            ],
            'default'  => [
                'cb1' => false,
                'cb2' => true,
                'cb3' => false,
            ],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'            => __('Text', 'XDfmSHC'),
    'desc'             => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">docs.reduxframework.com/core/fields/text/</a>',
    'id'               => 'basic-Text',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => [
        [
            'id'       => 'text-example',
            'type'     => 'text',
            'title'    => __('Text Field', 'XDfmSHC'),
            'subtitle' => __('Subtitle', 'XDfmSHC'),
            'desc'     => __('Field Description', 'XDfmSHC'),
            'default'  => 'Default Text',
        ],
        [
            'id'        => 'text-example-hint',
            'type'      => 'text',
            'title'     => __('Text Field w/ Hint', 'XDfmSHC'),
            'subtitle'  => __('Subtitle', 'XDfmSHC'),
            'desc'      => __('Field Description', 'XDfmSHC'),
            'default'   => 'Default Text',
            'text_hint' => [
                'title'   => 'Hint Title',
                'content' => 'Hint content about this field!',
            ],
        ],
        [
            'id'          => 'text-placeholder',
            'type'        => 'text',
            'title'       => __('Text Field', 'XDfmSHC'),
            'subtitle'    => __('Subtitle', 'XDfmSHC'),
            'desc'        => __('Field Description', 'XDfmSHC'),
            'placeholder' => 'Placeholder Text',
        ],

    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Multi Text', 'XDfmSHC'),
    'id'         => 'basic-Multi Text',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/multi-text/" target="_blank">docs.reduxframework.com/core/fields/multi-text/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-multitext',
            'type'     => 'multi_text',
            'title'    => __('Multi Text Option', 'XDfmSHC'),
            'subtitle' => __('Field subtitle', 'XDfmSHC'),
            'desc'     => __('Field Decription', 'XDfmSHC'),
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Password', 'XDfmSHC'),
    'id'         => 'basic-Password',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/password/" target="_blank">docs.reduxframework.com/core/fields/password/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'password',
            'type'     => 'password',
            'username' => true,
            'title'    => 'Password Field',
            //'placeholder' => array(
            //    'username' => 'Username',
            //    'password' => 'Password',
            //)
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Textarea', 'XDfmSHC'),
    'id'         => 'basic-Textarea',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">docs.reduxframework.com/core/fields/textarea/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-textarea',
            'type'     => 'textarea',
            'title'    => __('Textarea Option - HTML Validated Custom', 'XDfmSHC'),
            'subtitle' => __('Subtitle', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'default'  => 'Default Text',
        ],
    ],
]);

// -> START Editors
Redux::setSection($opt_name, [
    'title'            => __('Editors', 'XDfmSHC'),
    'id'               => 'editor',
    'customizer_width' => '500px',
    'icon'             => 'el el-edit',
]);

Redux::setSection($opt_name, [
    'title'      => __('WordPress Editor', 'XDfmSHC'),
    'id'         => 'editor-wordpress',
    //'icon'  => 'el el-home'
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/editor/" target="_blank">docs.reduxframework.com/core/fields/editor/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-editor',
            'type'     => 'editor',
            'title'    => __('Editor', 'XDfmSHC'),
            'subtitle' => __('Use any of the features of WordPress editor inside your panel!', 'XDfmSHC'),
            'default'  => 'Powered by Redux Framework.',
        ],
        [
            'id'      => 'opt-editor-tiny',
            'type'    => 'editor',
            'title'   => __('Editor w/o Media Button', 'XDfmSHC'),
            'default' => 'Powered by Redux Framework.',
            'args'    => [
                'wpautop'       => false,
                'media_buttons' => false,
                'textarea_rows' => 5,
                //'tabindex' => 1,
                //'editor_css' => '',
                'teeny'         => false,
                //'tinymce' => array(),
                'quicktags'     => false,
            ],
        ],
        [
            'id'         => 'opt-editor-full',
            'type'       => 'editor',
            'title'      => __('Editor - Full Width', 'XDfmSHC'),
            'full_width' => true,
        ],
    ],
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/editor/" target="_blank">docs.reduxframework.com/core/fields/editor/</a>',
]);

Redux::setSection($opt_name, [
    'title'      => __('ACE Editor', 'XDfmSHC'),
    'id'         => 'editor-ace',
    //'icon'  => 'el el-home'
    'subsection' => true,
    'desc'       => __('For full documentation on the this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/ace-editor/" target="_blank">docs.reduxframework.com/core/fields/ace-editor/</a>',
    'fields'     => [
        [
            'id'       => 'opt-ace-editor-css',
            'type'     => 'ace_editor',
            'title'    => __('CSS Code', 'XDfmSHC'),
            'subtitle' => __('Paste your CSS code here.', 'XDfmSHC'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'desc'     => 'Possible modes can be found at <a href="' . 'http://' . 'ace.c9.io" target="_blank">' . 'http://' . 'ace.c9.io/</a>.',
            'default'  => "#header{\n   margin: 0 auto;\n}",
        ],
        [
            'id'       => 'opt-ace-editor-js',
            'type'     => 'ace_editor',
            'title'    => __('JS Code', 'XDfmSHC'),
            'subtitle' => __('Paste your JS code here.', 'XDfmSHC'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'desc'     => 'Possible modes can be found at <a href="' . 'http://' . 'ace.c9.io" target="_blank">' . 'http://' . 'ace.c9.io/</a>.',
            'default'  => "jQuery(document).ready(function(){\n\n});",
        ],
        [
            'id'         => 'opt-ace-editor-php',
            'type'       => 'ace_editor',
            'full_width' => true,
            'title'      => __('PHP Code', 'XDfmSHC'),
            'subtitle'   => __('Paste your PHP code here.', 'XDfmSHC'),
            'mode'       => 'php',
            'theme'      => 'chrome',
            'desc'       => 'Possible modes can be found at <a href="' . 'http://' . 'ace.c9.io" target="_blank">' . 'http://' . 'ace.c9.io/</a>.',
            'default'    => '<?php
    echo "PHP String";',
        ],

    ],
]);

// -> START Color Selection
Redux::setSection($opt_name, [
    'title' => __('Color Selection', 'XDfmSHC'),
    'id'    => 'color',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-brush',
]);

Redux::setSection($opt_name, [
    'title'      => __('Color', 'XDfmSHC'),
    'id'         => 'color-Color',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/color/" target="_blank">docs.reduxframework.com/core/fields/color/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-color-title',
            'type'     => 'color',
            'output'   => ['.site-title'],
            'title'    => __('Site Title Color', 'XDfmSHC'),
            'subtitle' => __('Pick a title color for the theme (default: #000).', 'XDfmSHC'),
            'default'  => '#000000',
        ],
        [
            'id'       => 'opt-color-footer',
            'type'     => 'color',
            'title'    => __('Footer Background Color', 'XDfmSHC'),
            'subtitle' => __('Pick a background color for the footer (default: #dd9933).', 'XDfmSHC'),
            'default'  => '#dd9933',
            'validate' => 'color',
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Color Gradient', 'XDfmSHC'),
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/color-gradient/" target="_blank">docs.reduxframework.com/core/fields/color-gradient/</a>',
    'id'         => 'color-gradient',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-color-header',
            'type'     => 'color_gradient',
            'title'    => __('Header Gradient Color Option', 'XDfmSHC'),
            'subtitle' => __('Only color validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'default'  => [
                'from' => '#1e73be',
                'to'   => '#00897e',
            ],
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Color RGBA', 'XDfmSHC'),
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/color-rgba/" target="_blank">docs.reduxframework.com/core/fields/color-rgba/</a>',
    'id'         => 'color-rgba',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-color-rgba',
            'type'     => 'color_rgba',
            'title'    => __('Color RGBA', 'XDfmSHC'),
            'subtitle' => __('Gives you the RGBA color.', 'XDfmSHC'),
            'default'  => [
                'color' => '#7e33dd',
                'alpha' => '.8',
            ],
            //'output'   => array( 'body' ),
            'mode'     => 'background',
            //'validate' => 'colorrgba',
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Link Color', 'XDfmSHC'),
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/link-color/" target="_blank">docs.reduxframework.com/core/fields/link-color/</a>',
    'id'         => 'color-link',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-link-color',
            'type'     => 'link_color',
            'title'    => __('Links Color Option', 'XDfmSHC'),
            'subtitle' => __('Only color validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //'regular'   => false, // Disable Regular Color
            //'hover'     => false, // Disable Hover Color
            //'active'    => false, // Disable Active Color
            //'visited'   => true,  // Enable Visited Color
            'default'  => [
                'regular' => '#aaa',
                'hover'   => '#bbb',
                'active'  => '#ccc',
            ],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Palette Colors', 'XDfmSHC'),
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/palette-color/" target="_blank">docs.reduxframework.com/core/fields/palette-color/</a>',
    'id'         => 'color-palette',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-palette-color',
            'type'     => 'palette',
            'title'    => __('Palette Color Option', 'XDfmSHC'),
            'subtitle' => __('Only color validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'default'  => 'red',
            'palettes' => [
                'red'  => [
                    '#ef9a9a',
                    '#f44336',
                    '#ff1744',
                ],
                'pink' => [
                    '#fce4ec',
                    '#f06292',
                    '#e91e63',
                    '#ad1457',
                    '#f50057',
                ],
                'cyan' => [
                    '#e0f7fa',
                    '#80deea',
                    '#26c6da',
                    '#0097a7',
                    '#00e5ff',
                ],
            ],
        ],
    ],
]);

// -> START Design Fields
Redux::setSection($opt_name, [
    'title' => __('Design Fields', 'XDfmSHC'),
    'id'    => 'design',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-wrench',
]);

Redux::setSection($opt_name, [
    'title'      => __('Background', 'XDfmSHC'),
    'id'         => 'design-background',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-background',
            'type'     => 'background',
            'output'   => ['body'],
            'title'    => __('Body Background', 'XDfmSHC'),
            'subtitle' => __('Body background with image, color, etc.', 'XDfmSHC'),
            //'default'   => '#FFFFFF',
        ],

    ],
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/background/" target="_blank">docs.reduxframework.com/core/fields/background/</a>',
]);

Redux::setSection($opt_name, [
    'title'      => __('Border', 'XDfmSHC'),
    'id'         => 'design-border',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/border/" target="_blank">docs.reduxframework.com/core/fields/border/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-header-border',
            'type'     => 'border',
            'title'    => __('Header Border Option', 'XDfmSHC'),
            'subtitle' => __('Only color validation can be done on this field type', 'XDfmSHC'),
            'output'   => ['.site-header'],
            // An array of CSS selectors to apply this font style to
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'default'  => [
                'border-color'  => '#1e73be',
                'border-style'  => 'solid',
                'border-top'    => '3px',
                'border-right'  => '3px',
                'border-bottom' => '3px',
                'border-left'   => '3px',
            ],
        ],
        [
            'id'       => 'opt-header-border-expanded',
            'type'     => 'border',
            'title'    => __('Header Border Option', 'XDfmSHC'),
            'subtitle' => __('Only color validation can be done on this field type', 'XDfmSHC'),
            'output'   => ['.site-header'],
            'all'      => false,
            // An array of CSS selectors to apply this font style to
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'default'  => [
                'border-color'  => '#1e73be',
                'border-style'  => 'solid',
                'border-top'    => '3px',
                'border-right'  => '3px',
                'border-bottom' => '3px',
                'border-left'   => '3px',
            ],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Dimensions', 'XDfmSHC'),
    'id'         => 'design-dimensions',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/dimensions/" target="_blank">docs.reduxframework.com/core/fields/dimensions/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'             => 'opt-dimensions',
            'type'           => 'dimensions',
            'units'          => ['em', 'px', '%'], // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title'          => __('Dimensions (Width/Height) Option', 'XDfmSHC'),
            'subtitle'       => __('Allow your users to choose width, height, and/or unit.', 'XDfmSHC'),
            'desc'           => __('You can enable or disable any piece of this field. Width, Height, or Units.', 'XDfmSHC'),
            'default'        => [
                'width'  => 200,
                'height' => 100,
            ],
        ],
        [
            'id'             => 'opt-dimensions-width',
            'type'           => 'dimensions',
            'units'          => ['em', 'px', '%'], // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title'          => __('Dimensions (Width) Option', 'XDfmSHC'),
            'subtitle'       => __('Allow your users to choose width, height, and/or unit.', 'XDfmSHC'),
            'desc'           => __('You can enable or disable any piece of this field. Width, Height, or Units.', 'XDfmSHC'),
            'height'         => false,
            'default'        => [
                'width'  => 200,
                'height' => 100,
            ],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Spacing', 'XDfmSHC'),
    'id'         => 'design-spacing',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/spacing/" target="_blank">docs.reduxframework.com/core/fields/spacing/</a>',
    'subsection' => true,
    'fields'     => [

        [
            'id'       => 'opt-spacing',
            'type'     => 'spacing',
            'output'   => ['.site-header'],
            // An array of CSS selectors to apply this font style to
            'mode'     => 'margin',
            // absolute, padding, margin, defaults to padding
            'all'      => true,
            // Have one field that applies to all
            //'top'           => false,     // Disable the top
            //'right'         => false,     // Disable the right
            //'bottom'        => false,     // Disable the bottom
            //'left'          => false,     // Disable the left
            //'units'         => 'em',      // You can specify a unit value. Possible: px, em, %
            //'units_extended'=> 'true',    // Allow users to select any type of unit
            //'display_units' => 'false',   // Set to false to hide the units if the units are specified
            'title'    => __('Padding/Margin Option', 'XDfmSHC'),
            'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'XDfmSHC'),
            'desc'     => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'XDfmSHC'),
            'default'  => [
                'margin-top'    => '1px',
                'margin-right'  => '2px',
                'margin-bottom' => '3px',
                'margin-left'   => '4px',
            ],
        ],
        [
            'id'             => 'opt-spacing-expanded',
            'type'           => 'spacing',
            // An array of CSS selectors to apply this font style to
            'mode'           => 'margin',
            // absolute, padding, margin, defaults to padding
            'all'            => false,
            // Have one field that applies to all
            //'top'           => false,     // Disable the top
            //'right'         => false,     // Disable the right
            //'bottom'        => false,     // Disable the bottom
            //'left'          => false,     // Disable the left
            'units'          => ['em', 'px', '%'], // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            //'display_units' => 'false',   // Set to false to hide the units if the units are specified
            'title'          => __('Padding/Margin Option', 'XDfmSHC'),
            'subtitle'       => __('Allow your users to choose the spacing or margin they want.', 'XDfmSHC'),
            'desc'           => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'XDfmSHC'),
            'default'        => [
                'margin-top'    => '1px',
                'margin-right'  => '2px',
                'margin-bottom' => '3px',
                'margin-left'   => '4px',
            ],
        ],
    ],
]);

// -> START Media Uploads
Redux::setSection($opt_name, [
    'title' => __('Media Uploads', 'XDfmSHC'),
    'id'    => 'media',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-picture',
]);

Redux::setSection($opt_name, [
    'title'      => __('Gallery', 'XDfmSHC'),
    'id'         => 'media-gallery',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/gallery/" target="_blank">docs.reduxframework.com/core/fields/gallery/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-gallery',
            'type'     => 'gallery',
            'title'    => __('Add/Edit Gallery', 'XDfmSHC'),
            'subtitle' => __('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Media', 'XDfmSHC'),
    'id'         => 'media-media',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/media/" target="_blank">docs.reduxframework.com/core/fields/media/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-media',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Media w/ URL', 'XDfmSHC'),
            'compiler' => 'true',
            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'desc'     => __('Basic media uploader with disabled URL input field.', 'XDfmSHC'),
            'subtitle' => __('Upload any media using the WordPress native uploader', 'XDfmSHC'),
            'default'  => ['url' => 'https://s.wordpress.org/style/images/codeispoetry.png'],
            //'hint'      => array(
            //    'title'     => 'Hint Title',
            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
            //)
        ],
        [
            'id'       => 'media-no-url',
            'type'     => 'media',
            'title'    => __('Media w/o URL', 'XDfmSHC'),
            'desc'     => __('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'XDfmSHC'),
            'subtitle' => __('Upload any media using the WordPress native uploader', 'XDfmSHC'),
        ],
        [
            'id'       => 'media-no-preview',
            'type'     => 'media',
            'preview'  => false,
            'title'    => __('Media No Preview', 'XDfmSHC'),
            'desc'     => __('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'XDfmSHC'),
            'subtitle' => __('Upload any media using the WordPress native uploader', 'XDfmSHC'),
            'hint'     => [
                'title'   => 'Test',
                'content' => 'This is a <b>hint</b> tool-tip for the webFonts field.<br/><br/>Add any HTML based text you like here.',
            ],
        ],
        [
            'id'         => 'opt-random-upload',
            'type'       => 'media',
            'title'      => __('Upload Anything - Disabled Mode', 'XDfmSHC'),
            'full_width' => true,
            'mode'       => false,
            // Can be set to false to allow any media type, or can also be set to any mime type.
            'desc'       => __('Basic media uploader with disabled URL input field.', 'XDfmSHC'),
            'subtitle'   => __('Upload any media using the WordPress native uploader', 'XDfmSHC'),
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Slides', 'XDfmSHC'),
    'id'         => 'additional-slides',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/slides/" target="_blank">docs.reduxframework.com/core/fields/slides/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'          => 'opt-slides',
            'type'        => 'slides',
            'title'       => __('Slides Options', 'XDfmSHC'),
            'subtitle'    => __('Unlimited slides with drag and drop sortings.', 'XDfmSHC'),
            'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'XDfmSHC'),
            'placeholder' => [
                'title'       => __('This is a title', 'XDfmSHC'),
                'description' => __('Description Here', 'XDfmSHC'),
                'url'         => __('Give us a link!', 'XDfmSHC'),
            ],
        ],
    ],
]);

// -> START Presentation Fields
Redux::setSection($opt_name, [
    'title' => __('Presentation Fields', 'XDfmSHC'),
    'id'    => 'presentation',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-screen',
]);

Redux::setSection($opt_name, [
    'title'      => __('Divide', 'XDfmSHC'),
    'id'         => 'presentation-divide',
    'desc'       => __('The spacer to the section menu as seen to the left (after this section block) is the divide "section". Also the divider below is the divide "field".', 'XDfmSHC') . '<br />' . __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/divide/" target="_blank">docs.reduxframework.com/core/fields/divide/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'   => 'opt-divide',
            'type' => 'divide',
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Info', 'XDfmSHC'),
    'id'         => 'presentation-info',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/info/" target="_blank">docs.reduxframework.com/core/fields/info/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'   => 'opt-info-field',
            'type' => 'info',
            'desc' => __('This is the info field, if you want to break sections up.', 'XDfmSHC'),
        ],
        [
            'id'    => 'opt-notice-info1',
            'type'  => 'info',
            'style' => 'info',
            'title' => __('This is a title.', 'XDfmSHC'),
            'desc'  => __('This is an info field with the <strong>info</strong> style applied. By default the <strong>normal</strong> style is applied.', 'XDfmSHC'),
        ],
        [
            'id'    => 'opt-info-warning',
            'type'  => 'info',
            'style' => 'warning',
            'title' => __('This is a title.', 'XDfmSHC'),
            'desc'  => __('This is an info field with the <strong>warning</strong> style applied.', 'XDfmSHC'),
        ],
        [
            'id'    => 'opt-info-success',
            'type'  => 'info',
            'style' => 'success',
            'icon'  => 'el el-info-circle',
            'title' => __('This is a title.', 'XDfmSHC'),
            'desc'  => __('This is an info field with the <strong>success</strong> style applied and an icon.', 'XDfmSHC'),
        ],
        [
            'id'    => 'opt-info-critical',
            'type'  => 'info',
            'style' => 'critical',
            'icon'  => 'el el-info-circle',
            'title' => __('This is a title.', 'XDfmSHC'),
            'desc'  => __('This is an info field with the <strong>critical</strong> style applied and an icon.', 'XDfmSHC'),
        ],
        [
            'id'    => 'opt-info-custom',
            'type'  => 'info',
            'style' => 'custom',
            'color' => 'purple',
            'icon'  => 'el el-info-circle',
            'title' => __('This is a title.', 'XDfmSHC'),
            'desc'  => __('This is an info field with the <strong>custom</strong> style applied, color arg passed, and an icon.', 'XDfmSHC'),
        ],
        [
            'id'     => 'opt-info-normal',
            'type'   => 'info',
            'notice' => false,
            'title'  => __('This is a title.', 'XDfmSHC'),
            'desc'   => __('This is an info non-notice field with the <strong>normal</strong> style applied.', 'XDfmSHC'),
        ],
        [
            'id'     => 'opt-notice-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => __('This is a title.', 'XDfmSHC'),
            'desc'   => __('This is an info non-notice field with the <strong>info</strong> style applied.', 'XDfmSHC'),
        ],
        [
            'id'     => 'opt-notice-warning',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'warning',
            'icon'   => 'el el-info-circle',
            'title'  => __('This is a title.', 'XDfmSHC'),
            'desc'   => __('This is an info non-notice field with the <strong>warning</strong> style applied and an icon.', 'XDfmSHC'),
        ],
        [
            'id'     => 'opt-notice-success',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'success',
            'icon'   => 'el el-info-circle',
            'title'  => __('This is a title.', 'XDfmSHC'),
            'desc'   => __('This is an info non-notice field with the <strong>success</strong> style applied and an icon.', 'XDfmSHC'),
        ],
        [
            'id'     => 'opt-notice-critical',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'critical',
            'icon'   => 'el el-info-circle',
            'title'  => __('This is a title.', 'XDfmSHC'),
            'desc'   => __('This is an non-notice field with the <strong>critical</strong> style applied and an icon.', 'XDfmSHC'),
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Section', 'XDfmSHC'),
    'id'         => 'presentation-section',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/section/" target="_blank">docs.reduxframework.com/core/fields/section/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'section-start',
            'type'     => 'section',
            'title'    => __('Section Example', 'XDfmSHC'),
            'subtitle' => __('With the "section" field you can create indented option sections.', 'XDfmSHC'),
            'indent'   => true, // Indent all options below until the next 'section' option is set.
        ],
        [
            'id'       => 'section-test',
            'type'     => 'text',
            'title'    => __('Field Title', 'XDfmSHC'),
            'subtitle' => __('Field Subtitle', 'XDfmSHC'),
        ],
        [
            'id'       => 'section-test-media',
            'type'     => 'media',
            'title'    => __('Field Title', 'XDfmSHC'),
            'subtitle' => __('Field Subtitle', 'XDfmSHC'),
        ],
        [
            'id'     => 'section-end',
            'type'   => 'section',
            'indent' => false, // Indent all options below until the next 'section' option is set.
        ],
        [
            'id'   => 'section-info',
            'type' => 'info',
            'desc' => __('And now you can add more fields below and outside of the indent.', 'XDfmSHC'),
        ],
    ],
]);
Redux::setSection($opt_name, [
    'id'   => 'presentation-divide-sample',
    'type' => 'divide',
]);

// -> START Switch & Button Set
Redux::setSection($opt_name, [
    'title' => __('Switch & Button Set', 'XDfmSHC'),
    'id'    => 'switch_buttonset',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-cogs',
]);

Redux::setSection($opt_name, [
    'title'      => __('Button Set', 'XDfmSHC'),
    'id'         => 'switch_buttonset-set',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/button-set/" target="_blank">docs.reduxframework.com/core/fields/button-set/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-button-set',
            'type'     => 'button_set',
            'title'    => __('Button Set Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value pairs for radio options
            'options'  => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            'default'  => '2',
        ],
        [
            'id'       => 'opt-button-set-multi',
            'type'     => 'button_set',
            'title'    => __('Button Set, Multi Select', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'multi'    => true,
            //Must provide key => value pairs for radio options
            'options'  => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            'default'  => ['2', '3'],
        ],

    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Switch', 'XDfmSHC'),
    'id'         => 'switch_buttonset-switch',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/switch/" target="_blank">docs.reduxframework.com/core/fields/switch/</a>',
    'subsection' => true,
    'fields'     => [

        [
            'id'       => 'switch-on',
            'type'     => 'switch',
            'title'    => __('Switch On', 'XDfmSHC'),
            'subtitle' => __('Look, it\'s on!', 'XDfmSHC'),
            'default'  => true,
        ],
        [
            'id'       => 'switch-off',
            'type'     => 'switch',
            'title'    => __('Switch Off', 'XDfmSHC'),
            'subtitle' => __('Look, it\'s on!', 'XDfmSHC'),
            //'options' => array('on', 'off'),
            'default'  => false,
        ],
        [
            'id'       => 'switch-parent',
            'type'     => 'switch',
            'title'    => __('Switch - Nested Children, Enable to show', 'XDfmSHC'),
            'subtitle' => __('Look, it\'s on! Also hidden child elements!', 'XDfmSHC'),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ],
        [
            'id'       => 'switch-child1',
            'type'     => 'switch',
            'required' => ['switch-parent', '=', '1'],
            'title'    => __('Switch - This and the next switch required for patterns to show', 'XDfmSHC'),
            'subtitle' => __('Also called a "fold" parent.', 'XDfmSHC'),
            'desc'     => __('Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'XDfmSHC'),
            'default'  => false,
        ],
        [
            'id'       => 'switch-child2',
            'type'     => 'switch',
            'required' => ['switch-parent', '=', '1'],
            'title'    => __('Switch2 - Enable the above switch and this one for patterns to show', 'XDfmSHC'),
            'subtitle' => __('Also called a "fold" parent.', 'XDfmSHC'),
            'desc'     => __('Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'XDfmSHC'),
            'default'  => false,
        ],
    ],
]);

// -> START Select Fields
Redux::setSection($opt_name, [
    'title' => __('Select Fields', 'XDfmSHC'),
    'id'    => 'select',
    'icon'  => 'el el-list-alt',
]);

Redux::setSection($opt_name, [
    'title'      => __('Select', 'XDfmSHC'),
    'id'         => 'select-select',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/select/" target="_blank">docs.reduxframework.com/core/fields/select/</a>',
    'subsection' => true,
    'fields'     => [

        [
            'id'       => 'opt-select',
            'type'     => 'select',
            'title'    => __('Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value pairs for select options
            'options'  => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            'default'  => '2',
        ],
        [
            'id'       => 'opt-select-stylesheet',
            'type'     => 'select',
            'title'    => __('Theme Stylesheet', 'XDfmSHC'),
            'subtitle' => __('Select your themes alternative color scheme.', 'XDfmSHC'),
            'options'  => ['default.css' => 'default.css', 'color1.css' => 'color1.css'],
            'default'  => 'default.css',
        ],
        [
            'id'       => 'opt-select-optgroup',
            'type'     => 'select',
            'title'    => __('Select Option with optgroup', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value pairs for select options
            'options'  => [
                'Group 1' => [
                    '1' => 'Opt 1',
                    '2' => 'Opt 2',
                    '3' => 'Opt 3',
                ],
                'Group 2' => [
                    '4' => 'Opt 4',
                    '5' => 'Opt 5',
                    '6' => 'Opt 6',
                ],
                '7'       => 'Opt 7',
                '8'       => 'Opt 8',
                '9'       => 'Opt 9',
            ],
            'default'  => '2',
        ],
        [
            'id'       => 'opt-multi-select',
            'type'     => 'select',
            'multi'    => true,
            'title'    => __('Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value pairs for radio options
            'options'  => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            //'required' => array( 'opt-select', 'equals', array( '1', '3' ) ),
            'default'  => ['2', '3'],
        ],
        [
            'id'   => 'opt-info',
            'type' => 'info',
            'desc' => __('You can easily add a variety of data from WordPress.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-categories',
            'type'     => 'select',
            'data'     => 'categories',
            'title'    => __('Categories Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-categories-multi',
            'type'     => 'select',
            'data'     => 'categories',
            'multi'    => true,
            'title'    => __('Categories Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-pages',
            'type'     => 'select',
            'data'     => 'pages',
            'title'    => __('Pages Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-multi-select-pages',
            'type'     => 'select',
            'data'     => 'pages',
            'multi'    => true,
            'title'    => __('Pages Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-tags',
            'type'     => 'select',
            'data'     => 'tags',
            'title'    => __('Tags Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-multi-select-tags',
            'type'     => 'select',
            'data'     => 'tags',
            'multi'    => true,
            'title'    => __('Tags Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-menus',
            'type'     => 'select',
            'data'     => 'menus',
            'title'    => __('Menus Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-multi-select-menus',
            'type'     => 'select',
            'data'     => 'menu',
            'multi'    => true,
            'title'    => __('Menus Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-post-type',
            'type'     => 'select',
            'data'     => 'post_type',
            'title'    => __('Post Type Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-multi-select-post-type',
            'type'     => 'select',
            'data'     => 'post_type',
            'multi'    => true,
            'title'    => __('Post Type Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-multi-select-sortable',
            'type'     => 'select',
            'data'     => 'post_type',
            'multi'    => true,
            'sortable' => true,
            'title'    => __('Post Type Multi Select Option + Sortable', 'XDfmSHC'),
            'subtitle' => __('This field also has sortable enabled!', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-posts',
            'type'     => 'select',
            'data'     => 'post',
            'title'    => __('Posts Select Option2', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-multi-select-posts',
            'type'     => 'select',
            'data'     => 'post',
            'multi'    => true,
            'title'    => __('Posts Multi Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-roles',
            'type'     => 'select',
            'data'     => 'roles',
            'title'    => __('User Role Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-capabilities',
            'type'     => 'select',
            'data'     => 'capabilities',
            'multi'    => true,
            'title'    => __('Capabilities Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-elusive',
            'type'     => 'select',
            'data'     => 'elusive-icons',
            'title'    => __('Elusive Icons Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('Here\'s a list of all the elusive icons by name and icon.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-select-users',
            'type'     => 'select',
            'data'     => 'users',
            'title'    => __('Users Select Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
    ],
]);
Redux::setSection($opt_name, [
    'title'      => __('Image Select', 'XDfmSHC'),
    'id'         => 'select-image_select',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/image-select/" target="_blank">docs.reduxframework.com/core/fields/image-select/</a>',
    'subsection' => true,
    'fields'     => [

        [
            'id'       => 'opt-image-select-layout',
            'type'     => 'image_select',
            'title'    => __('Images Option for Layout', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This uses some of the built in images, you can use them for layout options.', 'XDfmSHC'),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => [
                '1' => [
                    'alt' => '1 Column',
                    'img' => ReduxFramework::$_url . 'assets/img/1col.png',
                ],
                '2' => [
                    'alt' => '2 Column Left',
                    'img' => ReduxFramework::$_url . 'assets/img/2cl.png',
                ],
                '3' => [
                    'alt' => '2 Column Right',
                    'img' => ReduxFramework::$_url . 'assets/img/2cr.png',
                ],
                '4' => [
                    'alt' => '3 Column Middle',
                    'img' => ReduxFramework::$_url . 'assets/img/3cm.png',
                ],
                '5' => [
                    'alt' => '3 Column Left',
                    'img' => ReduxFramework::$_url . 'assets/img/3cl.png',
                ],
                '6' => [
                    'alt' => '3 Column Right',
                    'img' => ReduxFramework::$_url . 'assets/img/3cr.png',
                ],
            ],
            'default'  => '2',
        ],
        [
            'id'       => 'opt-patterns',
            'type'     => 'image_select',
            'tiles'    => true,
            'title'    => __('Images Option (with tiles => true)', 'XDfmSHC'),
            'subtitle' => __('Select a background pattern.', 'XDfmSHC'),
            'default'  => 0,
            'options'  => $sample_patterns,
        ],
        [
            'id'       => 'opt-image-select',
            'type'     => 'image_select',
            'title'    => __('Images Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => [
                '1' => ['title' => 'Opt 1', 'img' => 'images/align-none.png'],
                '2' => ['title' => 'Opt 2', 'img' => 'images/align-left.png'],
                '3' => ['title' => 'Opt 3', 'img' => 'images/align-center.png'],
                '4' => ['title' => 'Opt 4', 'img' => 'images/align-right.png'],
            ],
            'default'  => '2',
        ],
        [
            'id'         => 'opt-presets',
            'type'       => 'image_select',
            'presets'    => true,
            'full_width' => true,
            'title'      => __('Preset', 'XDfmSHC'),
            'subtitle'   => __('This allows you to set a json string or array to override multiple preferences in your theme.', 'XDfmSHC'),
            'default'    => 0,
            'desc'       => __('This allows you to set a json string or array to override multiple preferences in your theme.', 'XDfmSHC'),
            'options'    => [
                '1' => [
                    'alt'     => 'Preset 1',
                    'img'     => ReduxFramework::$_url . '../sample/presets/preset1.png',
                    'presets' => [
                        'switch-on'     => 1,
                        'switch-off'    => 1,
                        'switch-parent' => 1,
                    ],
                ],
                '2' => [
                    'alt'     => 'Preset 2',
                    'img'     => ReduxFramework::$_url . '../sample/presets/preset2.png',
                    'presets' => '{"opt-slider-label":"1", "opt-slider-text":"10"}',
                ],
            ],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Select Image', 'XDfmSHC'),
    'id'         => 'select-select_image',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/select-image/" target="_blank">docs.reduxframework.com/core/fields/select-image/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-select_image-field',
            'type'     => 'select_image',
            'title'    => __('Select Image', 'XDfmSHC'),
            'subtitle' => __('A preview of the selected image will appear underneath the select box.', 'XDfmSHC'),
            'options'  => [
                [
                    'alt' => 'Preset 1',
                    'img' => ReduxFramework::$_url . '../sample/presets/preset1.png',
                ],
                [
                    'alt' => 'Preset 2',
                    'img' => ReduxFramework::$_url . '../sample/presets/preset2.png',
                ],
            ],
            'default'  => ReduxFramework::$_url . '../sample/presets/preset2.png',
        ],

        [
            'id'       => 'opt-select-image',
            'type'     => 'select_image',
            'title'    => __('Select Image', 'XDfmSHC'),
            'subtitle' => __('A preview of the selected image will appear underneath the select box.', 'XDfmSHC'),
            'options'  => $sample_patterns,
            'default'  => ReduxFramework::$_url . '../sample/patterns/triangular.png',
        ],
    ],
]);

// -> START Slider / Spinner
Redux::setSection($opt_name, [
    'title' => __('Slider / Spinner', 'XDfmSHC'),
    'id'    => 'slider_spinner',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-adjust-alt',
]);

Redux::setSection($opt_name, [
    'title'      => __('Slider', 'XDfmSHC'),
    'id'         => 'slider_spinner-slider',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/slider/" target="_blank">docs.reduxframework.com/core/fields/slider/</a>',
    'fields'     => [

        [
            'id'            => 'opt-slider-label',
            'type'          => 'slider',
            'title'         => __('Slider Example 1', 'XDfmSHC'),
            'subtitle'      => __('This slider displays the value as a label.', 'XDfmSHC'),
            'desc'          => __('Slider description. Min: 1, max: 500, step: 1, default value: 250', 'XDfmSHC'),
            'default'       => 250,
            'min'           => 1,
            'step'          => 1,
            'max'           => 500,
            'display_value' => 'label',
        ],
        [
            'id'            => 'opt-slider-text',
            'type'          => 'slider',
            'title'         => __('Slider Example 2 with Steps (5)', 'XDfmSHC'),
            'subtitle'      => __('This example displays the value in a text box', 'XDfmSHC'),
            'desc'          => __('Slider description. Min: 0, max: 300, step: 5, default value: 75', 'XDfmSHC'),
            'default'       => 75,
            'min'           => 0,
            'step'          => 5,
            'max'           => 300,
            'display_value' => 'text',
        ],
        [
            'id'            => 'opt-slider-select',
            'type'          => 'slider',
            'title'         => __('Slider Example 3 with two sliders', 'XDfmSHC'),
            'subtitle'      => __('This example displays the values in select boxes', 'XDfmSHC'),
            'desc'          => __('Slider description. Min: 0, max: 500, step: 5, slider 1 default value: 100, slider 2 default value: 300', 'XDfmSHC'),
            'default'       => [
                1 => 100,
                2 => 300,
            ],
            'min'           => 0,
            'step'          => 5,
            'max'           => '500',
            'display_value' => 'select',
            'handles'       => 2,
        ],
        [
            'id'            => 'opt-slider-float',
            'type'          => 'slider',
            'title'         => __('Slider Example 4 with float values', 'XDfmSHC'),
            'subtitle'      => __('This example displays float values', 'XDfmSHC'),
            'desc'          => __('Slider description. Min: 0, max: 1, step: .1, default value: .5', 'XDfmSHC'),
            'default'       => .5,
            'min'           => 0,
            'step'          => .1,
            'max'           => 1,
            'resolution'    => 0.1,
            'display_value' => 'text',
        ],

    ],
    'subsection' => true,
]);

Redux::setSection($opt_name, [
    'title'      => __('Spinner', 'XDfmSHC'),
    'id'         => 'slider_spinner-spinner',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/spinner/" target="_blank">docs.reduxframework.com/core/fields/spinner/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'      => 'opt-spinner',
            'type'    => 'spinner',
            'title'   => __('JQuery UI Spinner Example 1', 'XDfmSHC'),
            'desc'    => __('JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'XDfmSHC'),
            'default' => '40',
            'min'     => '20',
            'step'    => '20',
            'max'     => '100',
        ],
    ],
]);

// -> START Typography
Redux::setSection($opt_name, [
    'title'  => __('Typography', 'XDfmSHC'),
    'id'     => 'typography',
    'desc'   => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/typography/" target="_blank">docs.reduxframework.com/core/fields/typography/</a>',
    'icon'   => 'el el-font',
    'fields' => [
        [
            'id'       => 'opt-typography-body',
            'type'     => 'typography',
            'title'    => __('Body Font', 'XDfmSHC'),
            'subtitle' => __('Specify the body font properties.', 'XDfmSHC'),
            'google'   => true,
            'output'   => ['h1, h2, h3, h4'],
            'default'  => [
                'color'       => '#dd9933',
                'font-size'   => '30px',
                'font-family' => 'Arial,Helvetica,sans-serif',
                'font-weight' => 'Normal',
            ],
        ],
        [
            'id'          => 'opt-typography',
            'type'        => 'typography',
            'title'       => __('Typography h2.site-description', 'XDfmSHC'),
            //'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            //'google'      => false,
            // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup' => true,
            // Select a backup non-google font in addition to a google font
            //'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            //'subsets'       => false, // Only appears if google is true and subsets not set to false
            //'font-size'     => false,
            //'line-height'   => false,
            //'word-spacing'  => true,  // Defaults to false
            //'letter-spacing'=> true,  // Defaults to false
            //'color'         => false,
            //'preview'       => false, // Disable the previewer
            'all_styles'  => true,
            // Enable all Google Font style/weight variations to be added to the page
            'output'      => ['.site-description'],
            // An array of CSS selectors to apply this font style to dynamically
            'compiler'    => ['site-description-compiler'],
            // An array of CSS selectors to apply this font style to dynamically
            'units'       => 'px',
            // Defaults to px
            'subtitle'    => __('Typography option with each property can be called individually.', 'XDfmSHC'),
            'default'     => [
                'color'       => '#333',
                'font-style'  => '700',
                'font-family' => 'Abel',
                'google'      => true,
                'font-size'   => '33px',
                'line-height' => '40px',
            ],
        ],
    ],
]);

// -> START Additional Types
Redux::setSection($opt_name, [
    'title' => __('Additional Types', 'XDfmSHC'),
    'id'    => 'additional',
    'desc'  => __('', 'XDfmSHC'),
    'icon'  => 'el el-magic',
    //'fields' => array(
    //    array(
    //        'id'              => 'opt-customizer-only-in-section',
    //        'type'            => 'select',
    //        'title'           => __( 'Customizer Only Option', 'XDfmSHC' ),
    //        'subtitle'        => __( 'The subtitle is NOT visible in customizer', 'XDfmSHC' ),
    //        'desc'            => __( 'The field desc is NOT visible in customizer.', 'XDfmSHC' ),
    //        'customizer_only' => true,
    //        //Must provide key => value pairs for select options
    //        'options'         => array(
    //            '1' => 'Opt 1',
    //            '2' => 'Opt 2',
    //            '3' => 'Opt 3'
    //        ),
    //        'default'         => '2'
    //    ),
    //)
]);

Redux::setSection($opt_name, [
    'title'      => __('Date', 'XDfmSHC'),
    'id'         => 'additional-date',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/date/" target="_blank">docs.reduxframework.com/core/fields/date/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-datepicker',
            'type'     => 'date',
            'title'    => __('Date Option', 'XDfmSHC'),
            'subtitle' => __('No validation can be done on this field type', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('Sorter', 'XDfmSHC'),
    'id'         => 'additional-sorter',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/sorter/" target="_blank">docs.reduxframework.com/core/fields/sorter/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-homepage-layout',
            'type'     => 'sorter',
            'title'    => 'Layout Manager Advanced',
            'subtitle' => 'You can add multiple drop areas or columns.',
            'compiler' => 'true',
            'options'  => [
                'enabled'  => [
                    'highlights' => 'Highlights',
                    'slider'     => 'Slider',
                    'staticpage' => 'Static Page',
                    'services'   => 'Services',
                ],
                'disabled' => [],
                'backup'   => [],
            ],
            'limits'   => [
                'disabled' => 1,
                'backup'   => 2,
            ],
        ],
        [
            'id'       => 'opt-homepage-layout-2',
            'type'     => 'sorter',
            'title'    => 'Homepage Layout Manager',
            'desc'     => 'Organize how you want the layout to appear on the homepage',
            'compiler' => 'true',
            'options'  => [
                'disabled' => [
                    'highlights' => 'Highlights',
                    'slider'     => 'Slider',
                ],
                'enabled'  => [
                    'staticpage' => 'Static Page',
                    'services'   => 'Services',
                ],
            ],
        ],
    ],

]);

Redux::setSection($opt_name, [
    'title'      => __('Raw', 'XDfmSHC'),
    'id'         => 'additional-raw',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/raw/" target="_blank">docs.reduxframework.com/core/fields/raw/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-raw_info_4',
            'type'     => 'raw',
            'title'    => __('Standard Raw Field', 'XDfmSHC'),
            'subtitle' => __('Subtitle', 'XDfmSHC'),
            'desc'     => __('Description', 'XDfmSHC'),
            'content'  => $sampleHTML,
        ],
        [
            'id'         => 'opt-raw_info_5',
            'type'       => 'raw',
            'full_width' => false,
            'title'      => __('Raw Field <code>full_width</code> False', 'XDfmSHC'),
            'subtitle'   => __('Subtitle', 'XDfmSHC'),
            'desc'       => __('Description', 'XDfmSHC'),
            'content'    => $sampleHTML,
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title' => __('Advanced Features', 'XDfmSHC'),
    'icon'  => 'el el-thumbs-up',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
]);

Redux::setSection($opt_name, [
    'title'      => __('Callback', 'XDfmSHC'),
    'id'         => 'additional-callback',
    'desc'       => __('For full documentation on this field, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/fields/callback/" target="_blank">docs.reduxframework.com/core/fields/callback/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-custom-callback',
            'type'     => 'callback',
            'title'    => __('Custom Field Callback', 'XDfmSHC'),
            'subtitle' => __('This is a completely unique field type', 'XDfmSHC'),
            'desc'     => __('This is created with a callback function, so anything goes in this field. Make sure to define the function though.', 'XDfmSHC'),
            'callback' => 'redux_my_custom_field',
        ],
    ],
]);

// -> START Validation
Redux::setSection($opt_name, [
    'title'      => __('Field Validation', 'XDfmSHC'),
    'id'         => 'validation',
    'desc'       => __('For full documentation on validation, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/the-basics/validation/" target="_blank">docs.reduxframework.com/core/the-basics/validation/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-text-email',
            'type'     => 'text',
            'title'    => __('Text Option - Email Validated', 'XDfmSHC'),
            'subtitle' => __('This is a little space under the Field Title in the Options table, additional info is good in here.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'email',
            'msg'      => 'custom error message',
            'default'  => 'test@test.com',
        ],
        [
            'id'       => 'opt-text-post-type',
            'type'     => 'text',
            'title'    => __('Text Option with Data Attributes', 'XDfmSHC'),
            'subtitle' => __('You can also pass an options array if you want. Set the default to whatever you like.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'data'     => 'post_type',
        ],
        [
            'id'       => 'opt-multi-text',
            'type'     => 'multi_text',
            'title'    => __('Multi Text Option - Color Validated', 'XDfmSHC'),
            'validate' => 'color',
            'subtitle' => __('If you enter an invalid color it will be removed. Try using the text "blue" as a color.  ;)', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
        ],
        [
            'id'       => 'opt-text-url',
            'type'     => 'text',
            'title'    => __('Text Option - URL Validated', 'XDfmSHC'),
            'subtitle' => __('This must be a URL.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'url',
            'default'  => 'http://reduxframework.com',
        ],
        [
            'id'       => 'opt-text-numeric',
            'type'     => 'text',
            'title'    => __('Text Option - Numeric Validated', 'XDfmSHC'),
            'subtitle' => __('This must be numeric.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'numeric',
            'default'  => '0',
        ],
        [
            'id'       => 'opt-text-comma-numeric',
            'type'     => 'text',
            'title'    => __('Text Option - Comma Numeric Validated', 'XDfmSHC'),
            'subtitle' => __('This must be a comma separated string of numerical values.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'comma_numeric',
            'default'  => '0',
        ],
        [
            'id'       => 'opt-text-no-special-chars',
            'type'     => 'text',
            'title'    => __('Text Option - No Special Chars Validated', 'XDfmSHC'),
            'subtitle' => __('This must be a alpha numeric only.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'no_special_chars',
            'default'  => '0',
        ],
        [
            'id'       => 'opt-text-str_replace',
            'type'     => 'text',
            'title'    => __('Text Option - Str Replace Validated', 'XDfmSHC'),
            'subtitle' => __('You decide.', 'XDfmSHC'),
            'desc'     => __('This field\'s default value was changed by a filter hook!', 'XDfmSHC'),
            'validate' => 'str_replace',
            'str'      => [
                'search'      => ' ',
                'replacement' => 'thisisaspace',
            ],
            'default'  => 'This is the default.',
        ],
        [
            'id'       => 'opt-text-preg_replace',
            'type'     => 'text',
            'title'    => __('Text Option - Preg Replace Validated', 'XDfmSHC'),
            'subtitle' => __('You decide.', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'preg_replace',
            'preg'     => [
                'pattern'     => '/[^a-zA-Z_ -]/s',
                'replacement' => 'no numbers',
            ],
            'default'  => '0',
        ],
        [
            'id'                => 'opt-text-custom_validate',
            'type'              => 'text',
            'title'             => __('Text Option - Custom Callback Validated', 'XDfmSHC'),
            'subtitle'          => __('You decide.', 'XDfmSHC'),
            'desc'              => __('Enter <code>1</code> and click <strong>Save Changes</strong> for an error message, or enter <code>2</code> and click <strong>Save Changes</strong> for a warning message.', 'XDfmSHC'),
            'validate_callback' => 'redux_validate_callback_function',
            'default'           => '0',
        ],
        //array(
        //    'id'                => 'opt-text-custom_validate-class',
        //    'type'              => 'text',
        //    'title'             => __( 'Text Option - Custom Callback Validated - Class', 'XDfmSHC' ),
        //    'subtitle'          => __( 'You decide.', 'XDfmSHC' ),
        //    'desc'              => __( 'This is the description field, again good for additional info.', 'XDfmSHC' ),
        //    'validate_callback' => array( 'Class_Name', 'validate_callback_function' ),
        //    // You can pass the current class
        //    // Or pass the class name and method
        //    //'validate_callback' => array(
        //    //    'Redux_Framework_sample_config',
        //    //    'validate_callback_function'
        //    //),
        //    'default'           => '0'
        //),
        [
            'id'       => 'opt-textarea-no-html',
            'type'     => 'textarea',
            'title'    => __('Textarea Option - No HTML Validated', 'XDfmSHC'),
            'subtitle' => __('All HTML will be stripped', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'no_html',
            'default'  => 'No HTML is allowed in here.',
        ],
        [
            'id'       => 'opt-textarea-html',
            'type'     => 'textarea',
            'title'    => __('Textarea Option - HTML Validated', 'XDfmSHC'),
            'subtitle' => __('HTML Allowed (wp_kses)', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
            'default'  => 'HTML is allowed in here.',
        ],
        [
            'id'           => 'opt-textarea-some-html',
            'type'         => 'textarea',
            'title'        => __('Textarea Option - HTML Validated Custom', 'XDfmSHC'),
            'subtitle'     => __('Custom HTML Allowed (wp_kses)', 'XDfmSHC'),
            'desc'         => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate'     => 'html_custom',
            'default'      => '<p>Some HTML is allowed in here.</p>',
            'allowed_html' => [
                'a'      => [
                    'href'  => [],
                    'title' => [],
                ],
                'br'     => [],
                'em'     => [],
                'strong' => [],
            ], //see http://codex.wordpress.org/Function_Reference/wp_kses
        ],
        [
            'id'       => 'opt-textarea-js',
            'type'     => 'textarea',
            'title'    => __('Textarea Option - JS Validated', 'XDfmSHC'),
            'subtitle' => __('JS will be escaped', 'XDfmSHC'),
            'desc'     => __('This is the description field, again good for additional info.', 'XDfmSHC'),
            'validate' => 'js',
        ],
    ],
]);

// -> START Required
Redux::setSection($opt_name, [
    'title'      => __('Field Required / Linking', 'XDfmSHC'),
    'id'         => 'required',
    'desc'       => __('For full documentation on validation, visit: ', 'XDfmSHC') . '<a href="//docs.reduxframework.com/core/the-basics/required/" target="_blank">docs.reduxframework.com/core/the-basics/required/</a>',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'opt-required-basic',
            'type'     => 'switch',
            'title'    => 'Basic Required Example',
            'subtitle' => 'Click <code>On</code> to see the text field appear.',
            'default'  => false,
        ],
        [
            'id'       => 'opt-required-basic-text',
            'type'     => 'text',
            'title'    => 'Basic Text Field',
            'subtitle' => 'This text field is only show when the above switch is set to <code>On</code>, using the <code>required</code> argument.',
            'required' => ['opt-required-basic', '=', true],
        ],
        [
            'id'   => 'opt-required-divide-1',
            'type' => 'divide',
        ],
        [
            'id'       => 'opt-required-nested',
            'type'     => 'switch',
            'title'    => 'Nested Required Example',
            'subtitle' => 'Click <code>On</code> to see another set of options appear.',
            'default'  => false,
        ],
        [
            'id'       => 'opt-required-nested-buttonset',
            'type'     => 'button_set',
            'title'    => 'Multiple Nested Required Examples',
            'subtitle' => 'Click any buton to show different fields based on their <code>required</code> statements.',
            'options'  => [
                'button-text'     => 'Show Text Field',
                'button-textarea' => 'Show Textarea Field',
                'button-editor'   => 'Show WP Editor',
                'button-ace'      => 'Show ACE Editor',
            ],
            'required' => ['opt-required-nested', '=', true],
            'default'  => 'button-text',
        ],
        [
            'id'       => 'opt-required-nested-text',
            'type'     => 'text',
            'title'    => 'Nested Text Field',
            'required' => ['opt-required-nested-buttonset', '=', 'button-text'],
        ],
        [
            'id'       => 'opt-required-nested-textarea',
            'type'     => 'textarea',
            'title'    => 'Nested Textarea Field',
            'required' => ['opt-required-nested-buttonset', '=', 'button-textarea'],
        ],
        [
            'id'       => 'opt-required-nested-editor',
            'type'     => 'editor',
            'title'    => 'Nested Editor Field',
            'required' => ['opt-required-nested-buttonset', '=', 'button-editor'],
        ],
        [
            'id'       => 'opt-required-nested-ace',
            'type'     => 'ace_editor',
            'title'    => 'Nested ACE Editor Field',
            'required' => ['opt-required-nested-buttonset', '=', 'button-ace'],
        ],
        [
            'id'   => 'opt-required-divide-2',
            'type' => 'divide',
        ],
        [
            'id'       => 'opt-required-select',
            'type'     => 'select',
            'title'    => 'Select Required Example',
            'subtitle' => 'Select a different option to display its value.  Required may be used to display multiple & reusable fields',
            'options'  => [
                'no-sidebar'    => 'No Sidebars',
                'left-sidebar'  => 'Left Sidebar',
                'right-sidebar' => 'Right Sidebar',
                'both-sidebars' => 'Both Sidebars',
            ],
            'default'  => 'no-sidebar',
            'select2'  => ['allowClear' => false],
        ],
        [
            'id'       => 'opt-required-select-left-sidebar',
            'type'     => 'select',
            'title'    => 'Select Left Sidebar',
            'data'     => 'sidebars',
            'default'  => '',
            'required' => ['opt-required-select', '=', ['left-sidebar', 'both-sidebars']],
        ],
        [
            'id'       => 'opt-required-select-right-sidebar',
            'type'     => 'select',
            'title'    => 'Select Right Sidebar',
            'data'     => 'sidebars',
            'default'  => '',
            'required' => ['opt-required-select', '=', ['right-sidebar', 'both-sidebars']],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'title'      => __('WPML Integration', 'XDfmSHC'),
    'desc'       => __('These fields can be fully translated by WPML (WordPress Multi-Language). This serves as an example for you to implement. For extra details look at our <a href="//docs.reduxframework.com/core/advanced/wpml-integration/" target="_blank">WPML Implementation</a> documentation.', 'XDfmSHC'),
    'subsection' => true,
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields'     => [
        [
            'id'    => 'wpml-text',
            'type'  => 'textarea',
            'title' => __('WPML Text', 'XDfmSHC'),
            'desc'  => __('This string can be translated via WPML.', 'XDfmSHC'),
        ],
        [
            'id'      => 'wpml-multicheck',
            'type'    => 'checkbox',
            'title'   => __('WPML Multi Checkbox', 'XDfmSHC'),
            'desc'    => __('You can literally translate the values via key.', 'XDfmSHC'),
            //Must provide key => value pairs for multi checkbox options
            'options' => [
                '1' => 'Option 1',
                '2' => 'Option 2',
                '3' => 'Option 3',
            ],
        ],
    ],
]);

Redux::setSection($opt_name, [
    'icon'            => 'el el-list-alt',
    'title'           => __('Customizer Only', 'XDfmSHC'),
    'desc'            => __('<p class="description">This Section should be visible only in Customizer</p>', 'XDfmSHC'),
    'customizer_only' => true,
    'fields'          => [
        [
            'id'              => 'opt-customizer-only',
            'type'            => 'select',
            'title'           => __('Customizer Only Option', 'XDfmSHC'),
            'subtitle'        => __('The subtitle is NOT visible in customizer', 'XDfmSHC'),
            'desc'            => __('The field desc is NOT visible in customizer.', 'XDfmSHC'),
            'customizer_only' => true,
            //Must provide key => value pairs for select options
            'options'         => [
                '1' => 'Opt 1',
                '2' => 'Opt 2',
                '3' => 'Opt 3',
            ],
            'default'         => '2',
        ],
    ],
]);

/*
 * <--- END SECTIONS
 */

/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
 *
 * --> Action hook examples
 *
 */

// If Redux is running as a plugin, this will remove the XDfmSHC notice and links
//add_action( 'redux/loaded', 'remove_XDfmSHC' );

// Function to test the compiler hook and XDfmSHC CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {
    function compiler_action($options, $css, $changed_values) {
        echo '<h1>The compiler hook has run!</h1>';
        echo '<pre>';
        print_r($changed_values); // Values that have changed since the last save
        echo '</pre>';
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {
    function redux_validate_callback_function($field, $value, $existing_value) {
        $error   = false;
        $warning = false;

        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value   = $existing_value;
        }

        $return['value'] = $value;

        if ($error == true) {
            $field['msg']    = 'your custom error message';
            $return['error'] = $field;
        }

        if ($warning == true) {
            $field['msg']      = 'your custom warning message';
            $return['warning'] = $field;
        }

        return $return;
    }
}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {
    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if (!function_exists('dynamic_section')) {
    function dynamic_section($sections) {
        //$sections = array();
        $sections[] = [
            'title'  => __('Section via hook', 'XDfmSHC'),
            'desc'   => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'XDfmSHC'),
            'icon'   => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => [],
        ];

        return $sections;
    }
}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if (!function_exists('change_arguments')) {
    function change_arguments($args) {
        //$args['dev_mode'] = true;

        return $args;
    }
}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {
    function change_defaults($defaults) {
        $defaults['str_replace'] = 'Testing filter hook!';

        return $defaults;
    }
}
