<?php

/**
 * @author khalifalmahmud
 * @package XDfmSHC
 */

namespace KHALIF\XDfmSHC\INCLUDES\Frameworks\carbonfields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Carbon fields Composer Require
 */
require_once __DIR__ . '/carbon-fields/vendor/autoload.php';
class carbonfields {
    /**
     * Class constructor.
     */
    public function __construct() {
        crb_load();
        add_action('carbon_fields_register_fields', [$this, 'crb_attach_theme_options']);
    }
    /**
     * Methods
     */
    function crb_attach_theme_options() {
        $employees_labels = array(
            'plural_name' => 'Domains',
            'singular_name' => 'Domain',
        );
        Container::make('theme_options', __('DFM Hosting'))
            ->set_page_file('dfm-s-h-c-main-page')
            ->set_icon('dashicons-carrot')
            ->add_tab(__('Add Provider Info'), array(
                Field::make('text', 'dfm_add_provider_ip', 'Add Provider IP')
                    ->set_attribute('placeholder', 'Enter Provider IP Address')->set_required(true),
            ))
            ->add_tab(__('Add Domains'), array(
                Field::make('complex', 'dfm_domains_add_repeat', 'Add Domains')
                    ->setup_labels($employees_labels)
                    ->set_layout('grid')
                    ->add_fields(array(
                        Field::make('text', 'domain_name', 'Domain Name')->set_width(50)->set_required(true),
                        Field::make('text', 'domain_ip', 'IP')->set_width(50),
                    )),
            ));
        // SubPage 
        // Container::make('theme_options', __('Settings'))
        //     ->set_page_file('dfm-s-h-c-settings-page')
        //     ->set_page_parent($parent_menu) // reference to a top level container
        //     ->add_fields(array(
        //         Field::make('text', 'crb_facebook_link'),
        //         Field::make('text', 'crb_twitter_link'),
        //     ));
    }
}
function crb_load() {
    \Carbon_Fields\Carbon_Fields::boot();
}
