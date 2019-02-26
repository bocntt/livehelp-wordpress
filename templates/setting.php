<div class="wrap">
  <h1>Livehelp Setting</h1>
  <form action="" method="POST">
    <?php wp_nonce_field('livehelp_setting_action', 'livehelp_setting'); ?>
    <table class="form-table">
      <tbody>
        <tr>
          <th>General</th>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_internal_popup">
                <input type="checkbox"
                      id="id_internal_popup"
                      name="id_internal_popup"
                      checked="checked"
                      value="on">
                <?php esc_html_e('On a mouse clock show the page widget', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_hide_then_offline">
                <input type="checkbox"
                      id="id_hide_then_offline"
                      name="id_hide_then_offline"
                      value="on">
                <?php esc_html_e('Hide status when offline', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_check_operator_message">
                <input type="checkbox"
                      id="id_check_operator_message"
                      name="id_check_operator_message"
                      value="on">
                <?php esc_html_e('Automatically check for messages from the operator/invitation messages', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_show_leave_form">
                <input type="checkbox"
                      id="id_show_leave_form"
                      name="id_show_leave_form"
                      checked="checked"
                      value="on">
                <?php esc_html_e('Show a leave a message from when there are no online operators', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_disable_pro_active_invitations">
                <input type="checkbox"
                      id="id_disable_pro_active_invitations"
                      name="id_disable_pro_active_invitations"
                      value="on">
                <?php esc_html_e('Disable pro active invitations, usefull if you want disable them from site part', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_disable_online_tracking">
                <input type="checkbox"
                      id="id_disable_online_tracking"
                      name="id_disable_online_tracking"
                      value="on">
                <?php esc_html_e('Disable online tracking, overrides system configuration', LIVEHELP_DOMAIN ); ?>
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_embed_domain">
                <?php esc_html_e('For what domain you are generating embed code?', LIVEHELP_DOMAIN ); ?>
              </label><br>
              <input type="text"
                      id="id_embed_domain"
                      placeholder="<?php esc_attr_e('example.com', LIVEHELP_DOMAIN) ?>"
                      value="">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="HttpMode">
                <?php esc_html_e('Choose predered http mode', LIVEHELP_DOMAIN) ?>
              </label><br>
              <select name="HttpMode"
                      id="HttpMode">
                <option value="">
                  <?php esc_html_e('Based on site (default)', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="http:"><?php esc_html_e('http:', LIVEHELP_DOMAIN) ?></option>
                <option value="https:"><?php esc_html_e('https:', LIVEHELP_DOMAIN) ?></option>
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
              <label for="MinimizeId">
                <?php esc_html_e('Minimize action applies only if status widget is at the bottom', LIVEHELP_DOMAIN) ?>
              </label><br>
              <select name="MinimizeID"
                      id="MinimizeID">
                <option value="">
                  <?php esc_html_e('Keep where it was', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="br"
                        selected="selected">
                  <?php esc_html_e('Minimize to bottom of the screen', LIVEHELP_DOMAIN) ?>
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="PositionID">
                <?php esc_html_e('Position', LIVEHELP_DOMAIN) ?>
              </label><br>
              <select name="PositionID"
                      id="PositionID">
                <option value="original">
                  <?php esc_html_e('Native placement - it will be shown where the html is embedded', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="bottom_right"
                        selected="selected">
                  <?php esc_html_e('Bottom right corner of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="bottom_left">
                  <?php esc_html_e('Bottom left corner of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="middle_right">
                  <?php esc_html_e('Middle right side of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="middle_left">
                  <?php esc_html_e('Middle left side of the screen', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="api">
                  <?php esc_html_e('Invisible only JS API will be included', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="full_height_right">
                  <?php esc_html_e('Full height left', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="full_height_left">
                  <?php esc_html_e('Full height left', LIVEHELP_DOMAIN) ?>
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_popup_width">
                <?php esc_html_e('Popup window width', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="id_popup_width"
                    id="id_popup_width"
                    title="<?php esc_attr_e('Popup window width in pixels', LIVEHELP_DOMAIN) ?>"
                    value="500">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_popup_height">
                <?php esc_html_e('Height', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="id_popup_height"
                    id="id_popup_height"
                    title="<?php esc_html_e('Popup window height in pixels', LIVEHELP_DOMAIN) ?>"
                    value="520">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_widget_width">
                <?php esc_html_e('Widget width', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="id_widget_width"
                    id="id_widget_width"
                    title="<?php esc_html_e('Widget width in pixels', LIVEHELP_DOMAIN) ?>"
                    value="300">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_widget_height">
                <?php esc_html_e('Height', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="id_widget_height"
                    id="id_widget_height"
                    title="<?php esc_html_e('Widget height in pixels', LIVEHELP_DOMAIN) ?>"
                    value="340">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_top_text">
                <?php esc_html_e('Position from the top, only used if the Middle left or the Middle right side is chosen', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    name="id_top_text"
                    id="id_top_text"
                    value="350">
              <select name="UnitsTop"
                      id="UnitsTop">
                <option value="pixels">
                  <?php esc_html_e('Pixels', LIVEHELP_DOMAIN) ?>
                </option>
                <option value="percents">
                  <?php esc_html_e('Percents', LIVEHELP_DOMAIN) ?>
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <label for="id_site_identifier">
                <?php esc_html_e('Identifier, this can be used as filter for pro active chat invitations and is use full having different messages for different domains. Only string without spaces or special characters.', LIVEHELP_DOMAIN) ?>
              </label><br>
              <input type="text"
                    id="id_site_identifier"
                    name="id_site_identifier"
                    max-length="50"
                    placeholder="<?php esc_html_e('Leave empty if it is not important to you', LIVEHELP_DOMAIN) ?>"
                    value="">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>
              <textarea style="width: 100%; height: 200px; font-size: 11px;"
                        id="HMLTContent">
              </textarea>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>

<script type="text/javascript">

var default_site_access = '/';

function generateEmbedCode(){
    var siteAccess = '';
    var indexSite = 'index.php/'
    var id_internal_popup = jQuery('#id_internal_popup').is(':checked') ? '/(click)/internal' : '';
    var id_disable_online_tracking = jQuery('#id_disable_online_tracking').is(':checked') ? '/(dot)/true' : '';

    var id_show_leave_form = jQuery('#id_show_leave_form').is(':checked') ? '/(leaveamessage)/true' : '';
    var id_hide_then_offline = jQuery('#id_hide_then_offline').is(':checked') ? '/(hide_offline)/true' : '';
    var id_check_operator_message = jQuery('#id_check_operator_message').is(':checked') ? '/(check_operator_messages)/true' : '';
    var id_disable_pro_active_invitations = jQuery('#id_disable_pro_active_invitations').is(':checked') ? '/(disable_pro_active)/true' : '';
    var id_department = jQuery('#DepartmentID').val() && jQuery('#DepartmentID').val().length > 0 && jQuery('#DepartmentID').val().join('/') != '0' ? '/(department)/'+jQuery('#DepartmentID').val().join('/') : '';
    var id_product = jQuery('#id_product_id').val() && jQuery('#id_product_id').val().length > 0 && jQuery('#id_product_id').val().join('/') != '0' ? '/(prod)/'+jQuery('#id_product_id').val().join('/') : '';

    var id_theme = jQuery('#ThemeID').val() > 0 ? '/(theme)/'+jQuery('#ThemeID').val() : '';
    var id_identifier = jQuery('#id_site_identifier').val() != '' ? '/(identifier)/'+jQuery('#id_site_identifier').val() : '';
    var id_ma = jQuery('#MinimizeID').val() != '' ? '/(ma)/'+jQuery('#MinimizeID').val() : '';
    var id_operator = jQuery('#id_operator').val() > 0 ? '/(operator)/'+jQuery('#id_operator').val() : '';
    var id_survey = jQuery('#id_Survey').val() > 0 ? '/(survey)/'+jQuery('#id_Survey').val() : '';


    var id_position =  '/(position)/'+jQuery('#PositionID').val();

    var id_tag = '';
    var top = '/(top)/'+(jQuery('#id_top_text').val() == '' ? 350 : jQuery('#id_top_text').val());
	  var topposition = '/(units)/'+jQuery('#UnitsTop').val();

    if (jQuery('#PositionID').val() == 'original'){
        id_tag = "\n"+
        '<div id="lhc_status_container" ></div>'+"\n\n";
    };

    var id_embed_domain = jQuery('#id_embed_domain').val() != '' ? ',domain:\''+jQuery('#id_embed_domain').val()+'\'' : '';
    var embed_domain = jQuery('#id_embed_domain').val() != '' ? jQuery('#id_embed_domain').val() : '';

    if (id_embed_domain.indexOf('://') != -1) {
        alert('<?php esc_html_e( 'Please do not enter protocol, only domain name is required', LIVEHELP_DOMAIN ); ?>');
        return;
    };

    <?php
      $chatOptionsVariable = 'LHCChatOptions';
    ?>
    var http_host = '<?php echo $_SERVER['HTTP_HOST']?>';
    var script = '<script type="text/javascript">'+"\n"+"var <?php echo $chatOptionsVariable?> = {};\n"+
      '<?php echo $chatOptionsVariable?>.opt = {widget_height:'+jQuery('#id_widget_height').val()+',widget_width:'+jQuery('#id_widget_width').val()+',popup_height:'+jQuery('#id_popup_height').val()+',popup_width:'+jQuery('#id_popup_width').val()+id_embed_domain+'};\n'+
      '(function() {'+"\n"+
        'var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;'+"\n"+
        'var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf(\'://\')+1)) : \'\';'+"\n"+
        'var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : \'\';'+"\n"+
        'po.src = \''+jQuery('#HttpMode').val()+'//'+ ((embed_domain) ? embed_domain : http_host) + '/livehelp/'+indexSite+siteAccess+'chat/getstatus'+id_internal_popup+id_position+id_ma+id_hide_then_offline+id_disable_online_tracking+id_check_operator_message+top+topposition+id_show_leave_form+id_department+id_operator+id_identifier+id_disable_pro_active_invitations+id_theme+id_product+id_survey+'?r=\'+referrer+\'&l=\'+location;'+"\n"+
        'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);'+"\n"+
      '})();'+"\n"+
    '</scr'+'ipt>';

    jQuery('#HMLTContent').text(id_tag+script);
};

jQuery('#LocaleID,#id_embed_domain,#DetectLanguage,#id_product_id,#id_disable_online_tracking,#MinimizeID,#id_operator,#DepartmentID,#HttpMode,#ThemeID,#id_Survey,#id_disable_pro_active_invitations,#id_site_identifier,#id_internal_popup,#id_position_bottom,#PositionID,#id_show_leave_form,#id_hide_then_offline,#id_check_operator_message,#UnitsTop,#id_top_text,#id_popup_width,#id_popup_height,#id_widget_width,#id_widget_height').change(function(){
    generateEmbedCode();
});

generateEmbedCode();

</script>