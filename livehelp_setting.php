<?php
function livehelp_setting() {
  require_once( LIVEHELP_PLUGIN_DIR . "/livehelp_config_database.php");

  $livehelp_config_database = new livehelp_config_database();
  $livehelp_config = array();

  if ($_POST) {
    if (wp_verify_nonce($_POST['livehelp_setting'], 'livehelp_setting_action')) {
      foreach ($_POST as $key => $value) {
        $$key = $value;
        if (!in_array($key, array('livehelp_setting', '_wp_http_referer', 'submit'))) {
          $livehelp_config[$key] = trim($value);
        }
      }

      if ($livehelp_config) {
        foreach($livehelp_config as $config_name => $config_value) {
          if (!$livehelp_config_database->check_exist_config_name($config_name)) {
            $livehelp_config_database->insert_config(array('config_name' => $config_name, 'config_value' => $config_value));
          } else {
            $livehelp_config_database->update_config_value(array('config_name' => $config_name, 'config_value' => $config_value));
          }
        }
      }
    }
  }
  $livehelp_config = $livehelp_config_database->get_list_config();


  require_once( LIVEHELP_PLUGIN_DIR . '/templates/setting.php' );
}