<?php
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
global $wpdb;

dbDelta(create_table_livehelp_config_sql());

function create_table_livehelp_config_sql() {
	global $wpdb;
	$table_name = $wpdb->prefix . "livehelp_config";
	$sql = "CREATE TABLE IF NOT EXISTS ".$table_name." (
      `config_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			`config_name` varchar(250) NOT NULL,
			`config_value` longtext NOT NULL,
			PRIMARY KEY (`config_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	return $sql;
}
