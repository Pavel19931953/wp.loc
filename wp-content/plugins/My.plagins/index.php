<?php

/*
   Plugin Name: Мой первый плагин
   Plugin URI: 
   description: Тестовый плагин
   Version: 
   Author: Мироничев Павел
   Author URI: 
*/

function cms2cms_test_install() {
   global $wpdb;
   $table_name = $wpdb->prefix . 'cms2cms_test ';



 
    if($wpdb->get_var("show tables like '$table_name'") != $table_name) 
    {
      $sql = "CREATE TABLE $table_name (
      
      `meta_key` varchar(255) NOT NULL,
        `meta_value` text NOT NULL
      
        
        
        
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

    }
}

register_activation_hook(__FILE__,'cms2cms_test_install');

add_action('admin_menu', 'top_plagin_register_admin_page');
function top_plagin_register_admin_page() {
    add_submenu_page(
        'edit.php',
        'Тестовый Плагин',
        ' Тестовый Плагин !',
        'manage_categories',
        ' top-plagin',
        'top_plagin_render_admin_page'
    );
}

function top_plagin_render_admin_page() {
    include plugin_dir_path(__FILE__) . 'admin.plagin.php';
}


