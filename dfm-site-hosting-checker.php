<?php

/**
 *
 * Dfm Site Hosting Checker 
 *
 * @package           Dfm Site Hosting Checker 
 * @author            Xplantr Ltd.
 * @copyright         2020 khalifalmahmud
 * @license           GPL-2.0-or-later
 *
 * @XDfmSHC
 * Plugin Name:       Dfm Site Hosting Checker 
 * Plugin URI:        #
 * Description:       This plugin provides a list of website owners who have removed their hosting from a Specefic hosting provider.
 * Version:           1.0.0
 * Requires at least: 3.0.1
 * Requires PHP:      5.0
 * Author:            Xplantr Ltd.
 * Author URI:        https://www.xplantr.com/
 * Text Domain:       XDfmSHC
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */
/*
Dfm Site Hosting Checker  is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
Dfm Site Hosting Checker  is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with Dfm Site Hosting Checker . If not, see http: //www.gnu.org/licenses/gpl-2.0.txt
 */

namespace KHALIF\XDfmSHC;

use KHALIF\XDfmSHC\ACTIONS\ACTIVATION\Activation;
use KHALIF\XDfmSHC\ACTIONS\DEACTIVATION\Deactivation;
use KHALIF\XDfmSHC\INCLUDES\Includes;

/**
 * If this file is called directly, abort.
 */
if (!defined('ABSPATH')) {
    die('You Cannot Access This Page Directly');
}
/**
 * Composer Require
 */
require_once __DIR__ . '/vendor/autoload.php';
final class XDfmSHC {
    /**
     * constructor
     */
    private function __construct() {
        load_plugin_textdomain('XDfmSHC', false, basename(dirname(__FILE__)) . '/languages');
        $this->define_constants();
        register_activation_hook(__FILE__, [$this, 'activation']);
        register_deactivation_hook(__FILE__, [$this, 'deactivation']);
        add_action('plugins_loaded', [$this, 'plugin_init']);
    }
    /**
     * Define plugin constants
     */
    public function define_constants() {
        $Plugin_Data = get_file_data(__FILE__, ['version' => 'Version'], false);
        if (($_SERVER['SERVER_ADDR'] == '::1' || $_SERVER['SERVER_ADDR'] == '127.0.0.1')) {
            define(__NAMESPACE__ . '\VERSION', time());
        } else {
            define(__NAMESPACE__ . '\VERSION', $Plugin_Data['version']);
        }
        define(__NAMESPACE__ . '\DIR_URL', plugin_dir_url(__FILE__));
        define(__NAMESPACE__ . '\DIR_PATH', plugin_dir_path(__FILE__));
    }
    /**
     * What Will Happen After Plugin Active
     */
    public function activation() {
        new Activation;
    }
    /**
     * What Will Happen After Plugin Deactive
     */
    public function deactivation() {
        new Deactivation;
    }
    /**
     * Initializes the plugin assets
     */
    public function plugin_init() {
        new Includes;
    }
    /**
     * Initializes a singleton instance
     */
    public static function init() {
        static $instance = false;
        if (!$instance) {
            $instance = new self();
        }
        return $instance;
    }
}
/**
 * Initializes the plugin
 */
function run() {
    return XDfmSHC::init();
}
/**
 * kick-off the plugin
 */
run();
