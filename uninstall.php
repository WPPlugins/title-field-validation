<?php
//--if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$option_name = 'title_field_validation';
 
delete_option($option_name);
 
//--for site options in Multisite
delete_site_option($option_name);


//--Drop a custom database table
global $wpdb;
$table_validation = $wpdb->prefix."tfv_validation";
$wpdb->query("DROP TABLE IF EXISTS $table_validation");
?>