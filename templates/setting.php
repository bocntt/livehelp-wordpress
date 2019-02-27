<div class="wrap">
  <h1><?php esc_html_e( "Livehelp Setting", LIVEHELP_DOMAIN ); ?></h1>
  <form action="" method="POST" id="formSetting">
    <?php wp_nonce_field('livehelp_setting_action', 'livehelp_setting'); ?>
    <table class="form-table">
      <tbody>
        <tr>
          <th><?php esc_html_e( "General", LIVEHELP_DOMAIN ); ?></th>
        </tr>
        <tr>
          <td>
            <div>
              <label for="is_internal_popup">
                <input type="checkbox"
                      id="is_internal_popup"
                      name="is_internal_popup"
                      <?php echo (isset($livehelp_config['is_internal_popup']) && $livehelp_config['is_internal_popup'] == 'on') ? 'checked="checked"' : '' ?>
                      value="on">
                <?php esc_html_e('On a mouse clock show the page widget', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="is_hide_then_offline">
                <input type="checkbox"
                      id="is_hide_then_offline"
                      name="is_hide_then_offline"
                      <?php echo (isset($livehelp_config['is_hide_then_offline']) && $livehelp_config['is_hide_then_offline'] == 'on') ? 'checked="checked"' : '' ?>
                      value="on">
                <?php esc_html_e('Hide status when offline', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="is_operator_message">
                <input type="checkbox"
                      id="is_operator_message"
                      name="is_operator_message"
                      <?php echo (isset($livehelp_config['is_operator_message']) && $livehelp_config['is_operator_message'] == 'on') ? 'checked="checked"' : '' ?>
                      value="on">
                <?php esc_html_e('Automatically check for messages from the operator/invitation messages', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="is_show_leave_form">
                <input type="checkbox"
                      id="is_show_leave_form"
                      name="is_show_leave_form"
                      <?php echo (isset($livehelp_config['is_show_leave_form']) && $livehelp_config['is_show_leave_form'] == 'on') ? 'checked="checked"' : '' ?>
                      value="on">
                <?php esc_html_e('Show a leave a message from when there are no online operators', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="is_disable_pro_active_invitations">
                <input type="checkbox"
                      id="is_disable_pro_active_invitations"
                      name="is_disable_pro_active_invitations"
                      <?php echo (isset($livehelp_config['is_disable_pro_active_invitations']) && $livehelp_config['is_disable_pro_active_invitations'] == 'on') ? 'checked="checked"' : '' ?>
                      value="on">
                <?php esc_html_e('Disable pro active invitations, usefull if you want disable them from site part', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="is_disable_online_tracking">
                <input type="checkbox"
                      id="is_disable_online_tracking"
                      name="is_disable_online_tracking"
                      <?php echo (isset($livehelp_config['is_disable_online_tracking']) && $livehelp_config['is_disable_online_tracking'] == 'on') ? 'checked="checked"' : '' ?>
                      value="on">
                <?php esc_html_e('Disable online tracking, overrides system configuration', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="embed_domain">
                <?php esc_html_e('For what domain you are generating embed code?', LIVEHELP_DOMAIN ); ?>
              </label><br>
              <input type="text"
                      id="embed_domain"
                      name="embed_domain"
                      placeholder="<?php esc_attr_e('example.com', LIVEHELP_DOMAIN) ?>"
                      value="<?php echo (isset($livehelp_config['embed_domain'])) ? $livehelp_config['embed_domain'] : '' ?>">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="http_mode">
                <?php esc_html_e('Choose predered http mode', LIVEHELP_DOMAIN) ?>
              </label><br>
              <select name="http_mode"
                      id="http_mode">
                <option value="">
                  <?php esc_html_e('Based on site (default)', LIVEHELP_DOMAIN) ?>
                </option>
                <option <?php echo (isset($livehelp_config['http_mode']) && $livehelp_config['http_mode'] == 'http:') ? 'selected="selected"' : '' ?> value="http:"><?php esc_html_e('http:', LIVEHELP_DOMAIN) ?></option>
                <option <?php echo (isset($livehelp_config['http_mode']) && $livehelp_config['http_mode'] == 'https:') ? 'selected="selected"' : '' ?> value="https:"><?php esc_html_e('https:', LIVEHELP_DOMAIN) ?></option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <th><?php esc_html_e('Design', LIVEHELP_DOMAIN) ?></th>
        </tr>
        <tr>
          <td>
            <div>
              <label for="minimize">
                <?php esc_html_e('Minimize action applies only if status widget is at the bottom', LIVEHELP_DOMAIN) ?>
              </label><br>
              <select name="minimize"
                      id="minimize">
                <option value=""
                        <?php echo (isset($livehelp_config['minimize']) && $livehelp_config['minimize'] == '') ? 'selected="selected"' : '' ?> >
                  <?php esc_html_e('Keep where it was', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="br"
                      <?php echo (isset($livehelp_config['minimize']) && $livehelp_config['minimize'] == 'br') ? 'selected="selected"' : '' ?> >
                  <?php esc_html_e('Minimize to bottom of the screen', LIVEHELP_DOMAIN) ?>
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="position">
                <?php esc_html_e('Position', LIVEHELP_DOMAIN) ?>
              </label><br>
              <select name="position"
                      id="position">
                <option value="original"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'original') ? 'selected="selected"' : '' ?> >
                  <?php esc_html_e('Native placement - it will be shown where the html is embedded', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="bottom_right"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'bottom_right') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Bottom right corner of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="bottom_left"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'bottom_left') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Bottom left corner of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="middle_right"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'middle_right') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Middle right side of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="middle_left"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'middle_left') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Middle left side of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="api"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'api') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Invisible only JS API will be included', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="full_height_right"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'full_height_right') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Full height left', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="full_height_left"
                  <?php echo (isset($livehelp_config['position']) && $livehelp_config['position'] == 'full_height_left') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Full height left', LIVEHELP_DOMAIN) ?>
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="popup_width">
                <?php esc_html_e('Popup window width', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="popup_width"
                    id="popup_width"
                    title="<?php esc_attr_e('Popup window width in pixels', LIVEHELP_DOMAIN) ?>"
                    value="<?php echo (isset($livehelp_config['popup_width'])) ? $livehelp_config['popup_width'] : 500 ?>">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="popup_height">
                <?php esc_html_e('Height', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="popup_height"
                    id="popup_height"
                    title="<?php esc_html_e('Popup window height in pixels', LIVEHELP_DOMAIN) ?>"
                    value="<?php echo (isset($livehelp_config['popup_height'])) ? $livehelp_config['popup_height'] : 520 ?>">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="widget_width">
                <?php esc_html_e('Widget width', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="widget_width"
                    id="widget_width"
                    title="<?php esc_html_e('Widget width in pixels', LIVEHELP_DOMAIN) ?>"
                    value="<?php echo (isset($livehelp_config['widget_width'])) ? $livehelp_config['widget_width'] : 320 ?>">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="widget_height">
                <?php esc_html_e('Height', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="widget_height"
                    id="widget_height"
                    title="<?php esc_html_e('Widget height in pixels', LIVEHELP_DOMAIN) ?>"
                    value="<?php echo (isset($livehelp_config['widget_height'])) ? $livehelp_config['widget_height'] : 340 ?>">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="top_text">
                <?php esc_html_e('Position from the top, only used if the Middle left or the Middle right side is chosen', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="top_text"
                    id="top_text"
                    value="<?php echo (isset($livehelp_config['top_text'])) ? $livehelp_config['top_text'] : 350 ?>">
              <select name="unit_top"
                      id="unit_top">
                <option value="pixels"
                  <?php echo (isset($livehelp_config['unit_top']) && $livehelp_config['unit_top'] == 'pixels') ? 'selected="selected"' : '' ?> >
                  <?php esc_html_e('Pixels', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="percents"
                  <?php echo (isset($livehelp_config['unit_top']) && $livehelp_config['unit_top'] == 'percents') ? 'selected="selected"' : '' ?>>
                  <?php esc_html_e('Percents', LIVEHELP_DOMAIN) ?>
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="site_identifier">
                <?php esc_html_e('Identifier, this can be used as filter for pro active chat invitations and is use full having different messages for different domains. Only string without spaces or special characters.', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    id="site_identifier"
                    name="site_identifier"
                    max-length="50"
                    placeholder="<?php esc_html_e('Leave empty if it is not important to you', LIVEHELP_DOMAIN) ?>"
                    value="<?php echo (isset($livehelp_config['site_identifier'])) ? $livehelp_config['site_identifier'] : '' ?>">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <textarea disabled style="width: 100%; height: 200px; font-size: 11px;"
                        id="HMLTContent">
              </textarea>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <p class="submit">
      <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
    </p>
  </form>
</div>

<script type="text/javascript">

var default_site_access = '/';

function generateEmbedCode(){
    var siteAccess = '';
    var indexSite = 'index.php/'
    var is_internal_popup = jQuery('#is_internal_popup').is(':checked') ? '/(click)/internal' : '';
    var is_disable_online_tracking = jQuery('#is_disable_online_tracking').is(':checked') ? '/(dot)/true' : '';

    var is_show_leave_form = jQuery('#is_show_leave_form').is(':checked') ? '/(leaveamessage)/true' : '';
    var is_hide_then_offline = jQuery('#is_hide_then_offline').is(':checked') ? '/(hide_offline)/true' : '';
    var is_operator_message = jQuery('#is_operator_message').is(':checked') ? '/(check_operator_messages)/true' : '';
    var is_disable_pro_active_invitations = jQuery('#is_disable_pro_active_invitations').is(':checked') ? '/(disable_pro_active)/true' : '';
    var id_identifier = jQuery('#site_identifier').val() != '' ? '/(identifier)/'+jQuery('#site_identifier').val() : '';
    var id_ma = jQuery('#minimize').val() != '' ? '/(ma)/'+jQuery('#minimize').val() : '';
    var id_position =  '/(position)/'+jQuery('#position').val();
    var id_tag = '';
    var top = '/(top)/'+(jQuery('#top_text').val() == '' ? 350 : jQuery('#top_text').val());
	  var topposition = '/(units)/'+jQuery('#unit_top').val();
    if (jQuery('#position').val() == 'original'){
        id_tag = "\n"+
        '<div id="lhc_status_container" ></div>'+"\n\n";
    };
    var embed_domain = jQuery('#embed_domain').val() != '' ? ',domain:\''+jQuery('#embed_domain').val()+'\'' : '';
    var embed_domain_new = jQuery('#embed_domain').val() != '' ? jQuery('#embed_domain').val() : '';

    if (embed_domain.indexOf('://') != -1) {
        alert('<?php esc_html_e( 'Please do not enter protocol, only domain name is required', LIVEHELP_DOMAIN ); ?>');
        return;
    };

    <?php
      $chatOptionsVariable = 'LHCChatOptions';
    ?>
    var http_host = '<?php echo $_SERVER['HTTP_HOST']?>';
    var script = '<script type="text/javascript">'+"\n"+"var <?php echo $chatOptionsVariable?> = {};\n"+
      '<?php echo $chatOptionsVariable?>.opt = {widget_height:'+jQuery('#widget_height').val()+',widget_width:'+jQuery('#widget_width').val()+',popup_height:'+jQuery('#popup_height').val()+',popup_width:'+jQuery('#popup_width').val()+embed_domain+'};\n'+
      '(function() {'+"\n"+
        'var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;'+"\n"+
        'var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf(\'://\')+1)) : \'\';'+"\n"+
        'var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : \'\';'+"\n"+
        'po.src = \''+jQuery('#http_mode').val()+'//'+ ((embed_domain_new) ? embed_domain_new : http_host) + '/livehelp/'+indexSite+siteAccess+'chat/getstatus'+is_internal_popup+id_position+id_ma+is_hide_then_offline+is_disable_online_tracking+is_operator_message+top+topposition+is_show_leave_form+id_identifier+is_disable_pro_active_invitations+'?r=\'+referrer+\'&l=\'+location;'+"\n"+
        'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);'+"\n"+
      '})();'+"\n"+
    '</scr'+'ipt>';

    jQuery('#HMLTContent').text(id_tag+script);
};

jQuery('#embed_domain,#is_disable_online_tracking,#minimize,#http_mode,#is_disable_pro_active_invitations,#site_identifier,#is_internal_popup,#id_position_bottom,#position,#is_show_leave_form,#is_hide_then_offline,#is_operator_message,#unit_top,#top_text,#popup_width,#popup_height,#widget_width,#widget_height').change(function(){
    generateEmbedCode();
});

generateEmbedCode();

</script>