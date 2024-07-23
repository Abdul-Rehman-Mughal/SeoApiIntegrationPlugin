<?php

/**
 * @package Code Craft Plugin
 */



 
// use Codecrafterplugin\Inc\Activate;
// use Codecrafterplugin\Inc\Deactivate;
// use Codecrafterplugin\Inc\Admin\AdminPages;

// class CodeCrafterPlugin
// {
//     public $plugin;

//     public function __construct()
//     {
//         $this->create_post_type();
//         $this->plugin = plugin_basename(__FILE__);
//     }

//     public function register()
//     {
//         add_action('admin_enqueue_scripts', array($this, 'enqueue'));
//         add_action('admin_menu', array($this, 'add_admin_pages'));
//         add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
//     }

//     public function settings_link($links)
//     {
//         $settings_link = '<a href="admin.php?page=code_crafter">Settings</a>';
//         array_push($links, $settings_link);
//         return $links;
//     }

//     public function add_admin_pages()
//     {
//         add_menu_page('Code Crafter', 'Code Craft', 'manage_options', 'code_crafter', array($this, 'admin_index'), 'dashicons-store', 110);
//     }

//     public function admin_index()
//     {
//         require_once plugin_dir_path(__FILE__) . '/templates/admin.php';
//     }

//     protected function create_post_type()
//     {
//         add_action('init', array($this, 'custom_post_type'));
//     }
//     public function activate()
//     {
//         Activate::activate();
//     }

//     public function deactivate()
//     {
//         Deactivate::deactivate();
//     }

//     public function custom_post_type()
//     {
//         register_post_type('book', ['public' => true, 'label' => 'Books']);
//     }

//     public function enqueue()
//     {
//         wp_enqueue_style('mypluginstyle', plugins_url('/assets/style.css', __FILE__));
//         wp_enqueue_script('mypluginscript', plugins_url('/assets/script.js', __FILE__));
//     }
// }

// if (class_exists('CodeCrafterPlugin')) {
//     $CodeCrafterPlugin = new CodeCrafterPlugin();
//     $CodeCrafterPlugin->register();
// }

// register_activation_hook(__FILE__, array($CodeCrafterPlugin, 'activate'));

// register_deactivation_hook(__FILE__, array($CodeCrafterPlugin, 'deactivate'));