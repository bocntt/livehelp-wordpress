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
		// require_once(LIVEHELP_PLUGIN_DIR . "/install.livehelp.php");
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
  ?>
    <!-- livehelp -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <script type="text/javascript">
    var LHCChatOptions = {};
    LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
    (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
    var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
    po.src = '//localhost/livehelp/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    </script>
    <!-- end livehelp -->
  <?php
  }
}