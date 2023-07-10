<?php

namespace Weberwin\PluginTemplate\Admin;

use Weberwin\PluginTemplate\Plugin;

class Admin{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_admin_menu']);
    }
    public function add_admin_menu(){
	    add_menu_page(
		    __( 'Plugin Template', Plugin::PLUGIN_DOMAIN ),
			__( 'Plugin Template title', Plugin::PLUGIN_DOMAIN ),
		    'manage_options',
		    Plugin::PLUGIN_NAMESPACE,
		    function () {
			    require_once Plugin::get_html_url() . '/admin/admin.php';
		    }
	    );
    }
}