<?php

namespace Weberwin\PluginTemplate;

use Weberwin\PluginTemplate\Admin\Admin;

class Plugin
{
    const PLUGIN_NAMESPACE = 'plugin-template';
    const PLUGIN_DOMAIN = 'plugin-template';

    public function __construct()
    {
        $this->init();
    }

    public function init(){
        new Admin();
    }

    public static function get_core_url(): string{
        return __DIR__ . '/core/';
    }
    public static function get_html_url(): string{
        return __DIR__ . '/html/';
    }
    public static function get_assets_url(): string{
        return __DIR__ . '/assets/';
    }
    public static function get_js_url(): string{
        return __DIR__ . '/assets/js/';
    }
    public static function get_css_url(): string{
        return __DIR__ . '/assets/css/';
    }


}