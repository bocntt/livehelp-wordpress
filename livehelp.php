<?php
/*
 * Plugin Name: Livehelp
 * Version: 1.0
 * Author: 34TTeam
*/

define( 'LIVEHELP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'LIVEHELP_DOMAIN' , 'livehelp' );

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'fnc_livehelp_install');

function fnc_livehelp_install() {
	if(is_admin()) {
		require_once(LIVEHELP_PLUGIN_DIR . "/install.livehelp.php");
  }
}

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'fnc_livehelp_remove');

function fnc_livehelp_remove() {
	if(is_admin()) {
		// require_once(LIVEHELP_PLUGIN_DIR . "/uninstall.livehelp.php");
	}
}

if (is_admin()) {
  require_once LIVEHELP_PLUGIN_DIR . '/livehelp_setting.php';
  add_action('admin_menu', 'fnc_livehelp_admin_menu');
  function fnc_livehelp_admin_menu() {
    add_menu_page('Livehelp Settings', 'Livehelp Settings', 'manage_options', 'livehelp_setting', 'livehelp_setting');
  }
}

add_action('wp_footer', 'fnc_livehelp_init');

function fnc_livehelp_init() {
  if( wp_script_is( 'jquery', 'done' ) ) {
    require_once( LIVEHELP_PLUGIN_DIR . '/livehelp_config_database.php');

    $livehelp_config_database = new livehelp_config_database();
    $livehelp_config = $livehelp_config_database->get_list_config();

    $siteAccess = '';
    $indexSite = 'index.php/';
    $is_internal_popup = (isset($livehelp_config['is_internal_popup']) && $livehelp_config['is_internal_popup'] == 'on') ? '/(click)/internal' : '';
    $is_disable_online_tracking = (isset($livehelp_config['is_disable_online_tracking']) && $livehelp_config['is_disable_online_tracking'] == 'on') ? '/(dot)/true' : '';
    $is_show_leave_form = (isset($livehelp_config['is_show_leave_form']) && $livehelp_config['is_show_leave_form'] == 'on') ? '/(leaveamessage)/true' : '';
    $is_hide_then_offline = (isset($livehelp_config['is_hide_then_offline']) && $livehelp_config['is_hide_then_offline'] == 'on') ? '/(hide_offline)/true' : '';
    $is_operator_message = (isset($livehelp_config['is_operator_message']) && $livehelp_config['is_operator_message'] == 'on') ? '/(check_operator_messages)/true' : '';
    $is_disable_pro_active_invitations = (isset($livehelp_config['is_disable_pro_active_invitations']) && $livehelp_config['is_disable_pro_active_invitations'] == 'on') ? '/(disable_pro_active)/true' : '';
    $id_identifier = (isset($livehelp_config['site_identifier']) && $livehelp_config['site_identifier'] != '') ? '/(identifier)/'.$livehelp_config['site_identifier'] : '';
    $id_ma = (isset($livehelp_config['minimize']) && $livehelp_config['minimize'] != '') ? '/(ma)/'.$livehelp_config['minimize'] : '';
    $position = (isset($livehelp_config['position'])) ? $livehelp_config['position'] : 'bottom_right';
    $id_position =  '/(position)/'. $position;
    $id_tag = '';
    $top_text = (isset($livehelp_config['top_text']) && $livehelp_config['top_text'] != '') ? $livehelp_config['top_text'] : 350;
    $top = '/(top)/'. $top_text;
    $unit_top = (isset($livehelp_config['unit_top'])) ? $livehelp_config['unit_top'] : 'pixels';
	  $topposition = '/(units)/'. $unit_top;

    if (isset($livehelp_config['position']) && $livehelp_config['position'] == 'original'){
        $id_tag = '<div id="lhc_status_container" ></div>';
    };

    $embed_domain = (isset($livehelp_config['embed_domain']) && $livehelp_config['embed_domain'] != '') ? ',domain:\''. $livehelp_config['embed_domain'] .'\'' : '';
    $embed_domain_new = (isset($livehelp_config['embed_domain']) && $livehelp_config['embed_domain'] != '') ? $livehelp_config['embed_domain'] : '';
    $chatOptionsVariable = 'LHCChatOptions';
    $http_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    $widget_height = isset($livehelp_config['widget_height']) ? $livehelp_config['widget_height'] : 340;
    $widget_width = isset($livehelp_config['widget_width']) ? $livehelp_config['widget_width'] : 320;
    $popup_height = isset($livehelp_config['popup_height']) ? $livehelp_config['popup_height'] : 520;
    $popup_width = isset($livehelp_config['popup_width']) ? $livehelp_config['popup_width'] : 500;
    $http_mode = isset($livehelp_config['http_mode']) ? $livehelp_config['http_mode'] : '';

    $script = '';
    $script .= '<script type="text/javascript">';
    $script .= 'var ' . $chatOptionsVariable .' = {};';
    $script .= $chatOptionsVariable .'.opt = {widget_height:'. $widget_height .',widget_width:'. $widget_width .',popup_height:'. $popup_height .',popup_width:'. $popup_width . $embed_domain .'};';
    $script .= '(function() {';
    $script .=     'var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;';
    $script .=     'var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf(\'://\')+1)) : \'\';';
    $script .=     'var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : \'\';';
    $script .=     'po.src = \''. $http_mode .'//' . (($embed_domain_new != '') ? $embed_domain_new : $http_host) . '/livehelp/'. $indexSite . $siteAccess . 'chat/getstatus' . $is_internal_popup . $id_position . $id_ma . $is_hide_then_offline . $is_disable_online_tracking. $is_operator_message . $top . $topposition . $is_show_leave_form . $id_identifier . $is_disable_pro_active_invitations . '?r=\'+referrer+\'&l=\'+location;';
    $script .=     'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);';
    $script .=   '})();';
    $script .= '</scr' . 'ipt>';

    echo $id_tag . $script;
  }
}